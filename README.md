# Simple Online Bank System (Backend System)
This is a simple online banking system written in PHP using Laravel Lumen Framework. I also written the frontend that uses this backend system that you can also clone. This is the link to the repository of the frontend https://github.com/joseph-bautista/online_bank_ui

> Please note that the frontend system of this is the recommended frontend to be used. If you wish to create your own frontend system, please refer to this https://www.postman.com/lunar-star-596261/workspace/online-banking-system/overview It is a postman workspace than you can check so you may know the API endpoints that is being used in this system 

# Setting up the system
1. Clone the repository by opening your terminal and run the 
> git clone https://github.com/joseph-bautista/online_bank.git 
2. Go to the directory of the project by running
> cd online_bank 
3. Create your .env file to the root of the project and update necessary details such as database details.
4. Create an empty database in mysql.
5. Go back to the terminal and run 
> composer install 
6. After that, we can create tables and seed our tables by running
> php artisan migrate:fresh --seed 
7. We can now run the server by running
> php -S localhost:8000 -t public 

And viola! We have set up our online bank backend system. 

We can access the postman workspace here https://www.postman.com/lunar-star-596261/workspace/online-banking-system/overview choose local environment and play along the API Endpoints. 

We can then proceed to setting up the UI of it in a separate repository. You can follow the steps here https://github.com/joseph-bautista/online_bank_ui 


# The Database Diagram
![alt text](https://github.com/joseph-bautista/online_bank/blob/master/online_banking.png?raw=true)



# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

> **Note:** In the years since releasing Lumen, PHP has made a variety of wonderful performance improvements. For this reason, along with the availability of [Laravel Octane](https://laravel.com/docs/octane), we no longer recommend that you begin new projects with Lumen. Instead, we recommend always beginning new projects with [Laravel](https://laravel.com).

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
