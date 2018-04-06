@extends('backend.layouts.app')   

@section('title')
  Quản Lí Sảnh
@endsection


@section('page-header')
      <h1>
        Quản Lí Sảnh
        <small>Quản Lí Sảnh</small>
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

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Quản Lí Sảnh</h3>
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
              

           

         
          <!-- /.box -->
            <!-- <div class="col-md-12" style="margin-top: 10px">
                <button class="btn btn-info" type="submit" style="width: 100%">THÊM</button>
            </div> -->
        </div>
      </div>
      <!-- <button type="submit" class="btn btn-primary">THÊM MỚI</button> -->
    </form>
   
    <div class="col-md-7">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Quản Lí Sảnh</h3>
            </div>
            <div class="box-body" id="sanh">
              <!-- <div class="col-md-6"><div class="info-box"><span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span><div class="info-box-content"><span class="info-box-text"></span><span class="info-box-text"></span><span class="info-box-text"></span></div></div></div> -->
              
            </div>
              

           

         
          <!-- /.box -->
            <div class="col-md-12" style="margin-top: 10px">
                <!-- <button class="btn btn-info" type="submit" style="width: 100%">THÊM</button> -->
            </div>
        </div>
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
        url: '{{url('/qliban')}}',
        data: {'kv_ma' : kv_ma},
        success:function(data){
          $("#b_ma").empty();
          $("#sanh").empty();
          var dataObject = JSON.parse(data);
          dataObject.forEach(function(ele) {
            console.log(ele);
            $("#b_ma").append('<option value = "' + ele.b_ma +'">' + ele.b_ten + '</option>');
            // $("#b_ten").append('<option value = "' + ele.b_ma +'">' + ele.b_ten + '</option>');
            // $("#sanh").append('<span class="info-box-text">'+ele.b_ten+'</span><span class="info-box-text">'+ele.b_tinhtrang+'</span><span class="info-box-text"></span>');
            $("#sanh").append('<div class="col-md-6"><div class="info-box"><span class="info-box-icon bg-green"><i class="fa  fa-map"></i></span><div class="info-box-content"> Mã Bàn: '+ele.b_ma+'<span class="info-box-text"></span>Tên Bàn: '+ele.b_ten+'<span class="info-box-text"></span>@if('+ele.b_tinhtrang+'=== 0)<span class="badge bg-green">CÓ KHÁCH</span>@else<span class="badge bg-yellow">TRỐNG</span>@endif<span class="info-box-text"></span>'+ele.b_tinhtrang+'</div></div></div>');
          })
        }
      });
    });
});



</script>

@endsection


