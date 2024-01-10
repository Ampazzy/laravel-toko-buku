<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('books', [BookController::class, 'getBooks']);
    Route::get('books/{book}', [BookController::class, 'getBook']);
    Route::get('categories', [CategoryController::class, 'getCategories']);
    Route::get('categories/{category}/books', [CategoryController::class, 'getCategory']);
    Route::post('logout', [LoginController::class, 'logout']);
    Route::get('admin/books', [BookController::class, 'adminGetBooks']);
    Route::get('admin/books/create', [BookController::class, 'adminCreateBook']);
    Route::post('admin/books/store', [BookController::class, 'adminStoreBook']);
    Route::get('admin/books/{book}', [BookController::class, 'adminGetBook']);
    Route::get('admin/books/{book}/edit', [BookController::class, 'adminEditBook']);
    Route::post('admin/books/update/{book}', [BookController::class, 'adminUpdateBook']);
    Route::delete('admin/books/{book}', [BookController::class, 'adminDeleteBook']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    Route::get('register', [LoginController::class, 'register']);
    Route::post('register', [LoginController::class, 'SignUp']);
});
