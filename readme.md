## LENDA

This is an Laravel 5.1 application

## Installation

* Clone repo to local environment
* From the webroot, run ```composer install```
* From the webroot, run ```touch .env```
* Edit /.env (match your own setting, if necessary)

```
APP_ENV=local
APP_DEBUG=true
APP_KEY=secret-key
    
DB_HOST=localhost
DB_DATABASE=your-database-name
DB_USERNAME=your-mysql-username
DB_PASSWORD=your-mysql-password
```

* Create an empty database named as above
* From the webroot, run ```php artisan key:generate```
* From the webroot, run ```php artisan migrate```
* From the webroot, run ```php artisan migrate:refresh --seed```

## Please Note: Unusual Configuration

* With most Laravel applications, you point your document root to the /public folder. **HOWEVER**, this app is set up to run from the document root.
