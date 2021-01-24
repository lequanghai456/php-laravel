<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguyenLieu;
class TableNguyenLieuController extends Controller
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
        $dsnguyenlieu =NguyenLieu::paginate(10);;
        $data = ['dsnguyenlieu'=>$dsnguyenlieu];
        return view("nguyenlieu.index",$data);
    }

    public function search(Request $request)
    { 
        $search = $request->search;
        $dsnguyenlieu = NguyenLieu::where('ten', 'like','%'.$search.'%')->paginate(10);
        $data = ['dsnguyenlieu'=>$dsnguyenlieu];
        return view("nguyenlieu.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("nguyenlieu.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nguyenlieu = new NguyenLieu;
        $nguyenlieu->ten = $request->tennguyenlieu; 
        $nguyenlieu->don_gia = $request->gia;
        $nguyenlieu->tinh_trang = $request->tinhtrang;
        $nguyenlieu->save();
        return redirect()->route('TableNguyenLieu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nguyenlieu = new NguyenLieu;
         $nguyenlieu = $nguyenlieu->FindNguyenLieu($id);
         return view("nguyenlieu.delete",$nguyenlieu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nguyenlieu = new NguyenLieu;
        $data = $nguyenlieu ->FindNguyenLieu($id);
        return view("nguyenlieu.update",$data);
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
        $nguyenlieu = new NguyenLieu;
        $data = $nguyenlieu ->FindNguyenLieu($id);
        $data->ten = $request->tennguyenlieu;
        $data->don_gia = $request->gia;
        $data->tinh_trang = $request->tinhtrang;
        $data->save();
        return redirect()->route('TableNguyenLieu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nguyenlieu = new NguyenLieu;
        $data = $nguyenlieu ->FindNguyenLieu($id);
        $data->delete();
        return redirect()->route('TableNguyenLieu.index');
    }
}
