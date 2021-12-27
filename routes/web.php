<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('', 'App\Http\Controllers\admin\HomeController@index')->name('home');



Route::get('/post/{id}', 'App\Http\Controllers\admin\HomeController@show')->name('post.show');


Route::prefix('/admin')->group(function (){

    Route::get('/dashboard' , 'App\Http\Controllers\admin\HomeController@dashboard')->name('admin.dashboard');

    Route::get('/post' , 'App\Http\Controllers\admin\PostController@creat')->name('admin.pages.post.creat');

    Route::post('/post/creat' , 'App\Http\Controllers\admin\PostController@store')->name('admin.dashboard.store');

    Route::get('/post/edit/{post}' , 'App\Http\Controllers\admin\PostController@edit')->name('admin.dashboard.edit');


    Route::put('/post/update/{post}' , 'App\Http\Controllers\admin\PostController@update')->name('admin.dashboard.update');

});




