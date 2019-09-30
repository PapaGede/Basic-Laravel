<?php


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
//Authentication
// Route::get('auth/login','Auth\LoginController@getLogin');
// Route::post('auth/login','Auth\@postLogin');
// Route::get('auth/logout','Auth\LoginController@getLogout');

// //Registration
// Route::get('auth/register','Auth\LoginController@getRegister');
// Route::post('auth/register','Auth\LoginController@postRegister');

Route::get('contact', 'PagesController@getcontact');

Route::get('about','PagesController@getAbout');


Route::resource('posts','PostController');

date_default_timezone_set('GMT');



// Route::get('/home', 'HomeController@index')->name('home');



// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){

    Route::get('/','PagesController@getIndex');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
