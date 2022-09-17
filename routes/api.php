<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/book', [BookController::class, 'getAll'])->name('getAllBooks');
Route::delete('/book/{id}', [BookController::class, 'delete'])->name('deleteBook');
Route::patch('/book/{id}', [BookController::class, 'edit'])->name('getAllBooks');
Route::post('/book', [BookController::class, 'create'])->name('createBook');
