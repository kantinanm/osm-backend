### Features

Demo JWT Auth

# How to install

Use powershell or cmd and type by order, please see below.

-   `git clone https://github.com/kantinanm/osm-backend.git`
-   `cd laravel-ldap`
-   > install package dependency in this project.
    > `composer install`
-   > create .env and modify value.
    > `cp .env.example .env`
    > In windows use command `copy .env.example .env`
    > generate key in this project.
    > `php artisan key:generate`
    > at .env file to modify value,

    ```php
      DB_CONNECTION=pgsql
      DB_HOST=<your_database_IP_address>
      DB_PORT=5432
      DB_DATABASE=//
      DB_USERNAME=postgres
      DB_PASSWORD=//

      JWT_SECRET= //php artisan jwt:secret

    ```

-   > migrate database ,please config .env (DB_DATABASE, DB_USERNAME,DB_PASSWORD) before run command below.
    > `php artisan migrate`
-   `php artisan serve`

# Test URL

http://localhost:8000/

## Sample register

### Register

-   Use POSTMAN to generate POST request for register user.
    http://localhost:8000/api/register with json data
    ```php
    {
        "name":"", //that your wish
        "email":"", //that your wish
        "password":"" //that your wish
    }
    ```

### Login

-   Use POSTMAN to generate POST request for Login user.
    http://localhost:8000/api/login with json data
    ```php
    {
        "email":"", //that your wish
        "password":"" //that your wish
    }
    ```

### Get data

-   Use POSTMAN to generate GET request for retrive example data.
    http://localhost:8000/api/get_user with json data
    ```php
    {
        "token":"", //
    }
    ```
