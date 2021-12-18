composer install

composer create-project --prefer-dist laravel/laravel laravel-api

php artisan key:generate

#### run server command:
php artisan serve

#### heroku için sadece proje dizininde Procfile oluşturmalı içeriği: 
web: vendor/bin/heroku-php-apache2 public/