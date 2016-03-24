<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function(){
    return view('homegarde');
});
*/
Route::get('/', 'home@homegarde');
Route::get('home', 'home@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function ()
{
    //Route::get('article', 'articles@index');//articles = controller / index = action(nom fonction dans le controller)
    Route::resource('article', 'ArticlesController', ['only' => ['index', 'show']]);//resource, cree automatiquement toutes les routes crud
//               url     ,  controller
    Route::resource('users', 'UsersController');

    Route::resource('order', 'OrdersController');
});




