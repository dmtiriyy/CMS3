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
Route::get('/admin/create',function () {
    return view('create');
})->name('new');
Route::get('/',function () {
    return redirect('/admin');
});




Route::get('admin/children', 'App\Http\Controllers\Admin@children')->name('chi');
Route::get('/admin/children/{lang}/{page}','App\Http\Controllers\Admin@children');
Route::get('/admin','App\Http\Controllers\Admin@index');

    Route::post('editPage','App\Http\Controllers\Admin@editPage')->name('editPage');
    Route::post('deletePage','App\Http\Controllers\Admin@deletePage')->name('deletePage');
    Route::post('createPage','App\Http\Controllers\Admin@createPage')->name('createPage');
    Route::get('/admin/edit/{id}','App\Http\Controllers\Admin@edit')->name('edit');
    


    Route::get('/{lang}/{page}', 'App\Http\Controllers\CMS@get_page');
    Route::get('/default', 'App\Http\Controllers\CMS@default');
    

