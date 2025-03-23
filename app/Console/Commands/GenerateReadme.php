<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateReadme extends Command
{
    protected $signature = 'make:readme';
    protected $description = 'Generate README.md file automatically';

    public function handle()
    {
        $projectName = config('app.name', 'Laravel Project');
        $phpVersion = PHP_VERSION;
        $laravelVersion = app()->version();
        $dependencies = shell_exec('composer show --format=json');
        $dependencies = json_decode($dependencies, true)['installed'] ?? [];

        $dependenciesList = "";
        foreach ($dependencies as $package) {
            $dependenciesList .= "- **{$package['name']}** ({$package['version']})\n";
        }

        $readmeContent = <<<EOT
# $projectName

## Deskripsi
Ini adalah proyek Laravel Login Auth, CRUD menggunakan queue:work.

🔹 Buat Produk (POST)
curl -X POST http://127.0.0.1:8001/api/products \
     -H "Accept: application/json" \
     -H "Content-Type: application/json" \
     -d '{"name": "Product B", "description": "Product B Desc", "price": 15000}'

🔹 Ambil Semua Produk (GET)
curl -X GET http://127.0.0.1:8001/api/products -H "Accept: application/json"

🔹 Ambil 1 Produk (GET by ID)
curl -X GET http://127.0.0.1:8001/api/products/1 -H "Accept: application/json"

🔹 Update Produk (PUT)
curl -X PUT http://127.0.0.1:8001/api/products/1 \
     -H "Accept: application/json" \
     -H "Content-Type: application/json" \
     -d '{"name": "Updated Product", "description": "Updated Desc", "price": 20000}'

🔹 Hapus Produk (DELETE)
curl -X DELETE http://127.0.0.1:8001/api/products/1 -H "Accept: application/json"

1️⃣ Register
POST http://127.0.0.1:8000/api/register
Content-Type: application/json

{
  "name": "User1",
  "email": "user1@example.com",
  "password": "password123"
}

2️⃣ Login (get token JWT)
POST http://127.0.0.1:8000/api/login
Content-Type: application/json

{
  "email": "user1@example.com",
  "password": "password123"
}

3️⃣ Check Profile (Butuh Token)
GET http://127.0.0.1:8000/api/profile
Authorization: Bearer TOKEN_DARI_LOGIN

4️⃣ Logout (Butuh Token)
POST http://127.0.0.1:8000/api/logout
Authorization: Bearer TOKEN_DARI_LOGIN


## Teknologi yang Digunakan
- **PHP** $phpVersion
- **Laravel** $laravelVersion

## Instalasi
Jalankan perintah berikut:
```sh
composer install
php artisan migrate
php artisan serve

Dependensi
$dependenciesList
Lisensi

MIT License

EOT;

File::put(base_path('README.md'), $readmeContent);

    $this->info('README.md berhasil dibuat!');
}
}