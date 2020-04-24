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

Route::prefix('admin')->group(function () {
    Route::prefix("category")->group(function(){
    	Route::get("/","CategoryController@getShowAll");
    	Route::get("add","CategoryController@getAdd");
    	Route::get("show/{id}","CategoryController@getShow");
    	Route::get("delete/{id}","CategoryController@getDelete");
    	Route::post("add","CategoryController@postAdd")->name('post.category.add');
    	Route::post("update/{id}","CategoryController@postUpdate")->name('post.category.update');
    });
    Route::prefix("menu")->group(function(){
    	Route::get("/","MenuController@getShowAll");
    	Route::get("add","MenuController@getAdd");
    	Route::get("show/{id}","MenuController@getShow");
    	Route::get("delete/{id}","MenuController@getDelete");
    	Route::post("add","MenuController@postAdd")->name('post.menu.add');
    	Route::post("update/{id}","MenuController@postUpdate")->name('post.menu.update');
    });
});

