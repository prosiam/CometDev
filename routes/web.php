<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*
*Admin template show
*/
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'showLoginForm'])->name('login');
Route::get('/admin/registration', [App\Http\Controllers\AdminController::class, 'showRegistrationForm'])->name('registration');
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'showDashboard'])->name('dashboard');


// Registration
Route::post('admin/registration', [App\Http\Controllers\Auth\RegisterController::class,'register'])->name('register');


// login
Route::post('admin/login',[\App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');


// logout
Route::post('admin/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');


//Posts
Route::resource('admin/post', App\Http\Controllers\PostController::class);


//Categories
Route::resource('admin/category', App\Http\Controllers\CategoryController::class);

