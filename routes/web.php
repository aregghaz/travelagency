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

Route::get('/', ['as' => 'homeEn', 'uses' => 'UserController@homeEn']);
Route::get('/homeRu', ['as' => 'homeRu', 'uses' => 'UserController@homeRu']);
Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);
Route::get('/login',['as' => 'login', 'uses' => 'UserController@login']);
Route::post('/auth',['as' => 'auth', 'uses' => 'UserController@auth']);
Route::get('/toursEn',['as' => 'toursEn', 'uses' => 'UserController@toursEn']);
Route::get('/toursRu',['as' => 'toursRu', 'uses' => 'UserController@toursRu']);
Route::get('/allToursRu',['as' => 'allToursRu', 'uses' => 'UserController@allToursRu']);
Route::get('/allToursEn', ['as' => 'allToursEn', 'uses' => 'UserController@allToursEn']);



    // show new post form
  //  Route::get('new-post','PostController@create');

    // save new post
    Route::post('new-post',['uses' =>'PostController@store','as' =>'new-post' ]);

    // edit post form
    Route::get('edit/{slug}','PostController@edit');

    // update post
    Route::post('update','PostController@update');

    // delete post
    Route::get('delete/{id}','PostController@destroy');

    // display user's all posts
    Route::get('my-all-posts','UserController@user_posts_all');

    // display user's drafts
    Route::get('my-drafts','UserController@user_posts_draft');




//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');

// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');

// display single post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');