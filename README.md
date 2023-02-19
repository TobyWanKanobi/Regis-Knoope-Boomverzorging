<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Boomverzorgingsbedrijf

Install
```
git clone https://github.com/TobyWanKanobi/Regis-Knoope-Boomverzorging.git
npm install
composer install
```

### Setup Database
Create MySQL database default = 'laravel'

### Configure Environment Variables
copy the .env-example and rename it to .env
Configure your database settings in .env file (host, port, db_user, db_password, db_name)

### Final Steps
```
php artisan key:generate
php artisan migrate
php artisan db::seed
php artisan serve
```

Visit your website at http://localhost:8000

Watch javascript and sass files in resource direcory and copy the to the public folder

gulp
...


User Stories
- Homepage
- Als Klant wil ik een offerte kunnen aanvragen.
- Als beheerder wil ik offertes kunnen beheren (CRUD)
- Als beheer wik ik gebruikers kunnen beheren (CRUD)
- Gebruikers rollen
- Gebruikers beheren

- Pagination
- Bootstrap Carousel
- Bootstrap Toast

Tools
  "laravel/framework": "^8.75",
Sass
ECMAScript® 2015
![MarineGEO circle logo](https://jeremyrajan.gallerycdn.vsassets.io/extensions/jeremyrajan/vscode-lebab/1.1.0/1661484964543/Microsoft.VisualStudio.Services.Icons.Default "MarineGEO logo")