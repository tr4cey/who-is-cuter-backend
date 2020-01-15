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

Route::auth();

Route::get('/test', function () {
    print("Hello World");
    return view('welcome');
});

Route::get('/getPair/{pair_id}', ['middleware' => 'cors','uses'=>'PairsController@getPair']);

Route::get('/getPicture/{picture_id}', ['middleware' => 'cors','uses'=>'PicturesController@getPic']);

Route::get('/votePic1/{pair_id}', ['middleware' => 'cors','uses'=>'PairsController@votePic1']);
Route::get('/votePic2/{pair_id}', ['middleware' => 'cors','uses'=>'PairsController@votePic2']);

