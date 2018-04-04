@extends('backend.layouts.app')   

@section('title')
  Nhập Order
@endsection


@section('page-header')
      <h1>
        Nhập Order
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
<form name="frmhoadon" method="POST" action="{{route('hoadon.store')}}" enctype="multipart/form-data"> <!-- action tu controller -->
  {{ csrf_field() }}
  <div class="col-md-7">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Thông Tin Bàn</h3>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">KHU VỰC/ SẢNH</span>
                    <!-- <span class="info-box-number">Chọn Sảnh</span> -->

                    <select class="form-control select2 select2-hidden-accessible" name="kv_ma" id="kv_ma">
                      <option  disabled selected>CHỌN SẢNH</option>
                       @foreach($dskhuvuc as $kv)
                        <option value="{{$kv->kv_ma}}">{{$kv->kv_ten}}</option>
                        @endforeach
                    </select>
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">BÀN</span>
                    <!-- <span class="info-box-number">Chọn Bàn</span> -->
                    <!-- <div id="b_ma"> -->
                  
                    <select class="form-control select2 select2-hidden-accessible" id="b_ma" name="b_ma">
                      <option  disabled selected>CHỌN BÀN</option>
                    </select>
                    <!-- </div> -->
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </div>
            </div>
              

           

          <div class="box box-info">
            <div class="box-header">
              <div class="col-md-6">
              <h3 class="box-title">NHẬP ORDER</h3>
              </div>
              <div class="col-md-12">
              <select class="form-control select2 select2-hidden-accessibl" name="lma_ma", id="lma_ma">
                <option  disabled selected>CHỌN LOẠI MÓN ĂN</option>
                @foreach($dsloaimonan as $lma)
                        <option value="{{$lma->lma_ma}}">{{$lma->lma_ten}}</option>
                @endforeach
              </select>
              </div>

              <div class="col-md-12" style="margin-top: 10px;">
              <select class="form-control select2 select2-hidden-accessibl" name="ma_ma", id="ma_ma">
                
              </select>
              </div>

              <div class="col-md-12" style="margin-top: 10px">
              <select class="form-control select2 select2-hidden-accessibl" name="lma_ma", id="lma_ma">
                <option  disabled selected>CHỌN SỐ LƯỢNG</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              </div>

              

            </div>
            <div class="box-body">
              <div class="box-body">
                
                <table class="table table-bordered">
                <tbody>
                  <tr>
                  <th style="width: 10px"></th>
                  <th>TÊN MÓN ĂN</th>
                  <th>ĐƠN GIÁ</th>
                  
                  <th style="width: 40px">SỐ LƯỢNG</th>
                  <!-- <th>THÀNH TIỀN</th> -->
                </tr>
                @foreach($dsmonan as $ma)
                <tr>
                  <th><input name="monan[id][]" id="monan" type="checkbox" value="{{$ma->ma_ma}}"></th>
                  <th>{{$ma->ma_ten}}</th>
                  <th>{{$ma->ma_dongia}}</th>
                  <th>
                    <select name="monan[soluong][]">
                      <option disabled selected>Chọn Số Lượng</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </th>
                </tr>
                
              </tbody>
              @endforeach
            </table>

                  
                
              </div>
                  
              
             
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="col-md-12" style="margin-top: 10px">
                <button class="btn btn-info" type="submit" style="width: 100%">THÊM</button>
              </div>
        </div>
      </div>
      <!-- <button type="submit" class="btn btn-primary">THÊM MỚI</button> -->
    </form>

        <div class="col-md-5">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Chi Tiết Hóa Đơn</h3>
            </div>
            <div class="box-body">
              <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">STT</th>
                  <th>TÊN MÓN ĂN</th>
                  <th>ĐƠN GIÁ</th>
                  
                  <th style="width: 40px">SỐ LƯỢNG</th>
                  <th>THÀNH TIỀN</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                </tr>
              </tbody>
            </table>
            <h1>Tổng Tiền:</h1>
            </div>
              

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">THANH TOÁN</h3>
            </div>
            <div class="box-body">
              <div class="col-md-6">
              <button type="button" class="btn btn-block btn-info btn-lg">Thanh Toán</button>
              </div>
              <div class="col-md-6">
              <button type="button" class="btn btn-block btn-info btn-lg">Xuất Hóa Đơn</button>
              </div>
              
              
            </div>
            <!-- /.box-body -->
            <!-- <div class="box-footer">
              Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
            </div> -->
          </div>
          <!-- /.box -->
        </div>




@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('change', '#kv_ma', function(){
      var kv_ma = $(this).val();
      console.log(kv_ma);
      $.ajax({
        type: 'get',
        dataType: 'html',
        url: '{{url('/timban')}}',
        data: {'kv_ma' : kv_ma},
        success:function(data){
          $("#b_ma").empty();
          var dataObject = JSON.parse(data);
          dataObject.forEach(function(ele) {
            console.log(ele);
            $("#b_ma").append('<option value = "' + ele.b_ma +'">' + ele.b_ten + '</option>');
          })
        }
      });
    });
});


$(document).ready(function(){
    $(document).on('change', '#lma_ma', function(){
      var lma_ma = $(this).val();
      console.log(lma_ma);
      $.ajax({
        type: 'get',
        dataType: 'html',
        url: '{{url('/timmonan')}}',
        data: {'lma_ma' : lma_ma},
        success:function(data){
          // $("#lma_ma").empty();
          $("#ma_ten").empty();
          $("#ma_ma").empty();
          // $("#ma_hinh").empty();
          var dataObject = JSON.parse(data);
          dataObject.forEach(function(ele) {
            console.log(ele);
            $("#ma_ma").append('<option value = "' + ele.ma_ma +'">' + ele.ma_ten + '</option>');
            // $("#ma_ma").html(ele);
            // $("#ma_ten").append(ele.ma_ten);
            // $("#ma_gia").append(ele.ma_dongia);
            // // $("#ma_ten").append(ele.ma_ten);
            // // $ha = ele.ma_hinhanh;
            // // console.log($ha);
            // $("#ma_hinh").append('<img src="{{asset('upload/ele.ma_hinhanh')}}" alt="abc" height="150" width="100">');



            

          })

          
        }
      });
    });
});
</script>

@endsection


