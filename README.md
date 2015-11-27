SVU Servidor
====================

About
-----
SVU Servidor; REST API.

Dudas, comentarios y demás:[suericgp@gmail.com]


¿Cómo instalar?
--------------

1. Instalar [Composer] (https://getcomposer.org/download/) . Se necesita php > 5
2. Instalar [Laravel] (http://laravel.com/docs/5.1#installation) . Instalar Via Composer
3. Ir a la carpeta del proyecto .
4. Correr `composer install`.
5. Renombrar archivo .env.example a .env .
6. Correr `php artisan key:generate` .
7. Correr `php artisan serve` para probar .
8. Ir al navegador: [http://localhost:8000] (http://localhost:8000) . Debería verse: LARAVEL 5 .
9. Conseguir IP de interfaz WiFi .
10. Editar .env . Cambiar DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD por las suyas.
11. Correr `php -S IP:PUERTO -t public` .
12. Abrir navegador con IP y PUERTO deseado . Ej: [http://192.168.1.1:8000] .

Nota
-----
Para que SVU iOS y SVU DASU reconozca al Servidor, estos deben estar en la misma red
