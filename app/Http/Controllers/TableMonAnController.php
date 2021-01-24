<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MonAn;
use App\LoaiMonAn;
use DB;
class TableMonAnController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsmonan =MonAn::paginate(10);
        $data = ['dsmonan'=>$dsmonan];
        return view("monan.index",$data);
    }

    public function search(Request $request)
    { 
        $search = $request->search;
        $s=new MonAn();
        $dsmonan = $s->Search($search)->paginate(10);
        $data = ['dsmonan'=>$dsmonan];
        return view("monan.index",$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("monan.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $monan = new MonAn;
        if($request->hinhanh == null)
        {
            $monan->hinh_anh = "Noimg.png";    
        }else
        {
            $ext = $request->hinhanh->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,999999).".".$ext;
            $monan->hinh_anh = $file;
            $request->hinhanh->storeAs('assets-2/img',$file);
        }
        $monan->ten_mon_an = $request->tenmonan;
        $monan->gia = $request->gia;
        $monan->mo_ta = $request->mota;
        
        $monan->id_loai_mon_an = $request->loaimonan;
        $monan->save();
        return redirect()->route('TableMonAn.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $MonAn = new MonAn;
        $datamonan = $MonAn -> FindMonAn($id);
        $loaimonan = new LoaiMonAn;
        $dataloaimonan = $loaimonan -> FindLoaiMonAn($datamonan->id_loai_mon_an);
        $data = ['datamonan'=>$datamonan,'dataloaimonan'=>$dataloaimonan];
        return view("monan.delete",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $monan = new MonAn;
        $loaimonan = new loaiMonAn;
        $dsloaimonan = $loaimonan->DSLoaiMonAn();
        $data = ['monan'=>$monan->FindMonAn($id),'dsloaimonan'=>$dsloaimonan,'loaimonanhientai'=>$loaimonan->FindLoaiMonAn($monan->FindMonAn($id)->id_loai_mon_an)];
        return view("monan.update",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $monan = new MonAn;
        $data = $monan ->FindMonAn($id);
        if($request->hinhanh != null)
        {
        $ext = $request->hinhanh->getClientOriginalExtension();
        $file = $monan->get()->count().".".$ext;
        $request->hinhanh->storeAs('assets-2/img',$file);
        $data->hinh_anh = $file;
        }
        else
        {
            $data->hinh_anh = $data->hinh_anh;
        }
        $data->ten_mon_an = $request->tenmonan;
        $data->gia = $request->gia;
        $data->mo_ta = $request->mota;
        $data->id_loai_mon_an = $request->loaimonan;
        $data->save();
        return redirect()->route('TableMonAn.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $MonAn = new MonAn;
        $data = $MonAn ->FindMonAn($id);
        $data->delete();
        return redirect()->route('TableMonAn.index');
    }
}
