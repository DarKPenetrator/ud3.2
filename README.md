# UD3.2 - Way of Working

### Requisitos Tecnológicos

Para trabajar en este proyecto, es necesario tener **Docker**, **PHP** y **Composer** instalados en tu máquina. Con estas herramientas podrás gestionar la aplicación Laravel y la base de datos MariaDB sin necesidad de configuraciones adicionales.

### Pasos para Preparar el Proyecto

1. **Navegar al Directorio del Proyecto**
    
    Dirígete al directorio donde se encuentra el proyecto:
    
    ```bash
    cd /ud3_ejercicios/ud3-laravel/laravel/
    ```
    

    
2. **Instalar las Dependencias**
    
    Instala las dependencias del proyecto utilizando Composer:
    
    ```bash
    composer install
    ```
    
    
    
3. **Configurar el Archivo `.env`**
    
    Copia el archivo de ejemplo `.env.example` y renómbralo como `.env`. Luego, modifica los valores dentro del archivo `.env` para que se ajusten a tu configuración:
    
    ```bash
    copy .env.example .env
    ```

    
    Abre el archivo `.env` y actualiza las siguientes variables:
    
    
    ```bash
     DB_CONNECTION=mariadb
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=gestion_notas
     DB_USERNAME=root
     DB_PASSWORD=pepe
    ```
    
    
    
4. **Levantar el Contenedor de MariaDB**
    
    Para levantar el contenedor de MariaDB, ejecuta el siguiente comando:
    
    ```bash
    docker run --name mariadb-server -d -p 3306:3306 mariadb-server
    ```
    
    
    
5. **Acceder a la Base de Datos MariaDB**
    
    Una vez que el contenedor esté en funcionamiento, puedes acceder a la base de datos MariaDB con el siguiente comando:
    
    ```bash
    docker exec -it mariadb-server mariadb -u root -p
    ```
    
  
    
    La contraseña que se solicita es `pepe`.
    
6. **Crear la Base de Datos**
    
    Al acceder a MariaDB, crea la base de datos ejecutando el siguiente comando:
    
    ```bash
    create database gestion_notas;
    exit
    ```
    
 
    
7. **Crear las Tablas y Cargar Datos de Ejemplo**
    
    Dentro del directorio del proyecto Laravel, ejecuta los siguientes comandos para crear las tablas en la base de datos y cargar los datos de ejemplo:
    
    ```bash
    php artisan migrate
    
    php artisan db:seed
    ```
    
    
    
8. **Probar la API con Postman**
    
    Una vez que todo esté configurado, puedes acceder a la API y probarla utilizando los tests de Postman. La API ya está lista para realizar operaciones CRUD en los alumnos y gestionar la base de datos de manera eficiente.
