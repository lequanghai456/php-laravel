<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoaiMonAn;
use App\MonAn;
use App\User;
use DB;
use Hash;

class MonAnAPIController extends Controller
{
    public function MonAn()
    {
        $data = DB::table('monans')->join('loaimonans','monans.id_loai_mon_an','=','loaimonans.id')->get();
        return response()->json(['dulieu'=>$data]);
    }
    public function TimMonAn($id)
    {
        $MonAn = new MonAn;
        $data = $MonAn ->Find($id);
        return response()->json(['dulieu'=>$data]);
    }
    public function HinhAnh()
    {
        $data = DB::table('monans')->select('hinh_anh')->get();
        return response()->json(['dulieu'=>$data]);
    }
    public function LoaiMonAn()
    {
        $LoaiMonAn=LoaiMonAn::all();
        $data;
        foreach($LoaiMonAn as $value){
            $MonAn = MonAn::where('id_loai_mon_an', '=', $value->id)->get();    
            $data[]=[
                'id'=>$value->id,
                'ten_loai'=>$value->ten_loai,
                'MonAns'=>$MonAn
            ];
        }
        return response()->json(['dulieu'=>$data]);
    }

    public function KiemTraDangNhap(Request $request)
    {
        $tai_khoan = $request->tai_khoan;
        $password = $request->password;
        $result = false;
        $data = User::where('tai_khoan',$tai_khoan)->get()->get(0);
        if(!is_null($data))
        {
            if (Hash::check($password, $data->password))
            {
                $result = true;
            }
        }
        return response()->json(['result'=>$result]);
    }
    public function timkiem(Request $request)
    {
        $search = $request->key;
        $s=new MonAn();
        $dsmonan = $s->Search($search)->get();
        return response()->json(['dulieu'=>$dsmonan]);
    }
}
