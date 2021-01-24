<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChiTietHoaDon extends Model
{
    //
    use SoftDeletes;
    protected $table = 'chitiethoadons';

    public function hoadon()
    {
        return $this->belongsTo('App\HoaDon','id_hoa_don','id');
    }
    public function monan()
    {
        return $this->belongsTo('App\MonAn','id_mon_an','id');
    }
    function DSChiTietHoaDon(){
        return ChiTietHoaDon::all();
    }
    function FindChiTietHoaDon($id){
        return ChiTietHoaDon::find($id);
    }
    function FindMonAn($id){
        return MonAn::find($id);
    }
}
