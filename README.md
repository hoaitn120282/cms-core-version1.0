# CMS 1.0

This is an implementation of Content Management System based on [Laravel 5.2](http://laravel.com/) 

## System Requirements
CMS 1.0 is designed to run on a machine with PHP 5.5.9 and MySQL 5.5.

* PHP >= 5.5.9 with
    * OpenSSL PHP Extension
    * PDO PHP Extension
    * Mbstring PHP Extension
    * Tokenizer PHP Extension
* [Composer](https://getcomposer.org/) installed to load the dependencies of CMS 1.0.

### Installing

Please check the system requirements before installing CMS 1.0.

* Enter your database details in .env file on root folder.
* Publish and seed
    * php artisan migrate --seed to setup your database.
* You can contigure mail server details in config/mail.php.
* You can configure the site in the config folder before production.
* Finally, setup an Apache VirtualHost to point to the "public" folder.
* For development, you can simply run php artisan serve

## Administrator Login

* Url: sites-public-url/administrator
* Superuser : 
    *  Username : admin@admin.com
    *  Password : admin

## License

CMS 1.0 is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
