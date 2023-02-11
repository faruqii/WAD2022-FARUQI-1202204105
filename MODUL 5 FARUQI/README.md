# Module 5 - Laravel

# Installation
```bash
composer create-project laravel/laravel <your_app_name>
```

# Step 1
Copy .env.example to .env
```bash
cp .env.example .env
```

# Step 2
Generate app key
```bash
php artisan key:generate
```

# Step 3
Create database and update .env file
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DB_NAME
DB_USERNAME=root
DB_PASSWORD=
```

# Step 4
Migrate database
```bash
php artisan migrate
```

# Step 5
Run server
```bash
php artisan serve
```

# Step 6
Create Migration
```bash
php artisan make:migration create_users_table
```

# Step 7
Create Model
```bash
php artisan make:model User
```

# Step 8
Create Controller
```bash
php artisan make:controller UserController
```

# Step 9
Create Seeder
```bash
php artisan make:seeder UsersTableSeeder
```

# Project Structure

Database migrations are stored in the database/migrations directory. These files are automatically loaded by the framework and may be used to create your application's database schema.

Models are stored in the app directory. Each model is typically stored in its own file and may be related to one or more database tables. Models allow you to interact with your application's data in an object-oriented manner.

Controllers are stored in the app/Http/Controllers directory. These controllers handle incoming HTTP requests from your application and may be grouped into "resource controllers" which provide a convenient way to organize related logic into a single controller. Controllers may also be nested within "resource controllers" to better organize large applications.

Views are stored in the resources/views directory. Views contain the HTML served by your application and separate your controller / application logic from your presentation logic. Views may also be nested within sub-directories based on a controller or "resource controller".

# Routes

Routes are stored in the routes/web.php file. These routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group. Now create something great!
