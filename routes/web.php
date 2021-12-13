<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
    Error Route 2 ways to solve:
    1.  use (Route::get('/', 'TemplateController@index'); but we need to find file name: RouteServiceProvider
        and un-command [ protected $namespace = 'App\\Http\\Controllers';]).
    2.  use (Route::get('/', 'App\\Http\\Controllers\TemplateController@index');
)

|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TemplateController@index');
Route::get('/shop', 'ShopController@shop')->name('shop');
