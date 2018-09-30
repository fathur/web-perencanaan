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

Route::prefix('profil')->group(function () {
    Route::get('organisasi', 'ProfileController@organization')->name('organization.show');
    Route::get('tupoksi', 'ProfileController@tasks')->name('tasks.show');
});

Route::prefix('berita')->group(function () {
    Route::get('/', 'NewsController@index')->name('news.index');
    Route::get('{newsSlug}', 'NewsController@show')->name('news.show');
});

Route::prefix('agenda')->group(function () {
    Route::get('/', 'AgendaController@index')->name('agenda.index');
    Route::get('{agendaSlug}', 'AgendaController@show')->name('agenda.show');
});

Route::prefix('produk')->group(function () {
    Route::get('hukum', 'ProductController@laws')->name('product.law.show');
    Route::get('hukum/{productSlug}', 'ProductController@showLaw');

    Route::get('buku-pedoman', 'ProductController@handBooks')->name('product.hand-book.show');
    Route::get('pedoman/{productSlug}', 'ProductController@showHandBook');

    Route::get('buku-panduan', 'ProductController@guidelines')->name('product.guideline.show');
    Route::get('panduan/{productSlug}', 'ProductController@showGuideline');

    Route::get('profil', 'ProductController@profiles')->name('product.profile.show');
    Route::get('profil/{productSlug}', 'ProductController@showProfile');

    Route::get('kegiatan', 'ProductController@activities')->name('product.activity.show');
    Route::get('kegiatan/{productSlug}', 'ProductController@showActivity');


    Route::get('laporan', 'ProductController@reports')->name('product.report.show');
    Route::get('laporan/{reportSlug}', 'ProductController@showReport');

    Route::get('buletin', 'ProductController@bulletins')->name('product.bulletin.show');
    Route::get('buletin/{productSlug}', 'ProductController@showBulletin');

});

Route::prefix('galeri')->group(function () {
    Route::get('foto', 'GalleryController@photos')->name('photo.index');
    Route::get('foto/{photoId}', 'GalleryController@showPhoto');

    Route::get('video', 'GalleryController@videos')->name('video.index');
    Route::get('video/{videoId}', 'GalleryController@showVideo');

    Route::get('poster', 'GalleryController@posters')->name('poster.index');
    Route::get('poster/{posterId}', 'GalleryController@showPoster');

});

Route::get('faq', 'FaqController@index')->name('faq.index');
Route::get('kontak', 'ContactController@show')->name('contact.show');


