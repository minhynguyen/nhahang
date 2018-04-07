@extends('backend.layouts.app')   

@section('title')
  Thống Kê Món Ăn
@endsection


@section('page-header')
      <h1>
        Thống Kê Món Ăn
        <small>Thống Kê Món Ăn</small>
      </h1>
@endsection
@section('css')
<style>
  a {
    color: #ffffff !important;
}
</style>
@endsection


<!-- noi dung can thay doi o giua -->
@section('content')
 
<div class="box">

            <div class="box-header">
              <h3 class="box-title">Thống Kê Món Ăn Bán Ra Hôm Nay</h3>

              
            </div>
            <div class="box-body table-responsive no-padding">
              
              <table class="table table-hover text-center">
                <tr>
                  <th style="text-align: left;">Mã Món Ăn</th>
                  <th style="text-align: left;">Tên Món Ăn</th>
                  <th style="text-align: left;">Đơn Giá</th>
                  <th>Số Lượng</th>
                  <th style="text-align: left;">Thành Tiền</th>
                  
                  
                  
                </tr>
                <?php  
                  $tongban = 0;
                  $tongthu = 0;
                ?>
                @foreach ($monan as $ma)
        <!-- nhãn từ controller -->
                <tr>
                    <td style="text-align: left;">{{$ma->ma_ma}}</td>
                    <td style="text-align: left;">{{$ma->ma_ten}}</td>
                    <td style="text-align: left;">{{$ma->ma_dongia}}</td>
                    <td>{{$ma->sl}}</td>
                    <td style="text-align: left;">{{$ma->sl * $ma->ma_dongia}}</td>
                    
                      
                    
                </tr>
                <?php  
                  $tongban += $ma->sl;
                  $tongthu += $ma->sl * $ma->ma_dongia;
                ?>

        @endforeach
                
                
              </table>
              <h3>
              <i class="fa  fa-th-large"></i> Tổng số món ăn bán ra trong ngày: {{$tongban}}</h3>
              <h3>
              <i class="fa fa-money"></i> Tổng thu trong ngày: {{$tongthu}} VNĐ</h3>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



