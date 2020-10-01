<?php

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

// Route::get('nomedarota', 'NomeDoController@funcao');


//CLIENTE
Route::get('', 'WebController@home')->name('front.home');
Route::get('/elemento', 'WebController@elemento')->name('front.elemento');
Route::get('/sobre', 'WebController@sobre')->name('front.sobre');
Route::get('/article', 'WebController@article')->name('front.article');
Route::get('/blog', 'WebController@blog')->name('front.blog');
Route::get('/service', 'WebController@service')->name('front.service');
Route::get('/contato', 'WebController@contato')->name('front.contato');
Route::get('/animal', 'WebController@animal')->name('front.animal');

//ADMIN 
Route::group(['middleware' => 'auth', 'prefix' => '/admin', 'as' => 'admin.'], function () {

    // animais
    Route::resource('animal', 'Admin\AnimalController');

    // depoimentos
    Route::resource('depoimentos','Admin\DepoimentoController');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
