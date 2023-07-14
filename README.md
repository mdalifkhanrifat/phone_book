# Phonebook Installation
Clone this repository:
$ git clone https://github.com/mdalifkhanrifat/phone_book.git

Change Directory:
$ cd phone_book

Install Composer"
$ composer install

Config .env file and change db name:
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

Generate Key:
$ php artisan key:generate

Run Database Migration:
$ php artisan migrate

Start Local Development Server:
$ php artisan serve
