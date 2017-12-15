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
Route::get('/home', ['as' => 'home', 'uses' => 'PostController@index']);
Route::get('/login', ['as' => 'login', 'uses' => 'UserController@login']);
Route::post('/auth', ['as' => 'auth', 'uses' => 'UserController@auth']);
Route::get('/toursEn', ['as' => 'toursEn', 'uses' => 'UserController@toursEn']);
Route::get('/toursRu', ['as' => 'toursRu', 'uses' => 'UserController@toursRu']);
Route::get('/allToursRu', ['as' => 'allToursRu', 'uses' => 'UserController@allToursRu']);
Route::get('/allToursEn', ['as' => 'allToursEn', 'uses' => 'UserController@allToursEn']);
Route::get('/hotelsEn', ['as' => 'hotelsEn', 'uses' => 'UserController@hotelsEn']);
Route::get('/hotelsRu', ['as' => 'hotelsRu', 'uses' => 'UserController@hotelsRu']);
Route::get('/contacusEn', ['as' => 'contacusEn', 'uses' => 'UserController@contacusEn']);
Route::get('/contacusRu', ['as' => 'contacusRu', 'uses' => 'UserController@contacusRu']);
Route::get('/carRentEn', ['as' => 'carRentEn', 'uses' => 'UserController@carRentEn']);
Route::get('/armeniaEn', ['as' => 'armeniaEn', 'uses' => 'UserController@armeniaEn']);
Route::get('/brandingOfArmeniaEn', ['as' => 'brandingOfArmeniaEn', 'uses' => 'UserController@brandingOfArmeniaEn']);
Route::get('/servicesEn', ['as' => 'servicesEn', 'uses' => 'UserController@servicesEn']);
Route::get('/resourcesEn', ['as' => 'resourcesEn', 'uses' => 'UserController@resourcesEn']);
Route::get('/aboutUsEn', ['as' => 'aboutUsEn', 'uses' => 'UserController@aboutUsEn']);


// show new post form
//  Route::get('new-post','PostController@create');

Route::get('tours', 'PostController@index');
Route::get('excursion', 'ExcursionController@index');


// save new post
Route::post('new-post', ['uses' => 'PostController@store', 'as' => 'new-post']);
Route::post('new-excursion', ['uses' => 'ExcursionController@store', 'as' => 'new-excursion']);

// edit post form
Route::get('edit/{id}', 'PostController@edit');
Route::get('editExcursion/{id}', 'ExcursionController@edit');

// update post
Route::post('update', 'PostController@update');
Route::post('updateExcursion', 'ExcursionController@update');

// delete post
Route::get('delete/{id}', 'PostController@destroy');
Route::get('deleteExcursion/{id}', 'ExcursionController@destroy');

// display user's all posts
Route::get('my-all-posts', 'UserController@user_posts_all');

// display user's drafts
Route::get('my-drafts', 'UserController@user_posts_draft');


//users profile
Route::get('user/{id}', 'UserController@profile')->where('id', '[0-9]+');

// display list of posts
Route::get('user/{id}/posts', 'UserController@user_posts')->where('id', '[0-9]+');

//// display single post
//Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');