<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;

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
//     return view('home');
// });

Route::get('/', [homeController::class, 'index']);

Route::get('/users', [adminController::class, 'user']);

Route::get('/deleteuser/{id}', [adminController::class, 'deleteuser']);

Route::get('/foodmenu', [adminController::class, 'foodmenu'])->name("foodmenu");

Route::get('/deletefood/{id}', [adminController::class, 'deletefood']);

Route::post('/uploadfood', [adminController::class, 'upload']);

Route::get('/foodview/{id}', [adminController::class, 'foodview']);

Route::post('/updatefood/{id}', [adminController::class, 'updatefood']);

Route::post('/reservation', [adminController::class, 'reservation']);

Route::get('/viewreservation', [adminController::class, 'viewreservation']);

Route::get('/deletereservation/{id}', [adminController::class, 'deletereservation']);

Route::get('/chef', [adminController::class, 'chef']);

Route::post('/uploadchef', [adminController::class, 'uploadchef']);

Route::get('/deletechef/{id}', [adminController::class, 'deletechef']);

Route::get('/chefview/{id}', [adminController::class, 'chefview']);

Route::post('/updatechef/{id}', [adminController::class, 'updatechef']);

Route::get('/redirects',[homeController::class, 'redirects']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
