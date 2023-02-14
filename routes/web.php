<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CofController;


// use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProfileController;

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

Auth::routes();



Route::group(['middleware' => 'auth'], function() {

    return view('coffe.index');

});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/edit/{id}', [CofController::class, 'edit']);


Route::group(['middleware' => ['admin']], function () {
  Route::resource('coffe',CofController::class);
});



Route::middleware(['auth'])->group(function () {
  Route::get('profile',[ProfileController::class,'index'])->name('profile');
  Route::post('profile/{user}',[ProfileController::class,'update'])->name('profile.update');
});

Route::get('/change-password', [App\Http\Controllers\ChangePassword::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\ChangePassword::class, 'updatePassword'])->name('update-password');







