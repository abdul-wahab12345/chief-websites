<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;

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

Route::group(['middleware'=>'web'], function(){

    Route::view('/login', 'login')->name('login');
    Route::post('/getdata', [LoginController::class, 'getdata_callback'])->name('getdata');
    Route::get('/logout', [LoginController::class, 'logout_callback'])->name('logout');
    
    
    Route::get('/admin', [UserController::class, 'admin_callback'])->name('admin');
    Route::post('/add_user', [UserController::class, 'add_user_callback'])->name('add_user');
    Route::post('/add_new_user', [UserController::class, 'add_new_user'])->name('add_new_user');
    Route::delete('/delete/{user}/user', [UserController::class, 'delete_user_callback'])->name('delete_user');
    
    
    
    Route::get('/chief', [MealController::class, 'chief_callback'])->name('chief');
    Route::get('/show_meals', [MealController::class, 'show_meal_callback'])->name('show_meals');
    Route::delete('/delete/{meal}/meal', [MealController::class, 'delete_meal_callback'])->name('delete_meal');
    Route::put('/edit/{meal}/meal', [MealController::class, 'edit_meal_callback'])->name('edit_meal');
    Route::patch('/update/{meal}/meal', [MealController::class, 'update_meal_callback'])->name('update_meal');
    Route::post('/add_meal', [MealController::class, 'add_meal_callback'])->name('add_meal');
    Route::post('/add_new_meal', [MealController::class, 'add_new_meal_callback'])->name('add_new_meal');

});



