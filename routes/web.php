<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::get('/books/{id}/edit', [BookController::class, 'edit']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::post('/books/{id}/edit', [BookController::class, 'edit']);
Route::put('/books/{id}', [BookController::class, 'update']);
Route::post('/books', [BookController::class, 'store']);
Route::delete('/books/{id}/destroy', [BookController::class, 'destroy']);