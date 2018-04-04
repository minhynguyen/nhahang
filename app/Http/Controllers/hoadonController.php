<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hoadonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // $nhatro = new nhatro();
        // $nhatro->nt_ten = $request->nt_ten;
        // $nhatro->nt_diachi = $request->nt_diachi;
        // $nhatro->nt_sdtlienhe = $request->nt_sdtlienhe;
        // $nhatro->nt_kinhdo = $request->nt_kinhdo;
        // $nhatro->nt_vido = $request->nt_vido;
        // $nhatro->nt_dientich = $request->nt_dientich;
        // $nhatro->nt_giathue = $request->nt_giathue;
        // $nhatro->nt_giadien = $request->nt_giadien;
        // $nhatro->nt_gianuoc = $request->nt_gianuoc;
        // $nhatro->nt_tinhtrang = $request->nt_tinhtrang;
        // $nhatro->nt_trangthai = $request->nt_trangthai;
        // $nhatro->id = Auth::user()->id;
        // $nhatro->lnt_ma = $request->lnt_ma;
        // $nhatro->save();
        
        $monan = $request->input('monan');
        // dd($monan[id][soluong]);
        // foreach ($tienich as $ti) {
        //     $nhatro_tienich = new nhatro_tienich();
        //     $nhatro_tienich->nt_ma = $nhatro->nt_ma;
        //     $nhatro_tienich->ti_ma = $ti;
        //     $nhatro_tienich->save();
        // }
        
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
