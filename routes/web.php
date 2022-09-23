<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

//http verbs: get, post, put/patch, delete

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin1')->group(function () {

    Route::get('/', [AdminController::class,'index']
    )->name('index');

    Route::prefix('category')->name('category.')->group(function () {
Route::get('/cat_list', [AdminController::class,'category_list']
)->name('category_list');

Route::get('/cat_add', [AdminController::class,'category_add']
)->name('category_add');
Route::get('/cat_edit', [AdminController::class,'category_edit']
)->name('category_edit');
    });
});



Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('users.profile');
});

Route::get('/home', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');

        // Route::get('/{id}', function ($userId) {
        //     dd('showing---->' . $userId);
        // })->name('show');

        Route::get('/{id}', [UserController::class, 'show'])->name('show');
    });
});


Route::fallback(function () {
    dd('Tomar chaoa puron korte parbona.....');
});
