<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShowroomController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// ==================== User Route ====================
Route::get('/register', [AuthController::class, 'index'])->name('register.get');
Route::post('/register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'login'])->name('login.get');
Route::post('login', [AuthController::class, 'loginUser'])->name('login.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout.get');
route::post('/logout', [AuthController::class, 'logoutUser']);
route::put('/profile/{id}', [AuthController::class, 'edit'])->name('updateProfile.put');
Route::get('/profile/{id}', [AuthController::class, 'userDetail'])->name('userDetail');



// ==================== Showroom Route ====================
Route::post('addCar', [ShowroomController::class, 'addCar'])->name('addCar.post');
Route::get('/list', [ShowroomController::class, 'showCar'])->name('showCar');
Route::get('/detail/{id}', [ShowroomController::class, 'carDetail'])->name('carDetail');
Route::put('/detail/{id}', [ShowroomController::class, 'editCar'])->name('updateCar.put');
Route::delete('list/{id}', [ShowroomController::class, 'deleteCar']);


// ==================== View Route ====================
Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/update', function () {
    return view('update');
});