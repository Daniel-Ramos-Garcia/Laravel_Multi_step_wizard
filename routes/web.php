<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WizardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('layouts/app');
});
// Route::get('register', 'Auth\RegisterController@register');
// Route::post('register', 'Auth\RegisterController@store');
// Route::get('login', 'Auth\LoginController@login')->name('login');
// Route::post('login', 'Auth\LoginController@authenticate');
// Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', [RegisterController::class, 'register']);
Route::post('register', [RegisterController::class, 'registerUser']);
Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'authenticate']);
// Route::get('wizard', [WizardController::class, 'index']);
Route::get('wizard', [WizardController::class, 'wizard1']);
Route::post('wizard', [WizardController::class, 'multistepwizardsubmit']);