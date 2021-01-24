<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('timkiem','Api\MonAnAPIController@timkiem');
Route::get('Monan','Api\MonAnAPIController@MonAn');
Route::get('Monan/{id}','Api\MonAnAPIController@TimMonAn');
Route::get('LoaiMonan','Api\MonAnAPIController@LoaiMonAn');
Route::get('HinhAnh','Api\MonAnAPIController@HinhAnh');
Route::get('Ban','Api\BanAPIController@Ban');
Route::post('DangNhap','Api\MonAnAPIController@KiemTraDangNhap');
Route::post('hoadon','Api\HoaDonAPIController@taohoadon');
Route::post('cthoadon','Api\HoaDonAPIController@taocthoadon');
