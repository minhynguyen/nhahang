@extends('backend.layouts.app')   

@section('title')
  Quản Lí Hóa Đơn
@endsection


@section('page-header')
      <h1>
        Quản Lí Hóa Đơn
        <small>Quản Lí Hóa Đơn</small>
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
              <h3 class="box-title">Danh Sách Hóa Đơn</h3>

              
            </div>
            <div class="box-body table-responsive no-padding">
              
              <table class="table table-hover text-center">
                <tr>
                  <th style="text-align: center;">Mã Hóa Đơn</th>
                  <th style="text-align: left;">Tên Nhân Viên</th>
                  <th style="text-align: left;">Số Bàn</th>
                  <th style="text-align: left;">Khu Vực</th>
                  <th style="text-align: left;">Tổng Tiền</th>
                  <th style="text-align: center;">Ngày Lập</th>
                  <th style="text-align: center;">Trạng Thái</th>
                  
                  <th colspan="2"><button type="button" class="btn btn-info"><a href=" {{ route('hoadon.index') }}" > <i class="fa fa-plus"></i> Thêm Hóa Đơn </a></button></th>
                </tr>
                @foreach ($dshoadon as $hd)
        <!-- nhãn từ controller -->
                <tr>
                    <td style="text-align: center;">{{$hd->hd_ma}}</td>
                    <td style="text-align: left;">{{$hd->name}}</td>
                    <td style="text-align: left;">{{$hd->b_ten}}</td>
                    <td style="text-align: left;">{{$hd->kv_ten}}</td>
                    <td style="text-align: left;">{{$hd->hd_tongtien}}</td>
                    <td style="text-align: center;">{{$hd->hd_taomoi}}</td>
                    

                    
                    @if ($hd->hd_trangthai === 2)

                        <td style="text-align: center;"><span class="badge bg-red">CHƯA THANH TOÁN</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-green">ĐÃ THANH TOÁN</span></td>
                    @endif
                    
                     
                    
                    <td >
                    <a class="btn btn-block btn-warning btn-lg" href="{{ route('hoadon.show', ['hoadon]' => $hd->hd_ma]) }}"><em class="fa fa-eye"></em></a>
                    </td>
                    <td>
                    <a href="/nhahang/public/hoadonpdf/{{$hd->hd_ma}}" class="btn btn-block btn-info btn-lg"><i class="fa fa-file-pdf-o"> In</i></a>
                    
                  </td>
                </tr>

        @endforeach
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>


<div class="box">

            <div class="box-header">
              <h3 class="box-title">Danh Sách Hóa Đơn Chưa Thanh Toán</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-body table-responsive no-padding">
              
              <table class="table table-hover text-center">
                <tr>
                  <th style="text-align: center;">Mã Hóa Đơn</th>
                  <th style="text-align: left;">Tên Nhân Viên</th>
                  <th style="text-align: left;">Số Bàn</th>
                  <th style="text-align: left;">Khu Vực</th>
                  <th style="text-align: left;">Tổng Tiền</th>
                  <th style="text-align: center;">Ngày Lập</th>
                  <th style="text-align: center;">Trạng Thái</th>
                  
                  
                </tr>
                @foreach ($dshoadonchuatt as $hd)
        <!-- nhãn từ controller -->
                <tr>
                    <td style="text-align: center;">{{$hd->hd_ma}}</td>
                    <td style="text-align: left;">{{$hd->name}}</td>
                    <td style="text-align: left;">{{$hd->b_ten}}</td>
                    <td style="text-align: left;">{{$hd->kv_ten}}</td>
                    <td style="text-align: left;">{{$hd->hd_tongtien}}</td>
                    <td style="text-align: center;">{{$hd->hd_taomoi}}</td>
                    

                    
                    @if ($hd->hd_trangthai === 2)

                        <td style="text-align: center;"><span class="badge bg-red">CHƯA THANH TOÁN</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-green">ĐÃ THANH TOÁN</span></td>
                    @endif
                    
                     
                    
                    <td >
                    <a class="btn btn-block btn-warning btn-lg" href="{{ route('hoadon.show', ['hoadon]' => $hd->hd_ma]) }}"><em class="fa fa-eye"></em></a>
                    </td>
                    
                </tr>

        @endforeach
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



