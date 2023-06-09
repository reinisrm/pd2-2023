<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

// Authors routes
Route::get('/authors',[AuthorController::class, 'list']);
Route::get('/authors/create', [AuthorController::class, 'create']);
Route::post('authors/put',[AuthorController::class, 'put']);
Route::get('/authors/update/{author}', [AuthorController::class, 'update']);
Route::post('/authors/patch/{author}', [AuthorController::class, 'patch']);
Route::post('authors/delete/{author}', [AuthorController::class, 'delete']);

// Authors routes
Route::get('/books',[BookController::class, 'list']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('books/put',[BookController::class, 'put']);
Route::get('/books/update/{book}', [BookController::class, 'update']);
Route::post('/books/patch/{book}', [BookController::class, 'patch']);
Route::post('books/delete/{book}', [BookController::class, 'delete']);


//Auth routes
Route::get('/login', [AuthController::class, 'login'])->name('login'); 
Route::post('/authenticate', [AuthController::class, 'authenticate']); 
Route::get('/logout', [AuthController::class, 'logout']); 