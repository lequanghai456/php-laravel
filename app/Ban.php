<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\LoaiBan;

class Ban extends Model
{
    //
    protected $table = 'bans';

    public function loaiban()
    {
        return $this->belongsTo('App\LoaiBan','id_loai_ban','id');
    }
    function DSBan(){
        return Ban::all();
    }
    function FindBan($id){
        return Ban::find($id);
    }
    function FindLoaiBan($id){
        return LoaiBan::find($id);
    }
}
