<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about.index');

Route::get('/image', [ImageController::class, 'index'])->name('image.index');
Route::get('/image/create', [ImageController::class, 'create'])->name('image.create');
Route::post('/image', [ImageController::class, 'store'])->name('image.store');
Route::delete('/image/{image}', [ImageController::class, 'destroy'])->name('image.destroy');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::delete('/books/{book}/destroy', [BookController::class, 'destroy'])->name('books.destroy');