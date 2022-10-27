# Employee Management System

## Installation

First clone this repository, install the dependencies, and setup your .env file.

```
git clone https://github.com/SaifullahJawad/genie_EMS.git genie_EMS
composer install
cp .env.example .env
```

Then create the necessary database.

Either import the given .sql file in your database Or run the initial migrations and seeders.

```
php artisan migrate --seed
```

And finally, start your artisan server

```
php artisan serve
```