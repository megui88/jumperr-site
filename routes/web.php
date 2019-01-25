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

// Home
Route::get('/', function(){
    return view('index');
})->name('home');

Route::get('/file', 'Utils\UtilsController@csvIndex');
Route::post('/uploadFile', 'Utils\UtilsController@uploadFile');

Route::get('{any}',function(){
    return view('index');
})->where('any','.*');


Route::get('admin/newsletterUsers', ['as'=> 'admin.newsletterUsers.index', 'uses' => 'Admin\NewsletterUserController@index']);
Route::post('admin/newsletterUsers', ['as'=> 'admin.newsletterUsers.store', 'uses' => 'Admin\NewsletterUserController@store']);
Route::get('admin/newsletterUsers/create', ['as'=> 'admin.newsletterUsers.create', 'uses' => 'Admin\NewsletterUserController@create']);
Route::put('admin/newsletterUsers/{newsletterUsers}', ['as'=> 'admin.newsletterUsers.update', 'uses' => 'Admin\NewsletterUserController@update']);
Route::patch('admin/newsletterUsers/{newsletterUsers}', ['as'=> 'admin.newsletterUsers.update', 'uses' => 'Admin\NewsletterUserController@update']);
Route::delete('admin/newsletterUsers/{newsletterUsers}', ['as'=> 'admin.newsletterUsers.destroy', 'uses' => 'Admin\NewsletterUserController@destroy']);
Route::get('admin/newsletterUsers/{newsletterUsers}', ['as'=> 'admin.newsletterUsers.show', 'uses' => 'Admin\NewsletterUserController@show']);
Route::get('admin/newsletterUsers/{newsletterUsers}/edit', ['as'=> 'admin.newsletterUsers.edit', 'uses' => 'Admin\NewsletterUserController@edit']);
