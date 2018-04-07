<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\khuvuc;
use App\ban;
use App\hoadon;
use App\users;
use App\monan;
use App\chitiethoadon;
use DB;
use Carbon\Carbon;
use Auth;

class hoadonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        

        $dshoadon = DB::table('hoadon')->join('ban', 'ban.b_ma', '=', 'hoadon.b_ma')
                                        ->join('khuvuc', 'khuvuc.kv_ma', '=', 'ban.kv_ma')
                                        ->join('users', 'users.id', '=', 'hoadon.id')
                                        ->orderBy('hd_taomoi', 'desc')->get();
        // dd($dshoadon);
        // $dshoadonchuatt = DB::table('hoadon')->join('ban', 'ban.b_ma', '=', 'hoadon.b_ma')->where('hd_trangthai','2')->get();
        $dshoadonchuatt = DB::table('hoadon')->join('ban', 'ban.b_ma', '=', 'hoadon.b_ma')
                                        ->join('khuvuc', 'khuvuc.kv_ma', '=', 'ban.kv_ma')
                                        ->join('users', 'users.id', '=', 'hoadon.id')
                                        ->where('hd_trangthai','2')
                                        ->orderBy('hd_taomoi', 'desc')->get();
        
        $dskhuvuc = DB::table('khuvuc')->where('kv_trangthai','2')->get();
        $dsloaimonan = DB::table('loaimonan')->where('lma_trangthai','2')->get();
        $dsmonan = DB::table('monan')->where('ma_trangthai','2')->get();
        return view('backend.hoadon.index')->with('dskhuvuc', $dskhuvuc)->with('dsloaimonan', $dsloaimonan)->with('dsmonan', $dsmonan)->with('dshoadon', $dshoadon)->with('dshoadonchuatt', $dshoadonchuatt);
        // try{
        
        // $dsmonan = DB::table('monan')
        //             ->where('monan.ma_trangthai', 2)
        //             ->get();
        //     // dd($dsmonan);
        //     // $dsChude = ChuDe::take(20)->get(); // hàm này lấy 20 dòng không lấy hết
        //     //dd($dsChude);
        //     $data = [
                
        //         'dsmonan' => $dsmonan,
                
        //     ];
        //     // dd($data);
        //     // xem trước pdf
        //     return view('backend.hoadon.menupdf')->with('dsmonan', $dsmonan);

        //     // xuất pdf và cho download
        //     $pdf = PDF::loadView('backend.hoadon.menupdf', $data);
        //     return $pdf->download('menu.pdf');
        // }
        // catch(QueryException $ex){
        //     return reponse([
        //         'error' => true,
        //         'message' => $ex->getMessage()
        //     ], 200);

        // } catch(PDOExpection $ex){
        //     return reponse([
        //         'error' => true,
        //         'message' => $ex->getMessage()
        //     ], 200);
        // }
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
        $chitiethoadon = DB::table('hoadon')
                        ->join('chitiethoadon', 'hoadon.hd_ma', '=', 'hoadon.hd_ma')
                        ->join('monan', 'chitiethoadon.ma_ma', '=', 'monan.ma_ma')
                        ->join('users', 'users.id', '=', 'hoadon.id')
                        ->where('hoadon.hd_ma', $id)
                        ->get();
        $hoadon = DB::table('hoadon')
        ->join('ban', 'ban.b_ma', '=', 'hoadon.b_ma')
        ->join('khuvuc', 'khuvuc.kv_ma', '=', 'ban.kv_ma')
        ->where('hoadon.hd_ma', $id)->get();
                        // dd($hoadon);
        $dsmonan = DB::table('chitiethoadon')
                    ->join('monan', 'chitiethoadon.ma_ma', '=', 'monan.ma_ma')
                    ->where('chitiethoadon.hd_ma', $id)
                    ->get();
                        // dd($dsmonan);


        return view('backend.hoadon.index')->with('hoadon', $hoadon)->with('chitiethoadon', $chitiethoadon)->with('dsmonan', $dsmonan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $hoadon = hoadon::find($id);
            dd($hoadon);
            // $dsChude = ChuDe::take(20)->get(); // hàm này lấy 20 dòng không lấy hết
            //dd($dsChude);
            $data = [
                'hoadon' => $hoadon,
            ];
            // xem trước pdf
            return view('backend.hoadon.hoadonpdf')->with('hoadon', $hoadon);

            // xuất pdf và cho download
            $pdf = PDF::loadView('backend.hoadon.hoadonpdf', $data);
            return $pdf->download('DanhMucHoaDon.pdf');
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true,
                'message' => $ex->getMessage()
            ], 200);

        } catch(PDOExpection $ex){
            return reponse([
                'error' => true,
                'message' => $ex->getMessage()
            ], 200);
        }
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
        try{
            $hoadon = hoadon::find($id);
            dd($hoadon);
            // $dsChude = ChuDe::take(20)->get(); // hàm này lấy 20 dòng không lấy hết
            //dd($dsChude);
            $data = [
                'hoadon' => $hoadon,
            ];
            // xem trước pdf
            return view('backend.hoadon.hoadonpdf')->with('hoadon', $hoadon);

            // xuất pdf và cho download
            $pdf = PDF::loadView('backend.hoadon.hoadonpdf', $data);
            return $pdf->download('DanhMucHoaDon.pdf');
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true,
                'message' => $ex->getMessage()
            ], 200);

        } catch(PDOExpection $ex){
            return reponse([
                'error' => true,
                'message' => $ex->getMessage()
            ], 200);
        }
    }
}
