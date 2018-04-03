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
  <div class="col-md-6">

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
                    <span class="info-box-number">Chọn Sảnh</span>

                    <select class="form-control select2 select2-hidden-accessible" name="kv_ma" id="kv_ma">
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
                    <span class="info-box-number">Chọn Bàn</span>
                    <select class="form-control select2 select2-hidden-accessible" name="b_ma", id="b_ma">
                      <option>gada</option>
                      <option>gada</option>
                      <option>gada</option>
                      <option>gada</option>
                    </select>
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </div>
            </div>
              

           

          <div class="box box-info">
            <div class="box-header">
              <div class="col-md-6">
              <h3 class="box-title">Danh Sách Các Món Ăn</h3>
              </div>
              <div class="col-md-6">
              <select class="form-control select2 select2-hidden-accessibl">
                <option>Chọn Loại Món Ăn</option>
              </select>
              </div>
            </div>
            <div class="box-body">
              <div class="box-body">
                <div class="col-md-6">
                        <div class="media">
                            <div class="media-left">
                                <a href="">
                                    <img src="" style="width: 50px;height: 50px;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                                <a href="" class="btn btn-success btn-sm ad-click-event" style="margin-top: 30px">ADD</a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    

                                    <h4 style="margin-top: 0">Tên</h4>

                                    <p>Loại</p>
                                    <p style="margin-bottom: 0">
                                        <i class="fa fa-shopping-cart margin-r5"></i>Giá
                                    </p>

                                    <p style="margin-bottom: 0">
                                        <select class="form-control select2 select2-hidden-accessibl">
                                          <option> 1</option>
                                          <option> 1</option>
                                          <option> 1</option>
                                          <option> 1</option>
                                        </select>
                                    </p>
                                    <!-- <p class="pull-right"> -->
                                        
                                        
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
              
             
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
      </div>

        <div class="col-md-6">
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
          console.log(data);
          // $("#productData").html(response);
        }
      });
    });
  // $("#kv_ma").click(function(){
  //   var cat = $("#catID").val();
  //   var price = $('#priceID').val();
    
  //   $.ajax({
  //     type: 'get',
  //     dataType: 'html',
  //     url: '{{url('/productsCat')}}',
  //     data: 'cat_id=' + cat + '&price=' + price,
  //     success:function(response){
  //       console.log(response);
  //       $("#productData").html(response);
  //     }
  //   });


  // });

});
</script>

@endsection


