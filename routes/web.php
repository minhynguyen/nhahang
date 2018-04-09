<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\hoadon;
// use DB;
use Barryvdh\DomPDF\Facade as PDF;
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'], function(){	
	
	Route::resource('loaimonan', 'loaimonanController');
	Route::resource('monan', 'monanController');
	Route::resource('khuvuc', 'khuvucController');
	Route::resource('ban', 'banController');
	Route::resource('hoadon', 'frontendController');
    Route::resource('quanlihoadon', 'hoadonController');
	Route::resource('dattiec', 'dattiecController');
	Route::resource('khachhang', 'khachhangController');
    Route::get('thongkemonanall', 'pdfController@monan')->name('thongkemonanall');
    Route::get('thongkemonantheongay', 'pdfController@monantoday')->name('thongkemonantheongay');
	Route::get('hoadonthang', 'pdfController@hoadontrongthang')->name('hoadonthang');
	// Route::get('hoadon/pdf', 'hoadonController@destroy')->name('hoadon.pdf');
	// Route::resource('hoadontest', 'frontendController');
	Route::get('monan/pdf', 'monanController@show')->name('monan.pdf');
	// Route::get('hoadon/pdf', 'hoadonController@destroy')->name('hoadon.pdf');


});
Route::get('hoadonpdf/{id}',function($id){

    // $hoadon = hoadon::find($id);
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

});

Route::get('menupdf',function(){

    // $hoadon = hoadon::find($id);
    try{
        
        $dsmonan = DB::table('loaimonan')
                    ->join('monan', 'loaimonan.lma_ma', '=', 'monan.lma_ma')
                    ->get();
            // dd($dsmonan);
            // $dsChude = ChuDe::take(20)->get(); // hàm này lấy 20 dòng không lấy hết
            //dd($dsChude);
            $data = [
                'dsmonan' => $dsmonan,
                
            ];
            // dd($data);
            // xem trước pdf
            return view('backend.monan.menupdf')->with('dsmonan', $dsmonan);
                                                

            // xuất pdf và cho download
            $pdf = PDF::loadView('backend.monan.menupdf', $data);
            return $pdf->download('Menu.pdf');
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

})->name('monanpdf');
// Route::get('/timban', function () {
//     return view('backend.hoadon.order');
// });
// Route::resource('/hoadon', 'frontendController');
Route::get('/quanlisanh', 'frontendController@qli');
Route::get('/timban', 'frontendController@timban');
Route::get('/qliban', 'frontendController@qliban');
Route::get('/timmonan', 'frontendController@timmonan');

// Route::get('/ajax-kv_ma', function () {
//     $kv_ma = Input::get('kv_ma');

//     $ban = ban::where('kv_ma', '=', $kv_ma)->get();

//     return Response::json($ban);
// });
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
