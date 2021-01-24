<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NguyenLieu extends Model
{
    //
    use SoftDeletes;
    protected $table = 'nguyenlieus';

    // public function hoadonnhaps()
    // {
    //     return $this->belongsToMany('App\HoaDonNhap','chitiethoadonnhaps','id_nguyen_lieu','id_hoa_don_nhap');
    // }
    public function chitiethoadonnhap()
    {
        return $this->hasMany('App\NguyenLieu','id_nguyen_lieu','id');
    }
    function DSNguyenLieu(){
        return NguyenLieu::all();
    }
    function FindNguyenLieu($id){
        return NguyenLieu::find($id);
    }
}
