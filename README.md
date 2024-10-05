# Proyecto WEB APP - BACKEND

Este proyecto es una API creada con Laravel que sirve como backend para una aplicación web. A continuación, se describen los pasos necesarios para instalar y poner en marcha el entorno de desarrollo.

## Requisitos

- PHP versión 8.3.12 o superior
- Laravel 11
- Composer versión 2.8.0 o superior
- Git

## Instalación

### 1. Clonar el repositorio
Para empezar, clona el repositorio del proyecto y accede al directorio:

    ```bash
    git clone https://github.com/Fercho63036/a20-back-end-test.git
    cd a20-back-end-test
    ```

2. Instalar dependencias
Instala todas las dependencias necesarias del proyecto usando el siguiente comando:

    ```bash
    composer install
    ```

3. Configurar variables de entorno
Copia el archivo de ejemplo .env y crea tu propio archivo de configuración:

    ```bash
    cp .env.example .env
    ```

4. Generar la clave de la aplicación
Genera una clave de cifrado única para la aplicación:

    ```bash
    php artisan key:generate
    ```

5. Ejecutar el servidor de desarrollo
Levanta el servidor localmente usando:

    ```bash
    php artisan serve
    ```
Con esto, la API estará disponible en http://localhost:8000/api para interactuar con el frontend.

Pruebas
Para ejecutar los tests del proyecto, utiliza el siguiente comando:

    ```bash
    php artisan test
    ```