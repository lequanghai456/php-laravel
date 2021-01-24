<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\NhaCungCap;

class HoaDonNhap extends Model
{
    //
    use SoftDeletes;
    protected $table = 'hoadonnhaps';

    // public function nguyenlieus()
    // {
    //     return $this->belongsToMany('App\NguyenLieu','chitiethoadonnhaps','id_hoa_don_nhap','id_nguyen_lieu');
    // }
    public function chitiethoadonnhap()
    {
        return $this->hasMany('App\ChiTietHoaDonNhap','id_hoa_don_nhap','id');
    }
    public function nhacungcap()
    {
        return $this->hasOne('App\NhaCungCap','id_nha_cung_cap','id');
    }
    function DSHoaDonNhap(){
        $hoadonnhap = HoaDonNhap::all();
        return $hoadonnhap;
    }
    function FindHoaDonNhap($id){
        return HoaDonNhap::find($id);
    }
    function FindNhaCungCap($id){
        return NhaCungCap::find($id);
    }
}
