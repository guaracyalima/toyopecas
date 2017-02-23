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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/', 'FrontController@index');


Route::group(['prefix' => 'admin', 'middleware' => 'auth.checkrole', 'as' => 'admin.'], function (){
    Route::get('', 'AdminController@index');

    Route::get('topo', ['as' => 'topo', 'uses' =>'TopoController@index']);
    Route::post('topo', ['as' => 'topo.store', 'uses' =>'TopoController@store']);

    Route::get('services', ['as' => 'services.store', 'uses' =>'ServicesController@index']);
    Route::post('services', ['as' => 'services.create', 'uses' =>'ServicesController@create']);

    Route::get('sobre', ['as' => 'sobre.store', 'uses' =>'SobreController@index']);
    Route::post('sobre', ['as' => 'sobre.create', 'uses' =>'SobreController@create']);


    Route::get('produtos', ['as' => 'produtos.store', 'uses' =>'ProdutosController@index']);
    Route::post('produtos/create', ['as' => 'produtos.create', 'uses' =>'ProdutosController@create']);
});

