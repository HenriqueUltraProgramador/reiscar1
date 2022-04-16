<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'dashbord'])->name('home.dashbord');

Route::get('/pt', [HomeController::class, 'index'])->name('home.index');
Route::get('/en', [HomeController::class, 'index'])->name('home.index');

Route::get('/cars', [CarsController::class, 'index'])->name('cars.index');

//Open specific car
Route::get('/cars/{id}', [CarsController::class, 'show'])->name('cars.show');

//Route home
Route::get('/home', [
    App\Http\Controllers\HomeController::class,
    'index',
])->name('home');

//Route do language switcher do navbar (topo)
Route::get('lang', [LanguageController::class, 'switchLang'])->name(
    'lang.switch'
);
