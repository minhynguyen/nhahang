@extends('backend.layouts.app')   

@section('title')
  Sửa Khách Hàng
@endsection


@section('page-header')
      <h1>
        Sửa Khách Hàng
        <small>Sửa Khách Hàng</small>
      </h1>
@endsection

@section('content')
<form name="frmSanPham" method="POST" action="{{route('khachhang.update', ['khachhang'=> $khachhang->kh_ma]) }}" enctype="multipart/form-data"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Sửa Khách Hàng</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN MÓN ĂN</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kh_ten" placeholder="Nhập Tên Khách Hàng" value="{{$khachhang->kh_ten}}">
          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">EMAIL</label>
            <input type="email" class="form-control"  name="kh_email" value="{{$khachhang->kh_email}}" placeholder="Nhập Tên Chủ Đề">
          </div>
          
          <div class="form-group">

            <label for="exampleInputEmail1">SỐ ĐIỆN THOẠI</label>
            <input type="text" class="form-control"  name="kh_sdt" value="{{$khachhang->kh_sdt}}">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">ĐỊA CHỈ: </label>
            <input type="text" class="form-control"  name="kh_diachi" value="{{$khachhang->kh_diachi}}">
          </div>
          
        </div>
           
          
          
          
          

          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($khachhang->kh_trangthai === 1)
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="kh_trangthai", id="ma_trangthai">
                    <option value="1" selected>Khóa</option> 
                    <option value="2">Khả Dụng</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="kh_trangthai", id="ma_trangthai">
                    <option value="1" >Khóa</option> 
                    <option value="2" selected>Khả Dụng</option>
                </select>
                @endif

          </div>
          
          

          <!-- <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">

            <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div> -->
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
      </form>

  </div>
  </form>

<!-- noi dung can thay doi o giua -->



@endsection



