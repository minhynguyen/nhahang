<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comboController extends Controller
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
        $monan = $request->input('monan.id');
        $soluong = $request->input('monan.soluong');
        // $soluong = $request->input('soluong');
        // dd($monan);
        // dd($soluong);
        $combo = new combo();
        $combo->cb_ten = $request->cb_ten;
        $combo->cb_mota = $request->cb_mota;
        $combo->cb_gia = $request->cb_gia;
        $combo->save();
        

        
        // dd($monan);
        foreach ($monan as $index => $ma ) {
            $chitietcombo = new chitiethoadon();
            $chitietcombo->hd_ma = $combo->cb_ma;
            $chitietcombo->ma_ma = $ma;
            $dsmonan = DB::table('monan')->select('ma_dongia')->where('ma_ma', $ma)->get();
            // dd($dsmonan);
            $chitietcombo->cb_soluong = $soluong[$index];
            // $chitiethoadon->cthd_dongia = $dsmonan * $soluong[$index];
            $chitietcombo->save();
              
        }

        return redirect(route('hoadon.index'));
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
