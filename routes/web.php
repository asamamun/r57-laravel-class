<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdminRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');
// Route::get('/ct', [TodoController::class, 'createtodo']);
Route::get('/ct', '\App\Http\Controllers\TodoController@createtodo');

Route::get('/su/{uid}', [UserController::class, 'showuser'])->where('uid', '[0-9]+');

//profiletest
Route::get('/profiletest/{id}', [UserController::class, 'profiletest']);
Route::middleware(CheckAdminRole::class)->group(function () {
    Route::post('/todo', [TodoController::class, 'store']);
    Route::get('/todo/add', [TodoController::class, 'create']);
    Route::get('/users', [UserController::class, 'index'])->name('users');
    // Route::get('/categories', [CategoryController::class, 'index']);
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubCategoryController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
