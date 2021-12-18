composer install

composer create-project --prefer-dist laravel/laravel laravel-api

php artisan key:generate

####create database in phpmyadmin with name:
DB_DATABASE=laravel in .env file

####create migration command: 
php artisan make:migration create_students_table --create=students

####run migration command:
php artisan migrate

####create controller command:
php artisan make:controller StudentController --resource --model=Student

####run server command:
php artisan serve

http://localhost/laravel-crud/public/student

http://recep-laravel-crud.herokuapp.com/public/student

####heroku için sadece proje dizininde Procfile oluşturmalı içeriği: 
web: vendor/bin/heroku-php-apache2 public/