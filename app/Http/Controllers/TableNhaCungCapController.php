<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhaCungCap;

class TableNhaCungCapController extends Controller
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
        $dsnhacungcap = NhaCungCap::paginate(10);
        $data = ['dsnhacungcap'=>$dsnhacungcap];
        return view("nhacungcap.index",$data);
    }

    public function search(Request $request)
    {
        //
        $search = $request->search;
        $dsnhacungcap = NhaCungCap::where('ten', 'like','%'.$search.'%')->paginate(10);
        $data = ['dsnhacungcap'=>$dsnhacungcap];
        return view("nhacungcap.index",$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("nhacungcap.create");
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
        $nhacungcap = new NhaCungCap;
        $nhacungcap->ten = $request->ten;
        $nhacungcap->dia_chi = $request->diachi;
        $nhacungcap->sdt = $request->sodienthoai;
        $nhacungcap->save();
        return redirect()->route('TableNhaCungCap.index');
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
        $nhacungcap = new NhaCungCap;
        $data = $nhacungcap->FindNhaCungCap($id);
        return view("nhacungcap.delete",$data);
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
        $nhacungcap = new NhaCungCap;
        $data = $nhacungcap ->FindNhaCungCap($id);
        return view("nhacungcap.update",$data);
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
        $nhacungcap = new NhaCungCap;
        $data = $nhacungcap ->FindNhaCungCap($id);
        $data->ten = $request->ten;
        $data->dia_chi = $request->diachi;
        $data->sdt = $request->sodienthoai;
        $data->save();
        return redirect()->route('TableNhaCungCap.index');
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
        $nhacungcap = new NhaCungCap;
        $data = $nhacungcap ->FindNhaCungCap($id);
        $data->delete();
        return redirect()->route('TableNhaCungCap.index');
    }
}
