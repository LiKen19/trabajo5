# API de Productos en Laravel

Este proyecto es una API RESTful desarrollada con Laravel que permite gestionar productos de manera sencilla.
Incluye endpoints para listar, crear, actualizar y eliminar productos, así como seeders para poblar la base de datos con datos iniciales.

## Tecnologías utilizadas

PHP 8+

Laravel 12

MySQL

Composer

Postman (para pruebas de endpoints)

Git / GitHub

## Instalación del proyecto

### 1. Clonar el repositorio

git clone https://github.com/LiKen19/trabajo5.git

cd trabajo5


### 2. Instalar dependencias

composer install


### 3. Configurar el entorno

Copia el archivo .env.example a .env

cp .env.example .env


### 4. Configura tus credenciales de base de datos en .env

DB_DATABASE=tienda_api

DB_USERNAME=root

DB_PASSWORD=


### 5. Generar la clave de la aplicación

php artisan key:generate


### 6. Ejecutar las migraciones

php artisan migrate


### 7. Ejecutar los seeders

php artisan db:seed --class=ProductSeeder

## Endpoints disponibles
Método	Endpoint	Descripción
GET	/api/products	Listar todos los productos
POST	/api/products	Crear un nuevo producto
GET	/api/products/{id}	Mostrar un producto específico
PUT	/api/products/{id}	Actualizar un producto existente
DELETE	/api/products/{id}	Eliminar un producto

💡 Puedes probarlos en Postman o URL con el prefijo base:
http://127.0.0.1:8000/api/products

## Ejemplo de producto (JSON)
{
  "name": "Coca-Cola",
  "description": "Gaseosa 500ml",
  "sku": "XD010",
  "stock": 20,
  "price": 11.00,
  "is_active": 1
}
