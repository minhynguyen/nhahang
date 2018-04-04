<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use DB;

class nhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsNhanVien = NhanVien::all();
        return view('backend.nhanvien.index')->with('dsNhanVien',$dsNhanVien);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsQuyen = Quyen::all();
        return view('backend.nhanvien.create')->with('dsQuyen',$dsQuyen);
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
        $nhanvien = new NhanVien();
        $nhanvien->nv_hoten = $request->nv_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $nhanvien->nv_taikhoan = $request->nv_taikhoan;
        $nhanvien->nv_matkhau = $request->nv_matkhau;
        $nhanvien->nv_email = $request->nv_email;
        $nhanvien->nv_diachi = $request->nv_diachi;
        $nhanvien->nv_dienthoai = $request->nv_sdt;
        $nhanvien->nv_taomoi = $request->nv_taomoi;
        $nhanvien->nv_capnhat = $request->nv_capnhat;
        $nhanvien->nv_trangthai = $request->nv_trangthai;
        $nhanvien->q_ma = $request->q_ma;
        $nhanvien->save();

        return redirect(route('nhanvien.index')); //trả về trang cần hiển thị
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
        $dsQuyen = Quyen::all();
        $nhanvien = NhanVien::find($id);
        return view('backend.nhanvien.edit')->with('nhanvien', $nhanvien)->with('dsQuyen',$dsQuyen);
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
        $nhanvien = nhanvien::find($id);
        $nhanvien->nv_hoten = $request->nv_hoten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $nhanvien->nv_taikhoan = $request->nv_taikhoan;
        $nhanvien->nv_matkhau = $request->nv_matkhau;
        $nhanvien->nv_gioitinh = $request->nv_gioitinh;
        $nhanvien->nv_email = $request->nv_email;
        $nhanvien->nv_ngaysinh = $request->nv_ngaysinh;
        $nhanvien->nv_diachi = $request->nv_diachi;
        $nhanvien->nv_dienthoai = $request->nv_dienthoai;
        $nhanvien->nv_taomoi = $request->nv_taomoi;
        $nhanvien->nv_capnhat = $request->nv_capnhat;
        $nhanvien->nv_trangthai = $request->nv_trangthai;
        $nhanvien->q_ma = $request->q_ma;
        $nhanvien->save();

        return redirect(route('nhanvien.index')); //trả về trang cần hiển thị
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
        $nhanvien = nhanvien::find($id);
        $nhanvien->delete();
        return redirect(route('nhanvien.index'));
    }
}
