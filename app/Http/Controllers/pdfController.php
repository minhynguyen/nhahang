<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\khuvuc;
use App\ban;
use App\hoadon;
use App\monan;
use App\users;
use App\chitiethoadon;
use DB;
use Carbon\Carbon;

class pdfController extends Controller
{
    public function pdf($id)
    {
        try{
            $hoadon = hoadon::all();
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


    public function monan()
    {
    	$now = Carbon::now();
        $day = $now->month;
        // dd($day);

        $monan = DB::table('hoadon')
        			->join('chitiethoadon', 'chitiethoadon.hd_ma', '=', 'hoadon.hd_ma')
        			->whereMonth('hd_taomoi', $day)
        			->join('monan', 'monan.ma_ma', '=', 'chitiethoadon.ma_ma')
                     ->select(DB::raw('sum(chitiethoadon.cthd_soluong) as sl , monan.ma_ma,monan.ma_ten, monan.ma_dongia'))
                     ->groupBy('ma_ma', 'monan.ma_ten', 'monan.ma_dongia')

                     ->orderBy('sl', 'desc')
                     ->get(); 
        
        
        return view('backend.thongke.monanall')->with('monan', $monan);
        // return view('backend.thongke.monan');
    }


    public function monantoday()
    {
    	$now = Carbon::now();
        $day = $now->toDateString();

        $monan = DB::table('hoadon')
        			->join('chitiethoadon', 'chitiethoadon.hd_ma', '=', 'hoadon.hd_ma')
        			->whereDate('hd_taomoi', $day)
        			->join('monan', 'monan.ma_ma', '=', 'chitiethoadon.ma_ma')
                     ->select(DB::raw('sum(chitiethoadon.cthd_soluong) as sl , monan.ma_ma,monan.ma_ten, monan.ma_dongia'))
                     ->groupBy('ma_ma', 'monan.ma_ten', 'monan.ma_dongia')
                     ->orderBy('sl', 'desc')
                     ->get(); 
       
        return view('backend.thongke.monantoday')->with('monan', $monan);
        // return view('backend.thongke.monan');
    }


    public function hoadontrongthang()
    {
    	$now = Carbon::now();
        $day = $now->month;
        // dd($day);

        $hoadon = DB::table('hoadon')
                    ->join('users', 'users.id', '=', 'hoadon.id')
        			->join('ban', 'ban.b_ma', '=', 'hoadon.b_ma')
        			->join('khuvuc', 'ban.kv_ma', '=', 'khuvuc.kv_ma')
        			->join('chitiethoadon', 'chitiethoadon.hd_ma', '=', 'hoadon.hd_ma')
        			->where('hoadon.hd_trangthai', 1)
        			->whereMonth('hoadon.hd_taomoi', $day)
                     ->orderBy('hoadon.hd_ma', 'desc')
                     ->get(); 
        return view('backend.thongke.hoadonall')->with('hoadon', $hoadon);
    }
}
