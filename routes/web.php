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

Route::get('/', 'ProductController@index');
Route::get('/admin', 'UserController@index');
//Product
Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/store', 'ProductController@store')->name('product.store');
Route::get('/products', 'ProductController@showAll')->name('product.showAll');
Route::get('/product/{id}', 'ProductController@show')->name('product.show');
Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
Route::post('/product/{id}/update', 'ProductController@update')->name('product.update');
Route::get('/product/{id}/destroy', 'ProductController@destroy')->name('product.destroy');
Route::get('/product/{product}', 'ProductController@show')->name('product');
Route::get('/category/{category}', 'ProductController@category');

//Category
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::get('/categories', 'CategoryController@showAll')->name('category.showAll');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/ajaxTest', 'TestController@ajaxTest');
//cart

Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::get('/post/comment/{comment}', 'CommentsController@destroy')->name('comment-destroy');
Route::get('/comment/edit/{comment}', 'CommentsController@edit')->name('comment-edit');
Route::post('/comment/update/{comment}', 'CommentsController@update')->name('comment-update');

Route::get('/comments', 'CommentsController@index')->name('comments.index');
Route::get('/comment/approve/{comment}', 'CommentsController@approve')->name('comment-approve');
Route::get('/comment/reject/{comment}', 'CommentsController@reject')->name('comment-disapprove');

Route::post('/requestOtp', 'OtpController@requestOtp');
Route::post('/verifyOtp', 'OtpController@verifyOtp');