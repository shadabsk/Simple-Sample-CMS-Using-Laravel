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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/create', 'PostController@create')->name('post.create');

Route::post('/post', 'PostController@store')->name('post.store');

Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');

Route::patch('/post/{post}', 'PostController@update')->name('post.update');

Route::delete('/post/{post}/', 'PostController@destroy')->name('post.destroy');



Route::get('/brand/create', 'BrandController@create')->name('brand.create');

Route::post('/brand', 'BrandController@store')->name('brand.store');

Route::get('/brand/{user}/edit', 'BrandController@edit')->name('brand.edit');

Route::patch('/brand/{user}', 'BrandController@update')->name('brand.update');

Route::delete('/brand/{user}', 'BrandController@destroy')->name('brand.destroy');


Route::get('/topnavmenu/create', 'TopnavmenuController@create')->name('topnavmenu.create');

Route::post('/topnavmenu', 'TopnavmenuController@store')->name('topnavmenu.store');

Route::get('/topnavmenu/{navmenu}/edit', 'TopnavmenuController@edit')->name('topnavmenu.edit');

Route::patch('/topnavmenu/{navmenu}', 'TopnavmenuController@update')->name('topnavmenu.update');

Route::delete('/topnavmenu/{navmenu}', 'TopnavmenuController@destroy')->name('topnavmenu.destroy');


Route::get('/maincontent/create', 'MaincontentController@create')->name('maincontent.create');

Route::post('/maincontent', 'MaincontentController@store')->name('maincontent.store');

Route::get('/maincontent/{content}/edit', 'MaincontentController@edit')->name('maincontent.edit');

Route::patch('/maincontent/{content}', 'MaincontentController@update')->name('maincontent.update');

Route::delete('/maincontent/{content}', 'MaincontentController@destroy')->name('maincontent.destroy');


Route::get('{user}/', 'PostController@show')->name('post.show');