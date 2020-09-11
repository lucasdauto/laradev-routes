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
//
//Route::resourceVerbs([
//    'create' => 'cadastro',
//    'edit' => 'editar',
//]);

Route::get('/', function () {
    return view('welcome');
});

//Route::view('/form','form');


/* Rotas */
//Route::get();
//Route::post();
//Route::put();
//Route::path();
//Route::delete();
//Route::options();

//Route::get('/users/1','UserController@index');
//Route::get('/getData','UserController@getData');
//
//Route::post('/postData','UserController@postData');
//
//Route::put('users/1','UserController@testPut');
//Route::patch('users/1','UserController@testPatch');
//
//Route::delete('users/1','UserController@destroy');


//Route::resource('/posts', 'PostController');

//Route::get('/users/{id}/comments/{comment?}', function ($id, $comment=null) {
//    var_dump($id, $comment);
//})->where('id','[0-9]+');

//Route::get('/users/{id}/comments/{comment?}', function ($id, $comment=null) {
//    var_dump($id, $comment);
//})->where(['id'=>'[0-9]+','comments'=>'[a-zA-Z0-9]+']);

//Route::get('users/1', 'UserController@inspect')->name('inspect');
//
//
//Route::prefix('admin')->group(function () {
//    Route::view('/form', 'form');
//});
//
//Route::name('admins.posts.')->group(function () {
//    Route::get('/admin/posts/index', 'PostController@index')->name('index');
//    Route::get('/admin/posts', 'PostController@show')->name('show');
//});
//
//Route::middleware(['throttle:10,1'])->group(function () {
//    Route::view('/form','form');
//});
//
//Route::namespace('Admin')->group(function (){
//    Route::get('/users','UserController@index');
//});

Route::group(['namespace' => 'Admin','prefix'=>'admin','middleware'=>['throttle:10,1'], 'as' => 'admin.'], function (){
    Route::resource('users','UserController');
});
