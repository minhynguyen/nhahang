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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'], function(){	
	
	Route::resource('loaimonan', 'loaimonanController');
	Route::resource('monan', 'monanController');
	Route::resource('khuvuc', 'khuvucController');
	Route::resource('ban', 'banController');
	Route::resource('hoadon', 'frontendController');


});

// Route::get('/timban', function () {
//     return view('backend.hoadon.order');
// });
// Route::resource('/hoadon', 'frontendController');
Route::get('/quanlisanh', 'frontendController@qli');
Route::get('/timban', 'frontendController@timban');
Route::get('/timmonan', 'frontendController@timmonan');

// Route::get('/ajax-kv_ma', function () {
//     $kv_ma = Input::get('kv_ma');

//     $ban = ban::where('kv_ma', '=', $kv_ma)->get();

//     return Response::json($ban);
// });