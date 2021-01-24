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
use App\LoaiBan;
use App\Ban;
use App\User;

Route::get('/', 'IndexController@index')->name('Index.index');
Route::get('useradmin', 'UserAdminController@index')->name('UserAdmin.index')->middleware('checklogin');
Route::get('dashboard', 'DashboardController@index')->name('Dashboard.index')->middleware('checklogin');
Route::get('tableuser/search','TableUserController@search')->name('UserAdmin.search')->middleware('checklogin');

//Đăng nhập
Route::get('login', 'TableUserController@getLogin')->name('Login.get');
Route::post('login', 'TableUserController@postLogin')->name('Login.post');

//Đăng xuất
Route::get('logout', 'TableUserController@logout')->name('Logout');



//Table user
Route::get('tableuser', 'TableUserController@index')->name('TableUser.index')->middleware('checklogin');
Route::get('tableuser/create', 'TableUserController@create')->name('TableUser.create')->middleware('checklogin');
Route::post('tableuser', 'TableUserController@store')->name('TableUser.store')->middleware('checklogin');
Route::get('tableuser/{id}/edit', 'TableUserController@edit')->name('TableUser.edit')->middleware('checklogin');
Route::put('tableuser/{id}', 'TableUserController@update')->name('TableUser.update')->middleware('checklogin');
Route::get('tableuser/{id}/active', 'TableUserController@showactive')->name('TableUser.showactive')->middleware('checklogin');
Route::put('tableuser/{id}/active', 'TableUserController@active')->name('TableUser.active')->middleware('checklogin');
Route::get('tableuser/{id}', 'TableUserController@show')->name('TableUser.show')->middleware('checklogin');
Route::delete('tableuser/{id}', 'TableUserController@destroy')->name('TableUser.destroy')->middleware('checklogin');

//Table bàn
Route::get('tableban', 'TableBanController@index')->name('TableBan.index')->middleware('checklogin');
Route::get('tableban/create', 'TableBanController@create')->name('TableBan.create')->middleware('checklogin');
Route::post('tableban', 'TableBanController@store')->name('TableBan.store')->middleware('checklogin');
Route::get('tableban/{id}/edit', 'TableBanController@edit')->name('TableBan.edit')->middleware('checklogin');
Route::put('tableban/{id}', 'TableBanController@update')->name('TableBan.update')->middleware('checklogin');
Route::get('tableban/{id}', 'TableBanController@show')->name('TableBan.show')->middleware('checklogin');
Route::delete('tableban/{id}', 'TableBanController@destroy')->name('TableBan.destroy')->middleware('checklogin');

//Table chi tiết hoá đơn
Route::get('tablechitiethoadon', 'TableChiTietHoaDonController@index')->name('TableChiTietHoaDon.index')->middleware('checklogin');
Route::get('tablechitiethoadon/create', 'TableChiTietHoaDonController@create')->name('TableChiTietHoaDon.create')->middleware('checklogin');
Route::post('tablechitiethoadon', 'TableChiTietHoaDonController@store')->name('TableChiTietHoaDon.store')->middleware('checklogin');

//Table chi tiết hoá đơn nhập
Route::get('tablechitiethoadonnhap', 'TableChiTietHoaDonNhapController@index')->name('TableChiTietHoaDonNhap.index')->middleware('checklogin');

//Table hoá đơn
Route::get('tablehoadon', 'TableHoaDonController@index')->name('TableHoaDon.index')->middleware('checklogin');
Route::get('tablehoadon/create', 'TableHoaDonController@create')->name('TableHoaDon.create') ->middleware('checklogin');
Route::post('tablehoadon', 'TableHoaDonController@store')->name('TableHoaDon.store') ->middleware('checklogin');


//Table hoá đơn nhập
Route::get('tablehoadonnhap', 'TableHoaDonNhapController@index')->name('TableHoaDonNhap.index')->middleware('checklogin');
Route::get('tablehoadonnhap/create', 'TableHoaDonNhapController@create')->name('TableHoaDonNhap.create')->middleware('checklogin');
Route::post('tablehoadonnhap', 'TableHoaDonNhapController@store')->name('TableHoaDonNhap.store')->middleware('checklogin');
Route::get('tablehoadonnhap/{id}/edit', 'TableHoaDonNhapController@edit')->name('TableHoaDonNhap.edit')->middleware('checklogin');
Route::put('tablehoadonnhap/{id}', 'TableHoaDonNhapController@update')->name('TableHoaDonNhap.update')->middleware('checklogin');
Route::get('tablehoadonnhap/{id}', 'TableHoaDonNhapController@show')->name('TableHoaDonNhap.show')->middleware('checklogin');
Route::delete('tablehoadonnhap/{id}', 'TableHoaDonNhapController@destroy')->name('TableHoaDonNhap.destroy')->middleware('checklogin');

//Table loại món ăn
Route::get('tableloaimonan', 'TableLoaiMonAnController@index')->name('TableLoaiMonAn.index')->middleware('checklogin');
Route::get('tableloaimonan/create', 'TableLoaiMonAnController@create')->name('TableLoaiMonAn.create')->middleware('checklogin');
Route::post('tableloaimonan', 'TableLoaiMonAnController@store')->name('TableLoaiMonAn.store')->middleware('checklogin');
Route::get('tableloaimonan/{id}/edit', 'TableLoaiMonAnController@edit')->name('TableLoaiMonAn.edit')->middleware('checklogin');
Route::put('tableloaimonan/{id}', 'TableLoaiMonAnController@update')->name('TableLoaiMonAn.update')->middleware('checklogin');
Route::get('tableloaimonan/search', 'TableLoaiMonAnController@search')->name('TableLoaiMonAn.search')->middleware('checklogin');
Route::get('tableloaimonan/{id}', 'TableLoaiMonAnController@show')->name('TableLoaiMonAn.show')->middleware('checklogin');
Route::delete('tableloaimonan/{id}', 'TableLoaiMonAnController@destroy')->name('TableLoaiMonAn.destroy')->middleware('checklogin');

//Table món ăn
Route::get('tablemonan', 'TableMonAnController@index')->name('TableMonAn.index')->middleware('checklogin');
Route::get('tablemonan/create', 'TableMonAnController@create')->name('TableMonAn.create')->middleware('checklogin');
Route::post('tablemonan', 'TableMonAnController@store')->name('TableMonAn.store')->middleware('checklogin');
Route::get('tablemonan/{id}/edit', 'TableMonAnController@edit')->name('TableMonAn.edit')->middleware('checklogin');
Route::put('tablemonan/{id}', 'TableMonAnController@update')->name('TableMonAn.update')->middleware('checklogin');
Route::get('tablemonan/search', 'TableMonAnController@search')->name('TableMonAn.search')->middleware('checklogin');
Route::get('tablemonan/{id}', 'TableMonAnController@show')->name('TableMonAn.show')->middleware('checklogin');
Route::delete('tablemonan/{id}', 'TableMonAnController@destroy')->name('TableMonAn.destroy')->middleware('checklogin');

//Table nguyên liệu
Route::get('tablenguyenlieu', 'TableNguyenLieuController@index')->name('TableNguyenLieu.index')->middleware('checklogin');
Route::get('tablenguyenlieu/create', 'TableNguyenLieuController@create')->name('TableNguyenLieu.create')->middleware('checklogin');
Route::post('tablenguyenlieu', 'TableNguyenLieuController@store')->name('TableNguyenLieu.store')->middleware('checklogin');
Route::get('tablenguyenlieu/{id}/edit', 'TableNguyenLieuController@edit')->name('TableNguyenLieu.edit')->middleware('checklogin');
Route::put('tablenguyenlieu/{id}', 'TableNguyenLieuController@update')->name('TableNguyenLieu.update')->middleware('checklogin');
Route::get('tablenguyenlieu/search', 'TableNguyenLieuController@search')->name('TableNguyenLieu.search')->middleware('checklogin');
Route::get('tablenguyenlieu/{id}', 'TableNguyenLieuController@show')->name('TableNguyenLieu.show')->middleware('checklogin');
Route::delete('tablenguyenlieu/{id}', 'TableNguyenLieuController@destroy')->name('TableNguyenLieu.destroy')->middleware('checklogin');


//Table nhà cung cấp
Route::get('tablenhacungcap', 'TableNhaCungCapController@index')->name('TableNhaCungCap.index')->middleware('checklogin');
Route::get('tablenhacungcap/create', 'TableNhaCungCapController@create')->name('TableNhaCungCap.create')->middleware('checklogin');
Route::post('tablenhacungcap', 'TableNhaCungCapController@store')->name('TableNhaCungCap.store')->middleware('checklogin');
Route::get('tablenhacungcap/{id}/edit', 'TableNhaCungCapController@edit')->name('TableNhaCungCap.edit')->middleware('checklogin');
Route::put('tablenhacungcap/{id}', 'TableNhaCungCapController@update')->name('TableNhaCungCap.update')->middleware('checklogin');
Route::get('tablenhacungcap/search', 'TableNhaCungCapController@search')->name('TableNhaCungCapsearch')->middleware('checklogin');
Route::get('tablenhacungcap/{id}', 'TableNhaCungCapController@show')->name('TableNhaCungCap.show')->middleware('checklogin');
Route::delete('tablenhacungcap/{id}', 'TableNhaCungCapController@destroy')->name('TableNhaCungCap.destroy')->middleware('checklogin');

//table đăng ký
Route::get('tabledangky/create','TableDangKyController@create')->name('TableDangKy.create');
Route::post('tabledangky','TableDangKyController@store')->name('TableDangKy.store');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

