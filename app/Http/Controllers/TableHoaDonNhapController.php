<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoaDonNhap;

class TableHoaDonNhapController extends Controller
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
        $dshoadonnhap = HoaDonNhap::paginate(10);
        $data = ['dshoadonnhap'=>$dshoadonnhap];
        return view("hoadonnhap.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $DSNhaCungCap = NhaCungCap::all();
        $data=['data'=>$DSNhaCungCap];
        return view("hoadonnhap.create",$data);
    }

    public function store(Request $request)
    {
        $HoaDonNhap = new HoaDonNhap;
        $HoaDonNhap->id_nha_cung_cap = $request->Id_Nha_Cung_Cap;
        $HoaDonNhap->save();
        return redirect()->route('TableHoaDonNhap.index');
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
    }
}
