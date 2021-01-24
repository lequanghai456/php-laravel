<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\NhaCungCap;
use App\NguyenLieu;
use App\HoaDonNhap;

class ChiTietHoaDonNhap extends Model
{
    //
    use SoftDeletes;
    protected $table = 'chitiethoadonnhaps';
    public function hoadonnhap()
    {
        return $this->belongsTo('App\HoaDonNhap','id_hoa_don_nhap','id');
    }
    public function nguyenlieu()
    {
        return $this->belongsTo('App\NguyenLieu','id_nguyen_lieu','id');
    }
    function DSChiTietHoaDonNhap(){
        return ChiTietHoaDonNhap::all();
    }
    function FindChiTietHoaDonNhap($id){
        return ChiTietHoaDonNhap::find($id);
    }
    function FindNguyenLieu($id){
        return NguyenLieu::find($id);
    }
    function FindHoaDonNhap($id){
        return HoaDonNhap::find($id);
    }
    function FindNhaCungCap($id){
        return NhaCungCap::find($id);
    }
}
