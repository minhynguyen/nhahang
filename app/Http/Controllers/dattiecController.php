<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khuvuc;
use App\ban;
use App\hoadon;
use App\monan;
use App\chitiethoadon;
use App\chitietdattiec;
use App\phieudattiec;
use DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;

class dattiecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now();
        $day = $now->toDateString(); 
        

        $dsphieudat = DB::table('phieudattiec')->join('ban', 'ban.b_ma', '=', 'phieudattiec.b_ma')
                                        ->whereDate('pdt_taomoi', $day)->orderBy('pdt_taomoi', 'desc')->get();
        $dskhuvuc = DB::table('khuvuc')->where('kv_trangthai','2')->get();
        $dsloaimonan = DB::table('loaimonan')->where('lma_trangthai','2')->get();
        $dsmonan = DB::table('monan')->where('ma_trangthai','2')->get();
        return view('backend.dattiec.order')->with('dskhuvuc', $dskhuvuc)->with('dsloaimonan', $dsloaimonan)->with('dsmonan', $dsmonan)->with('dsphieudat', $dsphieudat);
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
