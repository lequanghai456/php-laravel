<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiMonAn;
use App\MonAn;
use DB;

class TableLoaiMonAnController extends Controller
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
        $dsloaimonan = LoaiMonAn::paginate(10);
        $data = ['dsloaimonan'=>$dsloaimonan];
        return view("loaimonan.index",$data);
    }

    public function search(Request $request)
    { 
        $search = $request->search;
        $dsloaimonan = LoaiMonAn::where('ten_loai', 'like','%'.$search.'%')->paginate(10);
        $data = ['dsloaimonan'=>$dsloaimonan];
        return view("loaimonan.index",$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("loaimonan.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $loaimonan = new LoaiMonAn;
        $loaimonan->ten_loai = $request->tenloaimonan;
        $loaimonan->save();
        return redirect()->route('TableLoaiMonAn.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $loaimonan = new LoaiMonAn;
        $loaimonan = $loaimonan->FindLoaiMonAn($id);
        return view("loaimonan.delete",$loaimonan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $loaimonan = new LoaiMonAn;
        $data = $loaimonan ->FindLoaiMonAn($id);
        return view("loaimonan.update",$data);
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
        //
        $loaimonan = new LoaiMonAn;
        $data = $loaimonan ->FindLoaiMonAn($id);
        $data->ten_loai= $request->tenloai;
        $data->save();
        return redirect()->route('TableLoaiMonAn.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $loaimonan = new LoaiMonAn;
        $data = $loaimonan ->FindLoaiMonAn($id);
        $msg="";
        $ma=new MonAn;
        if($ma->FindLoaiMonAn($id)==null){
            $data->delete();
            return redirect()->route('TableLoaiMonAn.index');
        }
        else $msg="Không thể xoá";
        return redirect()->route('TableLoaiMonAn.show',$id)->with('msg', $msg);
    }
}
