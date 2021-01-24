<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhaCungCap extends Model
{
    //
    use SoftDeletes;
    protected $table = 'nhacungcaps';

    public function hoadonnhap()
    {
        return $this->hasMany('App\HoaDonNhap','id_nhacungcap','id');
    }
    function DSNhaCungCap(){
        return NhaCungCap::all();
    }
    function FindNhaCungCap($id){
        return NhaCungCap::find($id);
    }
}
