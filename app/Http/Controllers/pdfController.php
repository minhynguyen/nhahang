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
}
