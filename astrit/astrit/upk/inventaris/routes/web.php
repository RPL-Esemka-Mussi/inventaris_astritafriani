<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', 'HalamanController@halamanlogin')->middleware('guest')->name('login');
Route::post('/login', 'HalamanController@proseslogin')->middleware('guest');
Route::get('/dashboard', 'HalamanController@dashboard')->middleware('auth');
Route::get('/logout', 'HalamanController@logout')->middleware('auth');



Route::get('/user', 'usercontroller@index')->middleware('auth');
Route::get('user/add', 'usercontroller@tambah')->middleware('auth');
Route::post('/user/insert', 'usercontroller@insert')->middleware('auth');
Route::get('/user/edit/{id}', 'usercontroller@edit')->middleware('auth');
Route::post('/user/update', 'usercontroller@update')->middleware('auth');
Route::get('/user/delete/{id}', 'usercontroller@delete')->middleware('auth');


Route::get('/barang', 'barangcontroller@index')->middleware('auth');
Route::get('/barang/add', 'barangcontroller@tambah')->middleware('auth');
Route::post('/barang/insert', 'barangcontroller@insert')->middleware('auth');
Route::get('/barang/edit/{id}', 'barangcontroller@edit')->middleware('auth');
Route::post('/barang/update', 'barangcontroller@update')->middleware('auth');
Route::get('/barang/delete/{id}', 'barangcontroller@delete')->middleware('auth');


Route::get('/laporan', 'LaporanController@index')->middleware('auth');
Route::get('/laporan/print', 'LaporanController@print')->middleware('auth');
