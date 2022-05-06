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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/', 'IndexController@index')->name('landing-page');
Route::group(['prefix' => '/contact', 'as' => 'contact.'], function () {
    Route::get('/', 'ContactController@create')->name('create');
    Route::post('/', 'ContactController@store')->name('store');
});

Route::get('/sitemap.xml', 'SitemapController@create')->name('sitemap');
Route::get('/page/{page}', 'PageController@show')->name('page.show');
Route::get('/category/{category}', 'CategoryController@show')->name('category.show');
Route::get('/{post}', 'PostController@show')->name('post.show');
