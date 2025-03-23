# Laravel

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
- **PHP** 8.4.4
- **Laravel** 12.3.0

## Instalasi
Jalankan perintah berikut:
```sh
composer install
php artisan migrate
php artisan serve

Dependensi
- **brick/math** (0.12.3)
- **carbonphp/carbon-doctrine-types** (3.2.0)
- **dflydev/dot-access-data** (v3.0.3)
- **doctrine/inflector** (2.0.10)
- **doctrine/lexer** (3.0.1)
- **dragonmantank/cron-expression** (v3.4.0)
- **egulias/email-validator** (4.0.4)
- **fakerphp/faker** (v1.24.1)
- **filp/whoops** (2.18.0)
- **fruitcake/php-cors** (v1.3.0)
- **graham-campbell/result-type** (v1.1.3)
- **guzzlehttp/guzzle** (7.9.2)
- **guzzlehttp/promises** (2.0.4)
- **guzzlehttp/psr7** (2.7.0)
- **guzzlehttp/uri-template** (v1.0.4)
- **hamcrest/hamcrest-php** (v2.0.1)
- **laravel/framework** (v12.3.0)
- **laravel/pail** (v1.2.2)
- **laravel/pint** (v1.21.2)
- **laravel/prompts** (v0.3.5)
- **laravel/sail** (v1.41.0)
- **laravel/serializable-closure** (v2.0.3)
- **laravel/tinker** (v2.10.1)
- **lcobucci/clock** (3.3.1)
- **lcobucci/jwt** (4.3.0)
- **league/commonmark** (2.6.1)
- **league/config** (v1.2.0)
- **league/flysystem** (3.29.1)
- **league/flysystem-local** (3.29.0)
- **league/mime-type-detection** (1.16.0)
- **league/uri** (7.5.1)
- **league/uri-interfaces** (7.5.0)
- **mockery/mockery** (1.6.12)
- **monolog/monolog** (3.8.1)
- **myclabs/deep-copy** (1.13.0)
- **nesbot/carbon** (3.8.6)
- **nette/schema** (v1.3.2)
- **nette/utils** (v4.0.5)
- **nikic/php-parser** (v5.4.0)
- **nunomaduro/collision** (v8.7.0)
- **nunomaduro/termwind** (v2.3.0)
- **phar-io/manifest** (2.0.4)
- **phar-io/version** (3.2.1)
- **phpoption/phpoption** (1.9.3)
- **phpunit/php-code-coverage** (11.0.9)
- **phpunit/php-file-iterator** (5.1.0)
- **phpunit/php-invoker** (5.0.1)
- **phpunit/php-text-template** (4.0.1)
- **phpunit/php-timer** (7.0.1)
- **phpunit/phpunit** (11.5.14)
- **psr/clock** (1.0.0)
- **psr/container** (2.0.2)
- **psr/event-dispatcher** (1.0.0)
- **psr/http-client** (1.0.3)
- **psr/http-factory** (1.1.0)
- **psr/http-message** (2.0)
- **psr/log** (3.0.2)
- **psr/simple-cache** (3.0.0)
- **psy/psysh** (v0.12.8)
- **ralouphie/getallheaders** (3.0.3)
- **ramsey/collection** (2.1.0)
- **ramsey/uuid** (4.7.6)
- **sebastian/cli-parser** (3.0.2)
- **sebastian/code-unit** (3.0.3)
- **sebastian/code-unit-reverse-lookup** (4.0.1)
- **sebastian/comparator** (6.3.1)
- **sebastian/complexity** (4.0.1)
- **sebastian/diff** (6.0.2)
- **sebastian/environment** (7.2.0)
- **sebastian/exporter** (6.3.0)
- **sebastian/global-state** (7.0.2)
- **sebastian/lines-of-code** (3.0.1)
- **sebastian/object-enumerator** (6.0.1)
- **sebastian/object-reflector** (4.0.1)
- **sebastian/recursion-context** (6.0.2)
- **sebastian/type** (5.1.2)
- **sebastian/version** (5.0.2)
- **staabm/side-effects-detector** (1.0.5)
- **symfony/clock** (v7.2.0)
- **symfony/console** (v7.2.1)
- **symfony/css-selector** (v7.2.0)
- **symfony/deprecation-contracts** (v3.5.1)
- **symfony/error-handler** (v7.2.4)
- **symfony/event-dispatcher** (v7.2.0)
- **symfony/event-dispatcher-contracts** (v3.5.1)
- **symfony/finder** (v7.2.2)
- **symfony/http-foundation** (v7.2.3)
- **symfony/http-kernel** (v7.2.4)
- **symfony/mailer** (v7.2.3)
- **symfony/mime** (v7.2.4)
- **symfony/polyfill-ctype** (v1.31.0)
- **symfony/polyfill-intl-grapheme** (v1.31.0)
- **symfony/polyfill-intl-idn** (v1.31.0)
- **symfony/polyfill-intl-normalizer** (v1.31.0)
- **symfony/polyfill-mbstring** (v1.31.0)
- **symfony/polyfill-php80** (v1.31.0)
- **symfony/polyfill-php83** (v1.31.0)
- **symfony/polyfill-uuid** (v1.31.0)
- **symfony/process** (v7.2.4)
- **symfony/routing** (v7.2.3)
- **symfony/service-contracts** (v3.5.1)
- **symfony/string** (v7.2.0)
- **symfony/translation** (v7.2.4)
- **symfony/translation-contracts** (v3.5.1)
- **symfony/uid** (v7.2.0)
- **symfony/var-dumper** (v7.2.3)
- **symfony/yaml** (v7.2.3)
- **theseer/tokenizer** (1.2.3)
- **tijsverkoyen/css-to-inline-styles** (v2.3.0)
- **tymon/jwt-auth** (2.2.0)
- **vlucas/phpdotenv** (v5.6.1)
- **voku/portable-ascii** (2.0.3)
- **webmozart/assert** (1.11.0)

Lisensi

MIT License
