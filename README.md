
Cara menjalankan bonus_case (dibuat menggunakan laravel):

install dependencies : composer install
buat file .env : cp .env.example .env
ubah file .env menjadi :
...
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password
...

generate key : php artisan key:generate

Migrasi database : php artisan migrate

jalankan : php artisan serve