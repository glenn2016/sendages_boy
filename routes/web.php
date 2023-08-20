<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\googleController;



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
    return view('template.index');
});


// route google

Route::get('/auth/google/redirect', [googleController::class ,'redirect']);    
Route::get('/auth/google/callback-url',[googleController::class,'callback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/redirects',[adminController::class, 'redirectpage']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// vue template

Route::get('template.contact',[homeController::class,'contact']);

Route::get('template.about',[homeController::class,'about']);

Route::get('template.service',[homeController::class,'service']);

// admin 

Route::get('admin.table',[adminController::class,'table']);
Route::get('admin.menu',[adminController::class,'menu']);
Route::get('admin.menuf',[adminController::class,'menuf']);
Route::get('admin.creation_sendage',[adminController::class,'createsendages']);

//Suppression utilisateur

Route::delete('/destroy_User/{id}', [adminController::class, 'destroy_User'])->name('destroy_User');
