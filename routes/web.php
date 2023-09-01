<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/',[PostController::class,'login']);
Route::get('/posts/reflect' , [PostController::class, 'reflect']);
Route::get('/posts/check' , [PostController::class, 'check']);
Route::get('/posts/index' , [PostController::class, 'index']);
Route::get('/posts/myself' , [PostController::class, 'myself']);
Route::get('/posts/create' , [PostController::class, 'create']);
Route::post('/posts/add' , [PostController::class, 'add']);
Route::get('/posts/{post}/confirm' , [PostController::class, 'today']);
Route::put('/posts/{post}' , [PostController::class, 'update']);
Route::get('/posts/{post}/edit' , [PostController::class, 'edit']);
Route::put('/posts/{post}/save' , [PostController::class, 'save']);
Route::delete('/posts/{post}/delete', [PostController::class,'delete']);


require __DIR__.'/auth.php';
