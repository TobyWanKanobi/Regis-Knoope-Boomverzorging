<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Demo Project: Boomverzorgingsbedrijf

#### Installation Guide
```
git clone https://github.com/TobyWanKanobi/Regis-Knoope-Boomverzorging.git
npm install
composer install
```

#### Setup Database
Create MySQL database default = 'laravel'

#### Configure Environment Variables
Copy the *.env-example* and rename it to *.env*
Update the *.env* file with your database settings (host, port, db_user, db_password, db_name)

```
php artisan key:generate
php artisan migrate
php artisan db::seed
php artisan serve
```

Visit your website at http://localhost:8000

##### Developers
- This project uses Gulp

<p align="center"><a href="https://gulpjs.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Gulp.js_Logo.svg/175px-Gulp.js_Logo.svg.png?20180427053858" width="50"></a></p>


# Functional Requirements
- Als Klant wil ik een offerte kunnen aanvragen.
- Als klant wil ik contact gegevens kunnen vinden.
- Als beheerder wil ik kunnen inloggen met naam en wachtwoord.
- Als beheerder wil ik offertes kunnen beheren (CRUD)
- Als beheer wik ik gebruikers kunnen beheren (CRUD)

# Features
- Pagination
- Bootstrap Carousel
- Bootstrap Toast

Tools
  "laravel/framework": "^8.75",
Sass
ECMAScript® 2015


- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.
