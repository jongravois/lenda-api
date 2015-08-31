## LENDA

[![Join the chat at https://gitter.im/jongravois/jotbot](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/jongravois/jotbot?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

This is an Laravel 5.1 application

## Installation

* Clone repo to local environment
* From the webroot, run ```composer install```
* From the webroot, run ```touch .env```
* Edit /.env (match your own setting, if necessary)

```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomStringWith32Characters
    
DB_HOST=localhost
DB_DATABASE=your-database-name
DB_USERNAME=your-mysql-username
DB_PASSWORD=your-mysql-password
```

* Create an empty database named the same as above
* From the webroot, run ```php artisan key:generate```
* From the webroot, run ```php artisan migrate```
* From the webroot, run ```php artisan migrate:refresh --seed```

## Please Note: Unusual Configuration

* With most Laravel applications, you point your document root to the /public folder. **HOWEVER**, this app is set up to run from the document root.
