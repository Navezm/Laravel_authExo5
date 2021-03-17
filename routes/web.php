<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    $users = User::all();
    $profils = Profil::all();
    return view('welcome', compact('users', 'profils'));
});

Route::get('/bo', function(){
    return view('pages.backoffice');
});

Route::resource('photos', PhotoController::class);
Route::resource('users', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
