<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ChiTietHoaDon;

class HoaDon extends Model
{
    //
    use SoftDeletes;
    protected $table = 'hoadons';
    // public function monans()
    // {
    //     return $this->belongsToMany('App\MonAn','chitiethoadons','id_hoa_don','id_mon_an')->withPivot('so_luong', 'don_gia');
    // }
    public function chitiethoadon()
    {
        return $this->hasMany('App\ChiTietHoaDon','id_hoa_don','id');
    }
    function DSHoaDon(){
        $hoadon = HoaDon::all();
        return $hoadon;
    }
    function FindHoaDon($id){
        return HoaDon::find($id);
    }
    function TinhTien($id){
        $ChiTietHoaDon = ChiTietHoaDon::where('id_hoa_don',$id)->get();
        $tt=0;
        foreach($ChiTietHoaDon as $ct){
            $tt+=$ct->don_gia*$ct->so_luong;
        }
        return $tt;
    }
       
}
