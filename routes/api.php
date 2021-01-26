<?php

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\PostController;

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

Route::get('post', 'PostController@select');
Route::get('post/{id}', 'PostController@select_id');
Route::post('post', 'PostController@postsave');
Route::put('post/{id}', 'PostController@update');
Route::delete('post/{post}', 'PostController@delete');
