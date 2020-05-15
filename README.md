# This Project is a clone of <a href="https://github.com/francescomalatesta/laravel-api-boilerplate-jwt" target="_blank">francescomalatesta/laravel-api-boilerplate-jwt</a> for Laravel 7.2

# STEPS

## Clone the repo

git clone https://github.com/SulaimanBello/bello.laravel-api-boilerplate.git Dir

## Point to project Direcotory

cd Dir

## Install dependencies

composer install

## Create .env file

cp .env.example .env

## Generate key

php artisan key:generate

## Configure DB credentials editing .env

DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=databse  
DB_USERNAME=username  
DB_PASSWORD=password  

## Run migration

php artisan migrate

## Confirm endpoints working

php artisan serve

Then, visit http://localhost:8000/api/hello

For more information you can visit the cloned repository [francescomalatesta/laravel-api-boilerplate-jwt] (https://github.com/francescomalatesta/laravel-api-boilerplate-jwt)
