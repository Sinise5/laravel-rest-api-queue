<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Jobs\InsertProductJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:products,name',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        dispatch(new InsertProductJob($request->all()));

        return response()->json(['message' => 'Product is being processed'], 202);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $product ? response()->json($product, 200) : response()->json(['error' => 'Not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) return response()->json(['error' => 'Not found'], 404);

        $validator = Validator::make($request->all(), [
            'name' => "required|unique:products,name,$id",
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) return response()->json(['error' => 'Not found'], 404);

        $product->delete();
        return response()->json(['message' => 'Product deleted'], 200);
    }
}
