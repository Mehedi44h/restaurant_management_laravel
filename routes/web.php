<?php

use App\Http\Controllers\AdminController;
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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/redirects', [HomeController::class, 'redirects']);
Route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);
Route::get('/showcart/{id}', [HomeController::class, 'showcart']);
Route::get('/remove_item/{id}', [HomeController::class, 'remove_item']);
Route::post('/order_confirm', [HomeController::class, 'order_confirm']);






Route::get('/users', [AdminController::class, 'users']);
Route::get('/delete/{id}', [AdminController::class, 'delete']);
Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
Route::post('/uploadfood', [AdminController::class, 'uploadfood']);
Route::get('/delete_food/{id}', [AdminController::class, 'delete_food']);
Route::get('/edit_food/{id}', [AdminController::class, 'edit_food']);
Route::post('/update/{id}', [AdminController::class, 'update']);
Route::post('/reservation', [AdminController::class, 'reservation']);
Route::get('/reserved', [AdminController::class, 'reserved']);
Route::get('/cancel_reserve/{id}', [AdminController::class, 'cancel_reserve']);
Route::get('/view_shefs', [AdminController::class, 'view_shefs']);
Route::post('/add_shefs', [AdminController::class, 'add_shefs']);
Route::get('/orders', [AdminController::class, 'orders']);