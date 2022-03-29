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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'FrontController@accueil')->name('accueil');
Route::get('zinguerie_photos', 'FrontController@zingueriePhotos')->name('zinguerie_photos');
Route::get('couverture_photos', 'FrontController@couverturePhotos')->name('couverture_photos');
Route::get('fenetre_toit_photos', 'FrontController@fenetreToitPhotos')->name('fenetre_toit_photos');
Route::get('etancheite_photos', 'FrontController@etancheitePhotos')->name('etancheite_photos');