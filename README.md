
Cara menjalankan bonus_case (dibuat menggunakan laravel):       
        
install dependencies : composer install      
install npm dependencies & build : npm install && npm run build      
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
     
![ss](https://res.cloudinary.com/hsthafid/image/upload/v1659678249/ecampuz/1_cfoesk.png)   
![ss](https://res.cloudinary.com/hsthafid/image/upload/v1659678249/ecampuz/2_gcfor6.png)    
![ss](https://res.cloudinary.com/hsthafid/image/upload/v1659678249/ecampuz/3_nh4kvd.png)    
![ss](https://res.cloudinary.com/hsthafid/image/upload/v1659678249/ecampuz/4_sw0mlx.png)    
![ss](https://res.cloudinary.com/hsthafid/image/upload/v1659678249/ecampuz/5_cuad6z.png)
