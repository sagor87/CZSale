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


Route::get('/', 'PagesControler@index')->name('home');
Route::get('/conditions', 'PagesControler@conditions')->name('conditions');
Route::get('/help', 'PagesControler@help')->name('help');
Route::get('/contact', 'PagesControler@contact')->name('contact');
Route::get('/addClassified', 'PagesControler@addClassified')->name('addClassified');
Route::get('/categories', 'PagesControler@categories')->name('categories');
Route::get('/details', 'PagesControler@details')->name('details');
