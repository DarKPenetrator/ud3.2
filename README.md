# ud3.2 WOW


se tiene que tener instakadio docker, php y composer para que el proyecto funcione
navega al directorio de /ud3_ejercicios/ud3-laravel/laravel/
composer install

copy .env.example .env
 modifica el .env

DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gestion_notas
DB_USERNAME=root
DB_PASSWORD=pepe

docker run --name mariadb-server -d -p 3306:3306 mariadb-server

para poder entrar a la base de datos 

docker exec -it mariadb-server mariadb -u root -p
contraseña que pide es "pepe"

entrar mariadb crear bd y salir
create database gestion_notas;
exit

creamos las tablas y datos de ejemplo
php artisan migrate 
php artisan db:seed

una vez creado todo esto podemos acceder a traves de los Apis con los test de postman 

