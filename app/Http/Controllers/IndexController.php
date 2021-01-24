<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MonAN;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    //     $gt = ['gt'=>'Có thể với bạn món ăn chỉ để thương thức, nhưng với chúng tôi nấu ăn là cả nghệ thuật. Mời các bạn đến nhà hàng để thưởng thức nghệ thuật của chúng tôi'];
    //     $monan = ['monan'=>[
    //         ['ten_mon_an'=>'Món ăn 1','gia'=>'500000'],
    //         ['ten_mon_an'=>'Món ăn 2','gia'=>'500000'],
    //         ['ten_mon_an'=>'Món ăn 3','gia'=>'500000'],
    //         ['ten_mon_an'=>'Món ăn 4','gia'=>'500000'],
    //         ['ten_mon_an'=>'Món ăn 5','gia'=>'500000'],
    //         ['ten_mon_an'=>'Món ăn 6','gia'=>'500000'],
    //         ['ten_mon_an'=>'Món ăn 7','gia'=>'500000'],
    //         ['ten_mon_an'=>'Món ăn 8','gia'=>'500000']]
    //     ];
    //     return view(".index",$monan,$gt);
    //}
    public function index()
    {
        //
        $gt = ['gt'=>'Có thể với bạn món ăn chỉ để thương thức, nhưng với chúng tôi nấu ăn là cả nghệ thuật. Mời các bạn đến nhà hàng để thưởng thức nghệ thuật của chúng tôi'];
        $monan = ['monan'=> MonAn::ALL()];
        return view(".index",$monan,$gt);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
