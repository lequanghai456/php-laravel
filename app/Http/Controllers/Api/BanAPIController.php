<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ban;
use DB;
class BanAPIController extends Controller
{
    public function Ban()
    {
        $data = DB::table('bans')->get();
        return response()->json(['dulieu'=>$data]);
    }
}
