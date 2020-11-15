<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Configuring the Project

Hello teammate, I developed an API to be able to map all the snow piles that hold our precious supplies.

After clone the project run these commands :

``` bash
npm i composer
composer self-update
composer install
php artisan migrate:fresh --seed
```

For utilizing the API just access the path /api/snowBank with the temporary token from our team. Temporary our secret are:
``` bash
eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6InJlZFRlYW0iLCJpYXQiOjE1MTYyMzkwMjJ9.a9bpT3YnBs1TckrqOM5nOmOpcs2rEA7rsk249OAOtAU
```
After access this path you can create/update/delete the snowbanks with the METHODS POST/DELETE and you can list all of them acessing with the GET METHOD.

For update or create a new snowBank posistion you will need to pass some data, like the example below.
``` bash
curl --location --request GET 'http://127.0.0.1:8000/api/snowBank' \
--header 'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6InJlZFRlYW0iLCJpYXQiOjE1MTYyMzkwMjJ9.a9bpT3YnBs1TckrqOM5nOmOpcs2rEA7rsk249OAOtAU' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IjY4Z1BFZWdJU2FCMjFxaVBJZnBaaHc9PSIsInZhbHVlIjoiOGtKNm9aM3V1cGZqelFyN2tBdHE1Z042bDRpS2JuQ0dBSFVXODgwLzZrZ1EvYzJjUlZGeEo2T1FZZjcxaGlHVHFad2dPbzZ1T0lYd2tQMVVySno0YTdkdFZtSjlydnVXZ29tUUJQaHhiZDJZeWxqb2tqT3ZHbUcxczhwMy9zZ20iLCJtYWMiOiJhNjk3NGZiY2ZiYTY2ZTg0YmE3OWFkOWMyODc2YTRlZGRlZDFjNWMyOGE1Y2Q0YWU3YWE3MjhjMDc2MjNmMTgyIn0%3D; laravel_session=eyJpdiI6IlNlRHlRVVRKTW1YQkR0WkFtaTEySGc9PSIsInZhbHVlIjoiZmtldkpiNy8zSWRCK293Zk5saHVEbklrUmJHOVdyUi9xM0NWMTB6dkhpWmJBb2l6WHVCSEFEN0FDRXdEbDBJNEpxZ1BCQVJtKy9URTUrK2RlVytoQWV5c2ZNZWhZcHoxUGV3b052REM2eWlNMFYzWERtMlZQRDdzc1ZXWFowNngiLCJtYWMiOiI3ZTI5NzIyMjA4NGY4NDA1NWY0OGNlMmE5M2M0ZmM3Y2M4ODgwOTVhNjlhODMzOTdmN2JjMmMxMjc1OWY5YzgxIn0%3D' \
--form 'supplies=Some cans of corn and coffee' \
--form 'description=This snowdrift is right under the bakery stall' \
--form 'latitude=40.7367687' \
--form 'longitude=-73.9933876' \
--form 'address=96 5th Ave, New York, NY 10011'
```

Good luck in your search and remember, stay safe!

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
