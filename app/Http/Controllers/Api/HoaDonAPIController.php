<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hoadon;
use App\ChiTietHoaDon;
use App\MonAn;
class HoaDonAPIController extends Controller
{
    public function taohoadon(Request $request)
    {
        $hd=new HoaDon();
        $hd->tong_tien = 0;
        $hd->id_ban = $request->id_ban;
        $result = $hd->save();
        $id_hd = $hd->id;
        return response()->json(['result'=>$id_hd]);
    }
    public function taocthoadon(Request $request)
    {
        $count=ChiTietHoaDon::where('id_hoa_don',$request->idhd)->where('id_mon_an',$request->id_mon_an)->get();
        $cthd=new ChiTietHoaDon;
        if(count($count)==0){
            $cthd->id_hoa_don = $request->idhd;
            //luu id mon an
            $cthd->id_mon_an = $request->id_mon_an;
            $MonAn=new MonAn;
            $cthd->don_gia = $MonAn->FindMonAn($cthd->id_mon_an)->gia;
        }
        else{
            $cthd=$count->get(0);
        }
        $cthd->so_luong = $request->so_luong;
        //tim Hd theo id
        $hd = HoaDon::find($request->idhd);
        //tinh tien
        $hd->tong_tien = $cthd->don_gia * $cthd->so_luong;
        $hd->save();
        $cthd->save();
        return response()->json(['Total'=>$hd->tong_tien]);
    }
}
