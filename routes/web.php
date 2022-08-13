<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

// Login form
Route::get('/login', [LoginController::class, 'login_get'])->name('login_get');
Route::post('/login', [LoginController::class, 'login_post'])->name('login_post');

// Customer register form
Route::get('/register', [HomeController::class, 'register_get'])->name('register_get');
Route::post('/register', [HomeController::class, 'register_post'])->name('register_post');


// Dashboard routes via MIDDLEWARE
Route::group(['middleware'=>['auth']], function()
{
    Route::group(['prefix'=> 'dashboard', 'as' => 'dashboard.'] , function()
    {
        // user dashboard
        Route::get('/',[DashboardController::class, 'dashboard_get'])->name('dashboard_get');


        // logout
        Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
    });
});

// delete user
Route::get('delete/{id}', [HomeController::class, 'delete_user'])->name('delete_user');
