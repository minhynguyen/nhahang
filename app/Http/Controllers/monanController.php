<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\monan;
use App\loaimonan;
use DB;

class monanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsmonan = DB::table('monan')->join('loaimonan', 'monan.lma_ma', '=', 'loaimonan.lma_ma')->get();
        // $dsnhatro = ;
        return view('backend.monan.index')->with('dsmonan',$dsmonan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsLoai = DB::table('loaimonan')->where('lma_trangthai','2')->get();
        return view('backend.monan.create')->with('dsLoai',$dsLoai);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        $monan = new monan();
        $monan->ma_ten = $request->ma_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $monan->ma_mota = $request->ma_mota;
        $monan->ma_dongia = $request->ma_dongia;
        // $sanpham->sp_hinh = $request->sp_hinh;
        // kiểm tra file


        if($request->hasFile('ma_hinhanh')){
            $file = $request->ma_hinhanh;
            $monan->ma_hinhanh = $file->getClientOriginalName();
            $file->move('upload', $monan->ma_hinhanh); //hàm này di chuyển ảnh tới thư mục public/upload
        }



        
        $monan->ma_trangthai = $request->ma_trangthai;
        $monan->lma_ma = $request->lma_ma;
        $monan->save();

        return redirect(route('monan.index')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
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
        $dsLoai = DB::table('loaimonan')->where('lma_trangthai','2')->get();;
        $monan = monan::find($id);
        return view('backend.monan.edit')->with('monan', $monan)->with('dsLoai',$dsLoai);
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
        try{
        $monan = monan::find($id);
        $monan->ma_ten = $request->ma_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $monan->ma_mota = $request->ma_mota;
        $monan->ma_dongia = $request->ma_dongia;
        // $sanpham->sp_hinh = $request->sp_hinh;
        // kiểm tra file


        if($request->hasFile('ma_hinhanh')){
            $file = $request->ma_hinhanh;
            $monan->ma_hinhanh = $file->getClientOriginalName();
            $file->move('upload', $monan->ma_hinhanh); //hàm này di chuyển ảnh tới thư mục public/upload
        }

        
        $monan->ma_trangthai = $request->ma_trangthai;
        $monan->lma_ma = $request->lma_ma;
        $monan->save();

        return redirect(route('monan.index')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monan = monan::find($id);
        $monan->delete();
        // if($sanpham->hasFile('sp_hinh')){
        //     $file = $sanpham->sp_hinh;
        //     $sanpham->sp_hinh = $file->getClientOriginalName();
        //     $file->remove('upload', $sanpham->sp_hinh);
        // }
        return redirect(route('monan.index'));
    }
}
