@extends('backend.layouts.app')   

@section('title')
  Nhập Order
@endsection


@section('page-header')
      <h1>
        CHI TIẾT HÓA ĐƠN
        <small>Nhập Order</small>
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
<form name="frmhoadon" method="POST" action="" enctype="multipart/form-data"> <!-- action tu controller -->
  {{ csrf_field() }}
  <div class="col-md-7">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">THÔNG TIN HÓA ĐƠN</h3>
            </div>
            @foreach($hoadon as $hd)
            <div class="col-md-6">
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">KHU VỰC/ SẢNH</span>
                    <h3 class="box-title">{{$hd->kv_ten}}</h3>
                    <!-- <span class="info-box-number">Chọn Sảnh</span> -->

                    
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">BÀN</span>
                    <h3 class="box-title">{{$hd->b_ten}}</h3>
                    <!-- <span class="info-box-number">Chọn Sảnh</span> -->

                    
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </div>
            
            <h3 class="box-title">MÃ HOÁ ĐƠN: {{$hd->hd_ma}}</h3>
            
            @endforeach
            
            <table class="table table-bordered">
                <tbody>
                  <tr>
                  <th style="width: 10px">Mã</th>
                  <th style="width: 10px">Bàn</th>
                  <th style="width: 10px">Số Lượng</th>
                  
                  <th style="width: 20%">Đơn Giá</th>
                  <th style="width: 20%">Thành Tiền</th>
                  <!-- <th style="text-align: center;">Action</th> -->
                </tr>
                <?php  
                  $gia = 0;
                 ?>
                 @foreach($dsmonan as $ds)

                 
                <tr>
                 
                  <td>{{$ds->ma_ma}}</td>
                  <td>{{$ds->ma_ten}}</td>
                  <td>{{$ds->cthd_soluong}}</td>
                  <td>{{$ds->ma_dongia}}</td>

                  <td>{{($ds->ma_dongia * $ds->cthd_soluong)}}</td>

                </tr>
                <?php 
                    
                    $gia += $ds->ma_dongia * $ds->cthd_soluong;
                 ?>
                
                  
                  @endforeach


              </tbody>


            </table>
            <!-- @foreach($dsmonan as $ds)

            @endforeach -->
            <div class="col-md-12">
              <div class="col-md-6">
                <button type="submit" class="btn btn-block btn-info btn-lg"> <i class="fa fa-check"></i> Tổng Tiền: </a></button>
              </div>
              <div class="col-md-6">
                <input type="text" class="btn btn-block btn-info btn-lg" name="hd_tongtien" value="{{$gia}}">
              </div>
              
              
            </div>
            
          


            <!-- <h1 name="hd_tongtien" value="{{$gia}}">Tổng Tiền: {{$gia}}</h1> -->
            
            
            

            
              

           

          
          <!-- /.box -->
          
        </div>
        
        
        
      </div>

      <div class="col-md-5">
        <div class="box box-info">
            <div class="box-header">
              <div class="col-md-12">
              <h3 class="box-title">THANH TOÁN</h3>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-12">
                @if($hd->hd_trangthai === 2)
                <div class="col-md-12">
                    <form method="POST" action="{{route('hoadon.update', ['hoadon' => $hd->hd_ma])}}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <button type="submit" class="btn btn-block btn-info btn-lg"> <i class="fa fa-check"></i> Thanh Toán </a></button>
                      </form>
                </div>
                @endif
                @if ($hd->hd_trangthai === 1)
                <div class="col-md-12">
                    <td colspan="2">
                    <a href="/nhahang/public/hoadonpdf/{{$hd->hd_ma}}" class="btn btn-block btn-info btn-lg"><i class="fa fa-file-pdf-o"></i> IN HÓA ĐƠN</a>
                    
                  </td>
                    
                  
                </div>
                @endif
              </div>
            </div>
        </div>

      </div>
      <!-- <button type="submit" class="btn btn-primary">THÊM MỚI</button> -->
    </form>

        




@endsection





