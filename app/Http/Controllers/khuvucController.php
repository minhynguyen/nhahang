<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khuvuc;
use App\Http\Requests\khuvucrequest;

class khuvucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dskhuvuc = khuvuc::all();
        return view('backend.khuvuc.index')->with('dskhuvuc',$dskhuvuc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.khuvuc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(khuvucrequest $request)
    {
        $validatedData = $request->validate([
            'kv_ten' => 'required',
            'kv_ten'=>'unique:khuvuc',
        ]);
        try{
        $khuvuc = new khuvuc();
        $khuvuc->kv_ten = $request->kv_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $khuvuc->save();

        return redirect(route('khuvuc.index')); //trả về trang cần hiển thị
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
        $khuvuc = khuvuc::find($id);
        return view('backend.khuvuc.edit')->with('khuvuc', $khuvuc); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(khuvucrequest $request, $id)
    {
        try{
        $khuvuc = khuvuc::find($id);
        $khuvuc->kv_ten = $request->kv_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $khuvuc->kv_trangthai = $request->kv_trangthai;
        $khuvuc->save();

        return redirect(route('khuvuc.index')); //trả về trang cần hiển thị
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
        $khuvuc = khuvuc::find($id);
        $khuvuc->delete();
        return redirect(route('khuvuc.index'));
    }
}
