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
Route::get('/admin', 'AdminController@index');

Route::get('admin/topo', ['as' => 'admin.topo.index', 'uses' =>'TopoController@index']);
Route::post('admin/topo/store', ['as' => 'admin.topo.store', 'uses' =>'TopoController@store']);

Route::get('admin/services', ['as' => 'admin.services.store', 'uses' =>'ServicesController@index']);
Route::post('admin/services/create', ['as' => 'admin.services.create', 'uses' =>'ServicesController@create']);

Route::get('admin/sobre', ['as' => 'admin.sobre.store', 'uses' =>'SobreController@index']);
Route::post('admin/sobre/create', ['as' => 'admin.sobre.create', 'uses' =>'SobreController@create']);


Route::get('admin/produtos', ['as' => 'admin.produtos.store', 'uses' =>'ProdutosController@index']);
Route::post('admin/produtos/create', ['as' => 'admin.produtos.create', 'uses' =>'ProdutosController@create']);
