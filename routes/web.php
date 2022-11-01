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

Route::get('/','App\Http\Controllers\EngineController@index')->name('index');
Route::get('/satemap.xml','App\Http\Controllers\Sitemap\SitemapController@index')->name('sitemap.index');
Route::get('/satemap-new','App\Http\Controllers\Sitemap\SitemapController@store')->name('sitemap.update');


