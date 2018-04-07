@extends('backend.layouts.app')   

@section('title')
  Thống Kê Món Ăn Bán Ra Trong Tháng
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
              <h3 class="box-title">Thống Kê Món Ăn Bán Ra Trong Tháng</h3>

              
            </div>
            <div class="box-body table-responsive no-padding">
              
              <table class="table table-hover text-center">
                <tr>
                  <th style="text-align: center;">Mã Hóa Đơn</th>
                  <th style="text-align: center;">Người Lập</th>
                  <th style="text-align: left;">Sảnh/KhuVực</th>
                  <th style="text-align: left;">Bàn</th>
                  <th style="text-align: center;">Tổng Tiền</th>
                  <th style="text-align: center;">Ngày Lập</th>
                  <!-- <th>Số Lượng</th> -->
                  
                  
                  
                </tr>
                <?php  
                  $tongthu = 0;
                ?>
                @foreach ($hoadon as $hd)
        <!-- nhãn từ controller -->
                <tr>
                    <td style="text-align: center;">{{$hd->hd_ma}}</td>
                    <td style="text-align: center;">{{$hd->name}}</td>
                    <td style="text-align: left;">{{$hd->kv_ten}}</td>
                    <td style="text-align: left;">{{$hd->b_ten}}</td>
                    <td style="text-align: center;">{{$hd->hd_tongtien}}</td>
                    <td style="text-align: center;">{{$hd->hd_taomoi}}</td>
                    
                    
                      
                    
                </tr>
                <?php  
                  $tongthu += $hd->hd_tongtien;
                ?>

        @endforeach
                
                
              </table>
              
              <h3>
              <i class="fa fa-money"></i> Tổng thu trong tháng: {{$tongthu}} VNĐ</h3>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



