<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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
Route::get('/login', [HomeController::class, 'login_get'])->name('login_get');
Route::post('/login', [HomeController::class, 'login_post'])->name('login_post');

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

        // admin profile
        Route::get('/admin/profile', [App\Http\Controllers\Admin\AdminController::class, 'admin_profile'])->name('admin_profile');
    });
});
