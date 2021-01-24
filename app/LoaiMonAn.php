<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiMonAn extends Model
{
    //
    use SoftDeletes;
    protected $table = 'loaimonans';

    public function monan()
    {
        return $this->hasMany('App\MonAn','id_loai_mon_an','id');
    }
    function DSLoaiMonAn(){
        return LoaiMonAn::all();
    }
    function FindLoaiMonAn($id){
        return LoaiMonAn::find($id);
    }
}
