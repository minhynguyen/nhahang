<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khuvuc;
use App\ban;
use App\hoadon;
use App\monan;
use App\chitiethoadon;
use DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;

class frontendController extends Controller
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
        

        $dshoadon = DB::table('hoadon')->join('ban', 'ban.b_ma', '=', 'hoadon.b_ma')
                                        ->whereDate('hd_taomoi', $day)->orderBy('hd_taomoi', 'desc')->get();
        $dshoadonchuatt = DB::table('hoadon')->join('ban', 'ban.b_ma', '=', 'hoadon.b_ma')
                                        ->whereDate('hd_taomoi', $day)->where('hd_trangthai','2')->get();
                                        // dd($dshoadon);
        $dskhuvuc = DB::table('khuvuc')->where('kv_trangthai','2')->get();
        $dsloaimonan = DB::table('loaimonan')->where('lma_trangthai','2')->get();
        $dsmonan = DB::table('monan')->where('ma_trangthai','2')->get();
        return view('backend.hoadon.order1')->with('dskhuvuc', $dskhuvuc)->with('dsloaimonan', $dsloaimonan)->with('dsmonan', $dsmonan)->with('dshoadon', $dshoadon)->with('dshoadonchuatt', $dshoadonchuatt);
    }

    public function qli()
    {
        
        // $dshoadon = DB::table('hoadon')->join('ban', 'ban.b_ma', '=', 'hoadon.b_ma')->get();
        $dskhuvuc = DB::table('khuvuc')->where('kv_trangthai','2')->get();
        // $dsloaimonan = DB::table('loaimonan')->where('lma_trangthai','2')->get();
        // $dsmonan = DB::table('monan')->where('ma_trangthai','2')->get();
        return view('backend.hoadon.sanh')->with('dskhuvuc', $dskhuvuc);
    }

    public function timban(Request $request)
    {
        $kv_ma = $request->kv_ma;   

        $data = DB::table('ban')->where('kv_ma', $kv_ma)->where('b_tinhtrang', '=', 0)->get();


        return response()->json($data);
    }
    public function qliban(Request $request)
    {
        $kv_ma = $request->kv_ma;   

        $data = DB::table('ban')->where('kv_ma', $kv_ma)->get();


        return response()->json($data);
    }

    public function timmonan(Request $request)
    {
        $lma_ma = $request->lma_ma;

        $data = DB::table('monan')->where('lma_ma', $lma_ma)->get();
        // return view('backend.hoadon.order')->with('data', $data);
        return response()->json($data);
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
        $hoadon = new hoadon();
        $hoadon->b_ma = $request->b_ma;
        $hoadon->save();
        $a = $request->b_ma;
        $ban = ban::find($a);
        // dd($ban);
        $ban->b_tinhtrang = 1;
        $ban->save();
        

        
        // dd($monan);
        foreach ($monan as $index => $ma ) {
            $chitiethoadon = new chitiethoadon();
            $chitiethoadon->hd_ma = $hoadon->hd_ma;
            $chitiethoadon->ma_ma = $ma;
            $dsmonan = DB::table('monan')->select('ma_dongia')->where('ma_ma', $ma)->get();
            // dd($dsmonan);
            $chitiethoadon->cthd_soluong = $soluong[$index];
            // $chitiethoadon->cthd_dongia = $dsmonan * $soluong[$index];
            $chitiethoadon->save();
              
        }

        return redirect(route('hoadontest.index'));
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


        return view('backend.hoadon.detail')->with('hoadon', $hoadon)->with('chitiethoadon', $chitiethoadon)->with('dsmonan', $dsmonan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $hoadon = hoadon::find($id);
        $hoadon->hd_trangthai = 1;
        $hoadon->hd_tongtien = $request->hd_tongtien;
        $hoadon->save();
        $a = $hoadon->b_ma;
        // dd($a);
        $ban = ban::find($a);
        $ban->b_tinhtrang = 0;
        $ban->save();
        // return href="/nhahang/public/hoadonpdf/{{$hd->hd_ma}}";
        return redirect(route('hoadontest.index'));
    }

    // public function thanhtoan($id)
    // {
    //     $hoadon = hoadon::find($id);
    //     $hoadon->hd_trangthai = 1;
    //     $hoadon->save();
    //     return redirect(route('hoadontest.index'));
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hoadon = hoadon::find($id);
        $hoadon->hd_trangthai = 1;
        $hoadon->save();
        return redirect(route('hoadontest.index'));
    }

    public function pdf()
    {
        try{
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
            // dd($hoadon);
            // $dsChude = ChuDe::take(20)->get(); // hàm này lấy 20 dòng không lấy hết
            //dd($dsChude);
            $data = [
                'hoadon' => $hoadon,
                'dsmonan' => $dsmonan,
                'chitiethoadon' => $chitiethoadon,
            ];
            // dd($data);
            // xem trước pdf
            return view('backend.hoadon.hoadonpdf')->with('hoadon', $hoadon)
                                                ->with('dsmonan', $dsmonan)
                                                ->with('chitiethoadon', $chitiethoadon);

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
