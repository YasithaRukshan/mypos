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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::prefix('/')->namespace('AdminArea')->group(function () {
    Route::get('/home', 'HomeController@index')->name('admin.home');

    //category routes
    Route::prefix('/category')->group(function () {
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::post('/edit', 'CategoryController@edit')->name('category.edit');
        Route::post('/delete', 'CategoryController@delete')->name('category.delete');
        Route::post('/add', 'CategoryController@add')->name('category.add');
    });
    Route::prefix('/product')->group(function () {
        Route::get('/', 'ProductController@index')->name('products.all');
        Route::get('/new', 'ProductController@create')->name('products.create');
        Route::post('/store', 'ProductController@store')->name('products.store');
        Route::get('/{id}/edit', 'ProductController@edit')->name('products.edit');
        Route::post('/{id}/update', 'ProductController@update')->name('products.update');
        Route::view('/{id}/delete', 'ProductController@destroy')->name('products.delete');
    });
});
