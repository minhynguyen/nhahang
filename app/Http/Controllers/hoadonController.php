<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\khuvuc;
use App\ban;
use App\hoadon;
use App\monan;
use App\chitiethoadon;
use DB;
use Carbon\Carbon;

class hoadonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
        
        $dsmonan = DB::table('monan')
                    ->where('monan.ma_trangthai', 2)
                    ->get();
            // dd($dsmonan);
            // $dsChude = ChuDe::take(20)->get(); // hàm này lấy 20 dòng không lấy hết
            //dd($dsChude);
            $data = [
                
                'dsmonan' => $dsmonan,
                
            ];
            // dd($data);
            // xem trước pdf
            return view('backend.hoadon.menupdf')->with('dsmonan', $dsmonan);

            // xuất pdf và cho download
            $pdf = PDF::loadView('backend.hoadon.menupdf', $data);
            return $pdf->download('menu.pdf');
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
