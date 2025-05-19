<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).






## Laravel Project Setup with MySQL (Instead of SQLite)
### This documentation outlines the steps required to set up a Laravel project to run with MySQL on a local development environment (XAMPP + Laravel 12.x).

## 🔧 Prerequisites
PHP 8.4.x
Composer
Laravel (v12.x)
MySQL (via XAMPP)
VS Code / Terminal

## 🧱 1. Install Laravel Project (if not already)
laravel new MissionGermany
cd MissionGermany

## 🛠️ 2. Update Database Configuration
Open the .env file and update the database section:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=missiongermany_db
DB_USERNAME=root
DB_PASSWORD=
## ✅ You replaced the SQLite configuration with MySQL.

## 🗂️ 3. Create MySQL Database
Go to http://localhost/phpmyadmin and create a new database:
Database name: missiongermany_db

## ✅ This matches the value you set in .env.

## 🧹 4. Clear Config and Cache
Run the following commands to clear previous SQLite config:
php artisan config:clear
php artisan cache:clear

## 🧪 5. Test Database Connection & Run Migrations
php artisan migrate
If successful, it means MySQL is connected correctly, and your database is ready.

## 🚀 6. Run the Laravel Development Server
php artisan serve
Visit your project in the browser:
http://127.0.0.1:8000

## 🔍 7. Check Laravel Version (Optional)
You can check which version of Laravel you are using with:
php artisan --version
Or check composer.json under "laravel/framework".

## 📂 Summary of Changes Made
File Modified	Change Summary
.env	Changed DB_CONNECTION to mysql and set DB name, user, and password
MySQL (phpMyAdmin)	Created new DB: missiongermany_db
Terminal Commands	Cleared config/cache, ran migrations

## Nafizul Islam
## B.Sc in Software Engineering
## Daffodil International University (2019-2023)