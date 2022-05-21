<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminPanelController;

Route::get('/', fn() => view('welcome'));

# Course Routes
Route::controller(ProductController::class)->group(function () {
    Route::get('/courses/create', 'create')->name('courses.create');
    Route::post('/courses/store', 'store')->name('courses.store');
    Route::get('/courses/{course}/edit', 'edit')->name('courses.edit');
    Route::patch('/courses/{course}/update', 'update')->name('courses.update');
});

# Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('messages', [AdminPanelController::class, 'getContactMessage']);
    Route::get('users', [AdminPanelController::class, 'getUsers']);
    Route::get('courses', [AdminPanelController::class, 'getCourses']);
});
