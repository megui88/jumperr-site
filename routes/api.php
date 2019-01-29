<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getLanguageAll','LanguageController@getLanguageAll');
Route::get('getAllTags','Utils\UtilsController@getAllTags');

Route::post('contactus', 'Utils\UtilsController@contactUs');
Route::post('newsletter', 'Utils\UtilsController@newsLetter');


Route::get('admin/newsletter_users', '\App\Http\Controllers\API\Admin\NewsletterUserAPIController@index');
Route::post('admin/newsletter_users', '\App\Http\Controllers\API\Admin\NewsletterUserAPIController@store');
Route::get('admin/newsletter_users/{newsletter_users}', '\App\Http\Controllers\API\Admin\NewsletterUserAPIController@show');
Route::put('admin/newsletter_users/{newsletter_users}', '\App\Http\Controllers\API\Admin\NewsletterUserAPIController@update');
Route::patch('admin/newsletter_users/{newsletter_users}', '\App\Http\Controllers\API\Admin\NewsletterUserAPIController@update');
Route::delete('admin/newsletter_users/{newsletter_users}', '\App\Http\Controllers\API\Admin\NewsletterUserAPIController@destroy');
