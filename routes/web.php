<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
    I. Error Route 2 ways to solve:
        1.  use (Route::get('/', 'TemplateController@index'); but we need to find file name: RouteServiceProvider
            and un-command [ protected $namespace = 'App\\Http\\Controllers';]).
        2.  use (Route::get('/', 'App\\Http\\Controllers\TemplateController@index');
    )
    II. How to Link in blad.php: 
        1. using with  route name   : <a href="{{route('home')}}">
        2. using with  URL name     : <a href="{{url('/')}}">
        3. using with  Link name    : <a href="https://laravel.com/docs"> 
        
    III. Access Asset URL:
        1. Asset is the best approach help to access in URL like : JS, CSS , Image;
            Ex: <img src="{{ asset('logo.png') }}" />
                <link rel="stylesheet" href="{{asset('css/app.css')}}">


|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TemplateController@index')->name('home');
Route::get('/shop', 'ShopController@shop')->name('shop');
