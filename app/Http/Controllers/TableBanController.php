<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ban;
use App\LoaiBan;

class TableBanController extends Controller
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
        $dsban =Ban:: paginate(10);
        $data = ['dsban'=>$dsban];
        return view("ban.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ban.create");
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
        $ban = new Ban;
        $ban->so = $request->soban;
        $ban->save();
        return redirect()->route('TableBan.index');
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
        $ban = new Ban;
        $databan = $ban -> FindBan($id);
        $data = ['databan'=>$databan];
        return view('ban.delete',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ban = new Ban;
        $data = ['ban' =>$ban->FindBan($id)];
        return view("ban.update",$data);
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
        $ban = new Ban;
        $data = $ban ->FindBan($id);
        $data->so = $request->soban;
        $data->save();
        return redirect()->route('TableBan.index');
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
        $ban = new Ban;
        $data = $ban ->FindBan($id);
        $data->delete();
        return redirect()->route('TableBan.index');
    }
}
