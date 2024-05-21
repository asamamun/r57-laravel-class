<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DbtestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\Teacher\AttendenceController;
use App\Http\Controllers\Teacher\QuizController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdminRole;
use Barryvdh\Debugbar\DataCollector\QueryCollector;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
})->name('home');
//code segment
Route::get('/testsegment/{a}/{b}', [TestController::class, 'testsegment']);
Route::get('/userparam/{userid}', [TestController::class, 'userinfo']);
// Route::get('/','welcome');
Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');
Route::get('/collection', [TestController::class, 'collection']);
// Route::get('/ct', [TodoController::class, 'createtodo']);

Route::prefix('userinfo')->group(function () {
Route::get('/su/{uid}', [UserController::class, 'showuser'])->where('uid', '[0-9]+');
Route::get('/ct', '\App\Http\Controllers\TodoController@createtodo');
Route::get('/helpertest', [TestController::class, 'helpertest']);
});

Route::namespace('Teacher')->group(function () {
Route::get('/attendence/show', [AttendenceController::class, 'viewattendence'])->name('showatt')->middleware('signed');
Route::get('/quiz', [QuizController::class, 'index']);
});


Route::fallback(function () {
    return view("notfound");
   });
   
Route::get('/testlink/morepath/somemorepath/{var1}/{var2}/{var3}', [TestController::class, 'testthreeparam'])->name('test.threepath')->middleware('throttle:100,1');
Route::get("testparam", [TestController::class, 'testparam']);

//query builder
Route::get('/db/dbone', [DbtestController::class, 'dbone']);
//profiletest
Route::get('/profiletest/{id}', [UserController::class, 'profiletest']);
Route::middleware(CheckAdminRole::class)->group(function () {
    Route::post('/todo', [TodoController::class, 'store']);
    // Route::delete('/todo', [TodoController::class, 'checkdelete']);
    Route::get('/todo/add', [TodoController::class, 'create']);
    Route::get('/users', [UserController::class, 'index'])->name('users');
    // Route::get('/categories', [CategoryController::class, 'index']);
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubCategoryController::class);
    Route::resource('products', ProductController::class);
    Route::post('deleteimage/{id}', [ProductController::class, 'deleteImage'])->name('deleteimage');
    // store product comment
    Route::post('productcomment/{id}', [ProductController::class, 'storecomment'])->name('storecomment');

});
Route::get("/getsubcat/{id}",[SubcategoryController::class, 'getSubcat']);
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');;
/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//clear all
Route::get('ca', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    dd("view cleared");
});

require __DIR__.'/auth.php';
