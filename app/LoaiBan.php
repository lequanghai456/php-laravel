<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiBan extends Model
{
    use SoftDeletes;
    protected $table = 'loaibans';

    public function ban()
    {
        return $this->hasMany('App\Ban','id_loai_ban','id');
    }

    function DSLoaiBan(){
        return LoaiBan::all();
    }
    function FindLoaiBan($id){
        return LoaiBan::find($id);
    }
}
