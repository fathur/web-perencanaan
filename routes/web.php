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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('profil/struktur-organisasi', 'ProfileController@organization');
Route::get('profil/tupoksi', 'ProfileController@task');
Route::get('profil/sejarah', 'ProfileController@history');

Route::get('berita', 'NewsController@index');
Route::get('berita/{news}', 'NewsController@show');

Route::get('agenda', 'CalendarController@index');
Route::get('agenda/{agendas}', 'CalendarController@show');

Route::get('produk/hukum', 'ProductController@law');
Route::get('produk/pedoman', 'ProductController@handbook');
Route::get('produk/panduan', 'ProductController@guideline');
Route::get('produk/profil', 'ProductController@profile');
Route::get('produk/kegiatan', 'ProductController@activity');
Route::get('produk/laporan', 'ProductController@report');

Route::get('kontak','ContactController@index');
Route::get('faq','FaqController@index');
