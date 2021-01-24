<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChiTietHoaDon;
class TableChiTietHoaDonController extends Controller
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
        $cthoadon = new ChiTietHoaDon;
        $dscthoadon = $cthoadon -> DSChiTietHoaDon()->paginate(10);;
        $data = ['dscthoadon'=>$dscthoadon];
        return view("chitiethoadon.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cthoadon = new ChiTietHoaDon;
        $dscthoadon = $cthoadon -> DSChiTietHoaDon();
        $data = ['dscthoadon'=>$dscthoadon];
        return view("chitiethoadon.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chitiethoadon = new chitiethoadon();
        $chitiethoadon->id_hoa_don = $request->Id_Hoa_Don;
        $chitiethoadon->id_mon_an = $request->Id_Mon_An;
        $chitiethoadon->don_gia = $request->Don_Gia;
        $chitiethoadon->so_luong = $request->So_Luong;
        $chitiethoadon->save();
        return redirect()->route('TableChiTietHoaDon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
