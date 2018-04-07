@extends('backend.layouts.app')   

@section('title')
  Nhập Phiếu Đặt Tiệc
@endsection

@section('page-header')
      <h1>
        Nhập Phiếu Đặt Tiệc
        <small>Nhập Phiếu Đặt Tiệc</small>
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

<form name="frmhoadon" method="POST" action="{{route('dattiec.store')}}" enctype="multipart/form-data"> <!-- action tu controller -->
  {{ csrf_field() }}
  <div class="col-md-7">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Thông Tin Đặt Tiệc</h3>
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
            </div>
            
            
            <div class="box-header">
              
              <div class="col-md-12">
              <select class="form-control select2 select2-hidden-accessibl" name="lma_ma", id="lma_ma">
                <option  disabled selected>CHỌN LOẠI MÓN ĂN</option>
                @foreach($dsloaimonan as $lma)
                        <option value="{{$lma->lma_ma}}">{{$lma->lma_ten}}</option>
                @endforeach
              </select>
              </div>
            </div>
            <div class="box-body" id="monan">
              
            </div>
            <button class="btn btn-info" type="submit" style="width: 100%">THÊM</button>
             
            
          </div>
          </form>
          
          <!-- /.box -->
          <div class="col-md-12" style="margin-top: 10px">
               <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Phiếu Đặt Tiệc</h3>

                </div>
            
            <!-- /.box-body -->
          </div>
          </div>
        </div>
      </div>
      <!-- <button type="submit" class="btn btn-primary">THÊM MỚI</button> -->
    

        
        




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
            var a;
            a= ele.ma_ma;
            console.log(a);
            $("#ma_ma").append('<option value = "' + ele.ma_ma +'">' + ele.ma_ten + '</option>');
            $("#monan").append('<div class="col-md-6"><div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-coffee"></i></span><div class="info-box-content"><input name="monan[id][]" id="monan" type="checkbox" value="'+ele.ma_ma+'">Mã Món Ăn: '+ele.ma_ma+'<span class="info-box-text"></span>Tên Món Ăn: '+ele.ma_ten+'<span class="info-box-text"></span>'+ele.ma_dongia+'<span class="info-box-text"></span>'+ele.ma_hinhanh+'<select name="monan[soluong][]"><option disabled selected>Chọn Số Lượng</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></div></div></div>');
            



            

          })

          
        }
      });
    });
});
</script>

@endsection


