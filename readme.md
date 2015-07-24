## LENDA

This is an Laravel 5.1 application

## Installation

* Clone repo to local environment
* From root, run ```composer install```
* Run ```touch .env```
* Open site in favorite text editor (```pstorm .```)
  
```
<?php return 'local';
```

* Edit .env (match your own setting, if necessary)

```
APP_ENV=local
APP_DEBUG=true
APP_KEY=lk7IqejFTEqaIep8guBE16Mg5JWpZtHj
    
DB_HOST=localhost
DB_DATABASE=jotbot
DB_USERNAME=root
DB_PASSWORD=secret
```

* Create an empty database named ```jotbot```
* Run ```php artisan migrate```
* Run ```php artisan migrate:refresh --seed```


