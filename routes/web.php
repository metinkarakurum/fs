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
Route::get('/', [
    'as'   =>'web.index',
    'uses' =>'HomeController@index',
]);
Route::get('/category/{slug}', [
    'as'   =>'web.campaign.detail',
    'uses' =>'HomeController@category',
]);
