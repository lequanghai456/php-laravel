<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\LoaiMonAn;

class MonAn extends Model
{
    //
    use SoftDeletes;
    protected $table = 'monans';

    public function chitiethoadon()
    {
        return $this->hasMany('App\ChiTietHoaDon','id_mon_an','id');
    }
    public function hoadons()
    {
        return $this->belongsToMany('App\HoaDon','chitiethoadons','id_mon_an','id_hoa_don');
    }
    public function loaimonan()
    {
        return $this->belongsTo('App\LoaiMonAn','id_loai_mon_an','id');
    }
    function DSMonAn(){
        return MonAn::all();
    }
    function FindMonAn($id){
        return MonAn::find($id);
    }
    function FindLoaiMonAn($id){
        return LoaiMonAn::find($id);
    }
    function Search($search){
        return MonAn::where('ten_mon_an', 'like','%'.$search.'%');
    }
}
