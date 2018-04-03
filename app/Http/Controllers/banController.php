<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khuvuc;
use App\ban;
use DB;

class banController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsban = DB::table('ban')->join('khuvuc', 'ban.kv_ma', '=', 'khuvuc.kv_ma')->get();
        // $dsnhatro = ;
        return view('backend.ban.index')->with('dsban',$dsban);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dskhuvuc = DB::table('khuvuc')->where('kv_trangthai','2')->get();
        return view('backend.ban.create')->with('dskhuvuc',$dskhuvuc);
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
        $ban = new ban();
        $ban->b_ten = $request->b_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        



        
        $ban->b_trangthai = $request->b_trangthai;
        $ban->kv_ma = $request->kv_ma;
        $ban->save();

        return redirect(route('ban.index')); //trả về trang cần hiển thị
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
        $dskhuvuc = DB::table('khuvuc')->where('kv_trangthai','2')->get();
        $ban = ban::find($id);
        return view('backend.ban.edit')->with('ban', $ban)->with('dskhuvuc',$dskhuvuc);
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
        $ban = ban::find($id);
        $ban->b_ten = $request->b_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        



        
        $ban->b_trangthai = $request->b_trangthai;
        $ban->kv_ma = $request->kv_ma;
        $ban->save();

        return redirect(route('ban.index')); //trả về trang cần hiển thị
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
        $ban = ban::find($id);
        $ban->delete();
        // if($sanpham->hasFile('sp_hinh')){
        //     $file = $sanpham->sp_hinh;
        //     $sanpham->sp_hinh = $file->getClientOriginalName();
        //     $file->remove('upload', $sanpham->sp_hinh);
        // }
        return redirect(route('ban.index'));
    }
}
