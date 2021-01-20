<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/form', [UserController::class, 'formUser']);
Route::post('/users/create', [UserController::class, 'createUser'])->name('user.create');
Route::get('/users/view/{id}', [UserController::class, 'viewUser']);
Route::get('/users/edit/{id}', [UserController::class, 'editUser']);
Route::post('/users/update', [UserController::class, 'updateUser'])->name('user.update');
Route::get('/users/delete/{id}', [UserController::class, 'deleteUser']);
Route::get('/search/name', [UserController::class, 'searchByName'])->name('user.name');
