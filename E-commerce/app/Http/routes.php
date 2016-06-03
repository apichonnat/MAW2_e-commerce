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
    Route::get('/', 'home@homegarde');

    Route::get('home', 'home@index');
    //Route::get('article', 'articles@index');//articles = controller / index = action(nom fonction dans le controller)
    Route::resource('articles', 'ArticlesController', ['only'=>['index', 'show']]);//resource, cree automatiquement toutes les routes crud

    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
    {
        Route::resource('articles', 'ArticlesController');//resource, cree automatiquement toutes les routes crud
        Route::resource('users', 'UsersController');
        Route::resource('pictures', 'PicturesController');
        Route::resource('contents', 'ContentsController');

    });


//               url     ,  controller
    Route::resource('users', 'UsersController');
    Route::resource('order', 'OrdersController');

    Route::auth();
//
//    Route::get('/home', 'HomeController@index');
});




