<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## macOS setup postgresql

You can install it by using homebrew. Just run the command in the terminal

    $ brew install postgresql

    $ brew services
	
	$ brew service start postgresql

	$ psql postgres

	$ CREATE DATABASE api

	$ \c api

## to run the application

    $ cd restful-api-laravel

    $ composer install
    
    $ cp .env.example .env

    $ php artisan key:generate

    $ ./bin/clear.sh 

    $ php artisan migrate  

    $ php artisan db:seed

    $ php artisan serve  
   
## test the application by using postman or thunder client VS code extension

1. GET ALL

    http://127.0.0.1:8000/api/spotifySong

2. GET BY ID

    http://127.0.0.1:8000/api/spotifySong/{id}

3. POST 

    http://127.0.0.1:8000/api/spotifySong

    pass body (JSON) :
    {
      "track_name": "XXXXXXXXXXXX",
      "artist_name": "XXXXXXXXX",
      "genre": "XXXXXXXXXXXXX",
      "popularity": INPUT DIGIT
    }
4. PUT 

    http://127.0.0.1:8000/api/spotifySong/{id}

    pass body (JSON) :
    {
      "track_name": "XXXXXXXXXXXX",
      "artist_name": "XXXXXXXXX",
      "genre": "XXXXXXXXXXXXX",
      "popularity": INPUT DIGIT
    }
5. DELETE

    http://127.0.0.1:8000/api/spotifySong/{id}
6. GET BY QUERY

    query parameter = 'track_name', 'artist_name', 'genre','popularity'

    http://127.0.0.1:8000/api/spotifySong?genre=xxxxx&popularity=79
