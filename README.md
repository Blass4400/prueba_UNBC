README

Prueba UNBC

Descripción

Sistema de Gestión de Usuarios

    Este proyecto es un sistema de gestión de usuarios que permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre una base de datos de usuarios.
    Tecnologías y Lenguajes de Programación Utilizados

Tecnologías y Lenguajes de Programación Utilizados 

    Lenguaje de programación: PHP 8.3.12
    Framework: Laravel 11.28.1
    Base de datos: MySQLQL 

Instalación y Ejecución

    Copia el repositorio
    Ejecuta composer update para instalar las dependencias
    Ejecuta php artisan migrate para crear las tablas en la base de datos
    Ejecuta php artisan db:seed para poblar la base de datos con datos de prueba
    Configura el archivo .env con tus credenciales de base de datos
    Ejecuta php artisan serve --host=0.0.0.0 para iniciar el servidor de desarrollo


Configurar la base de datos:

    Crear una base de datos en MySQL.
    Ejecutar el script de creación de tablas (db_prueba_UNBC.sql) en la base de datos.

Características del Proyecto
    Crear usuarios nuevos
    Leer la lista de usuarios existentes
    Actualizar la información de un usuario existente
    Eliminar un usuario existente
    Validación de formularios y errores

Componentes del Proyecto
    Controlador de usuarios: responsable de enviar objetos a los componentes
    Componente de lista de usuarios: responsable de renderizar la lista de usuarios
    Componente de formulario de usuario: responsable de renderizar el formulario para crear o actualizar un usuario


Contacto
Si tienes alguna pregunta o necesitas ayuda, por favor, no dudes en contactarme.