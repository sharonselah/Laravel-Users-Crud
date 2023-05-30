<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Closure route - returns a specific view 
| Controller route - invokes a specific method in a controller to fetch data
| A POST request is made to the /users URL path. The request will be handled by the 
|store method in the UserController class and the route is given the name users.store
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class ,'create'])->name('users.create'); 
Route::post('/users', [UserController::class, 'store'])->name('users.store'); 
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name ('users.edit'); 
Route::put('/users/{id}', [UserController::class, 'update'])->name ('users.update'); 
Route::get('users/{id}', [UserController::class, 'destroy'])-> name('users.destroy'); 


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])-> name('posts.create');
Route::Post('/posts', [PostController::class, 'store'])->name('posts.store');
