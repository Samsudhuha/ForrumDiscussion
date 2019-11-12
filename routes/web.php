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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/content', function () {
    return view('content');
});

Route::post('/post', function () {
    return view('post');
});

Route::get('/isi', function () {
    return view('layouts.isi');
});

// Route::get('/comment/{id}', function () {
//     return view('comment');
// });

Route::post('/addpost', 'ContentController@addpost');
Route::get('/delete/{id}', 'ContentController@delete_data');
Route::get('/update/{id}', 'ContentController@update_data');
Route::get('/comment/{id}', 'ContentController@comment_data');
Route::get('/delete_comment/{id}', 'ContentController@delete_comment');
Route::post('/update/{id}', 'ContentController@show_update_data');
Route::post('/comment', 'ContentController@comment');
