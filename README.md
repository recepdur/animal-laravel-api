#### create laravel project
composer create-project --prefer-dist laravel/laravel laravel-api

#### create app key
php artisan key:generate

#### run server command
php artisan serve

#### heroku için; proje dizininde Procfile oluşturmalı içeriği
web: vendor/bin/heroku-php-apache2 public/


https://www.positronx.io/build-secure-php-rest-api-in-laravel-with-sanctum-auth/
https://www.laravelcode.com/post/laravel-8-sanctum-api-authentication-tutorial