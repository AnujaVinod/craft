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

Route::get('/', function () {
    return view('pages.welcome');
});
Route::get('about', function(){
    return view('pages.about'); 
});

Route::get('services', function(){
    return view('pages.services'); 
});
Route::get('portfolio', function(){
    return view('pages.portfolio'); 
});
Route::get('blog', function(){
    return view('pages.blog'); 
});
Route::get('contact', function(){
    return view('pages.contact'); 
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('web-register', 'Auth\AuthController@webRegister');
Route::post('web-register', 'Auth\AuthController@webRegisterPost');