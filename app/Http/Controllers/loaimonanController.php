<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaimonan;

class loaimonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLoai = loaimonan::all();
        return view('backend.loaimonan.index')->with('dsLoai',$dsLoai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.loaimonan.create');
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
        $loai = new loaimonan();
        $loai->lma_ten = $request->lma_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $loai->save();

        return redirect(route('loaimonan.index')); //trả về trang cần hiển thị
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
        $loai = loaimonan::find($id);
        return view('backend.loaimonan.edit')->with('loai', $loai); 
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
        $loai = loaimonan::find($id);
        $loai->lma_ten = $request->lma_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $loai->lma_trangthai = $request->lma_trangthai;
        $loai->save();

        return redirect(route('loaimonan.index')); //trả về trang cần hiển thị
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
        $loai = loaimonan::find($id);
        $loai->delete();
        return redirect(route('loaimonan.index'));
    }
}
