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
Route::get('/','PageController@index')->name('index');
Route::get('/services','PageController@services')->name('services');
Route::get('/catalogue','PageController@catalogue')->name('catalogue');
Route::get('/contacts','PageController@contacts')->name('contacts');
Route::get('/pricing','PageController@pricing')->name('pricing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//ItemController//
Route::get('/items/add', 'ItemController@add')->name('add_item');
Route::post('/items/store', 'ItemController@store')->name('store_item');
Route::get('/items/all', 'ItemController@all')->name('all_items');
Route::get('/items/edit/{id}', 'ItemController@edit')->name('edit_items');
Route::post('/items/edit/{id}', 'ItemController@update')->name('edit_items');
Route::get('/items/delete/{id}', 'ItemController@delete')->name('delete_items');
//SectionController//
Route::get('/sections/add', 'SectionController@add')->name('add_section');
Route::post('/sections/store', 'SectionController@store')->name('store_section');
Route::get('/sections/all', 'SectionController@all')->name('all_sections');
Route::get('/sections/edit/{id}', 'SectionController@edit')->name('edit_sections');
Route::post('/sections/edit/{id}', 'SectionController@update')->name('edit_sections');
Route::get('/sections/delete/{id}', 'SectionController@delete')->name('delete_sections');
//OptionController//
Route::get('/options/add', 'OptionController@add')->name('add_option');
Route::post('/options/store', 'OptionController@store')->name('store_option');
Route::get('/options/all', 'OptionController@all')->name('all_options');
Route::get('/options/edit/{id}', 'OptionController@edit')->name('edit_option');
Route::post('/options/edit/{id}', 'OptionController@update')->name('edit_option');
Route::get('/options/delete/{id}', 'OptionController@delete')->name('delete_option');
//GalleryController//
Route::get('/galleries/add', 'GalleryController@add')->name('add_gallery');
Route::post('/galleries/store', 'GalleryController@store')->name('store_gallery');
Route::get('/galleries/all', 'GalleryController@all')->name('all_gallery');
Route::get('/galleries/edit/{id}', 'GalleryController@edit')->name('edit_gallery');
Route::post('/galleries/edit/{id}', 'GalleryController@update')->name('edit_gallery');
Route::get('/galleries/delete/{id}', 'GalleryController@delete')->name('delete_gallery');