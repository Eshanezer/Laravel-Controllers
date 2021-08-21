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

Route::get('/', function () {
    return view('welcome');
});


//// Default Controller
//Route::get('user','DefaultUserController@allUsers');
//Route::post('user/create','DefaultUserController@createUser');
//Route::post('user/update','DefaultUserController@updateUser');
//Route::post('user/remove','DefaultUserController@removeUser');
//Route::get('user/show/{username}/{id}','DefaultUserController@showUser');

// Resource Controller
Route::resources(['developers'=>'ResourceUserController','products'=>'ResourceProductController']);
