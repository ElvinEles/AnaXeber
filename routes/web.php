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
/*FRONTEND*/
Route::get('/','frontend\HomeController@index');
Route::get('/news_one_info/{id}','frontend\HomeController@news_one_info');
Route::get('/news_all_for_category/{id}','frontend\MenuController@news_all_for_category');


/*ADMIN PANEL*/
Route::get('/admin','admin\AdminController@index');
Route::get('/news_add','admin\AdminController@news_add');
Route::get('/news_all','admin\AdminController@news_all');
Route::get('/news_correct/{id}','admin\AdminController@news_correct');
Route::get('/news_all','admin\AdminController@news_all');
Route::get('/news/search','admin\NewsCategoryController@news_search');
Route::post('/news/save','admin\NewsCategoryController@news_save');
Route::post('/delete/news','admin\NewsCategoryController@news_delete');
Route::post('news/edit/{id}','admin\NewsCategoryController@news_edit');
