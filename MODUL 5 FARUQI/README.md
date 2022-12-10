# MODUL 5 LARAVEL

## Getting Started


- copy the .env.example file to .env
```bash
cp .env.example .env
```
- change the database name in the .env file
```bash
DB_DATABASE=your_database_name
```
- Install Composer
```bash
composer install
```
- Generate Key
```bash
php artisa key:generate
```
- migrate database
```bash
php artisan migrate
```
- link storage
```bash
php artisan storage:link
```
- run the server
```bash
php artisan serve
```