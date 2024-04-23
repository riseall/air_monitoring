----------

# Air Monitoring

# Getting started

## How to install
Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/11.x/installation#installation)

### Clone Repository
open your terminal, go to the directory that you will install this project, then run the following command:

    git clone https://github.com/riseall/air_monitoring.

### Switch to the repo folder

    cd air_monitoring

### Install all the dependencies using composer

    composer install

### Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

### Generate a new application key

    php artisan key:generate

## Migrate Data
### Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

### Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
