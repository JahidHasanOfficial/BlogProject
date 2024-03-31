<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',[homeController::class, 'homepage'])->name('homepage');
//Route::get('/post/{id}/details', [homeController::class, 'postDetails'])->name('post.details');





Route::get('/post_details/{id}', [homeController::class, 'post_details']);












Route::get('/page',[homeController::class, 'page'])->name('page');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class, 'index'])->middleware('auth')->name('home');
//Route::get('/post',[HomeController::class, 'post'])->middleware(['auth','admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//=======Admin Route=======================================//
Route::get('/create/post',[AdminController::class, 'createPost'])->name('create.post');
Route::post('/post', [AdminController::class, 'store'])->name('post.store');
Route::get('/post/{id}/edit', [AdminController::class, 'edit'])->name('post.edit');



Route::get('/post/{id}/view', [AdminController::class, 'view'])->name('view.post');






Route::put('/posts/{id}', [AdminController::class, 'update'])->name('post.update');
Route::delete('/posts/{id}', [AdminController::class, 'destroy'])->name('post.destroy');




Route::get('/show/post', [AdminController::class, 'showPost'])->name('show.post');









