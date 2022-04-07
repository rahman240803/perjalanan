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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

    
    Route::get('/login', 'AuthController@login')->name('login');
    Route::post('/postlogin','AuthController@postlogin');
    Route::get('/logout','AuthController@logout');
    Route::post('/postregister','AuthController@postregister');
    Route::get('/register','AuthController@register');


Route::group(['middleware' => ['auth', 'checkrole:admin']], function(){
    Route::get('/admin/index', 'AdminController@index');
    Route::get('/admin/cetak-pdf', 'AdminController@cetak_pdf');
    Route::get('/datauser', 'ProfileController@datauser');    
});

Route::group(['middleware' => ['auth', 'checkrole:user']], function(){
    Route::get('/user', 'AdminController@index');
    Route::get('/user/profile', 'AdminController@profile');
    Route::get('/dashboard','DashboardController@index');
    Route::get('/perjalanan','PerjalananController@index');
    Route::post('/perjalanan/create','PerjalananController@create');
    Route::get('/perjalanan/destroy/{id}','PerjalananController@destroy');
    
});

Route::group(['middleware' => 'auth'], function(){

    Route::get('/dashboard', function(){
        return view('dashboard.index');
    });
    Route::get('/profile', 'ProfileController@index');
    // Route::post('/profile/{id}c/reate','ProfileController@create');
    Route::get('/profile/{id}/edit', 'ProfileController@edit');
    Route::put('/profile/{id}/update', 'ProfileController@update');
});

Route::get('/datauser/destroy/{id}','ProfileController@destroy');
Route::get('/datauser', 'ProfileController@datauser');
Route::get('/cetak_pdf', 'ProfileController@cetak_pdf');
// Route::get('/datauser','UserController@dataUser');
// 
