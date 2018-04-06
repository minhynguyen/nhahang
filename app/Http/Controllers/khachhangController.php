<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khachhang;

class khachhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dskhachhang = khachhang::all();
        return view('backend.khachhang.index')->with('dskhachhang',$dskhachhang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.khachhang.create');
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
        $khachhang = new khachhang();
        $khachhang->kh_ten = $request->kh_ten;
        $khachhang->kh_email = $request->kh_email;
        $khachhang->kh_diachi = $request->kh_diachi;
        $khachhang->kh_sdt = $request->kh_sdt;
        
        $khachhang->save();

        return redirect(route('khachhang.index')); //trả về trang cần hiển thị
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
        $khachhang = khachhang::find($id);
        return view('backend.khachhang.edit')->with('khachhang', $khachhang);
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
        $khachhang = khachhang::find($id);
        $khachhang->kh_ten = $request->kh_ten;
        $khachhang->kh_email = $request->kh_email;
        $khachhang->kh_diachi = $request->kh_diachi;
        $khachhang->kh_sdt = $request->kh_sdt;
        $khachhang->kh_trangthai = $request->kh_trangthai;
        
        $khachhang->save();

        return redirect(route('khachhang.index')); //trả về trang cần hiển thị
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
        $khachhang = khachhang::find($id);
        $khachhang->delete();
        return redirect(route('khachhang.index'));
    }
}
