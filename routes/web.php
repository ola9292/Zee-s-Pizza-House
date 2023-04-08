<?php

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

Route::get('/', function(){
    return view('landing');
});

Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create')->name('pizza.create');

Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index')->name('pizza.index')->middleware('auth');
Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store')->name('pizza.store');
Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show')->name('pizza.show')->middleware('auth');
Route::delete('/pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy')->name('pizza.destroy')->middleware('auth');

Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
