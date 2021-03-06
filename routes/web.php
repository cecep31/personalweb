<?php

use App\Http\Controllers\PilputController;
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
    return view('welcome');
});


Route::get('/pilput', 'PilputController@index');
Route::get('/pilput/lihat', 'PilputController@beta');
Route::post('/pilput/add', 'PilputController@create');
Route::get('/pilput/edit/{id}', 'PilputController@edit');
Route::post('/pilput/update/{id}', 'PilputController@update');
Route::get('/pilput/delete/{id}', 'PilputController@delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/{name}/daskbord', 'PilputController@daskbord');
