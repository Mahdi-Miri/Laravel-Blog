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
Route::get('', 'App\Http\Controllers\admin\Homecontroller@index')->name('home');
Route::get('/post/{id}', 'App\Http\Controllers\admin\Homecontroller@show')->name('post.show');
Route::get('/admin/dashboard' , 'App\Http\Controllers\admin\Homecontroller@dashboard')->name('admin.dashboard');
Route::get('/admin/post' , 'App\Http\Controllers\admin\Postcontroller@creat')->name('admin.pages.post.creat');
Route::post('/admin/post/creat' , 'App\Http\Controllers\admin\Postcontroller@store')->name('admin.dashboard.store');

Route::get('/admin/post/edit/{post}' , 'App\Http\Controllers\admin\Postcontroller@edit')->name('admin.dashboard.edit');
Route::put('/admin/post/update/{post}' , 'App\Http\Controllers\admin\Postcontroller@update')->name('admin.dashboard.update');



