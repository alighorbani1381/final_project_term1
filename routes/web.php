<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::controller(ProductController::class)->group(function () {
    Route::get('/courses/create', 'create')->name('courses.create');
    Route::post('/courses/store', 'store')->name('courses.store');
    Route::get('/courses/{course}/edit', 'edit')->name('courses.edit');
    Route::patch('/courses/{course}/update', 'update')->name('courses.update');
});;