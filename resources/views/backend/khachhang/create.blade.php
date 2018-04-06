@extends('backend.layouts.app')   

@section('title')
  Thêm Khách Hàng
@endsection


@section('page-header')
      <h1>
        Thêm Khách Hàng
        <small>Thêm Khách Hàng</small>
      </h1>
@endsection

@section('content')
<form name="frmmonan" method="POST" action="{{route('khachhang.store')}}" enctype="multipart/form-data"> <!-- action tu controller -->
  <!-- enctype="multipart/form-data" để đưa ảnh lên host -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm Khách Hàng</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN KHÁCH HÀNG</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kh_ten" placeholder="Nhập Tên Chủ Đề">
          </div>
           <div class="form-group">

            <label for="exampleInputEmail1">EMAIL</label>
            <input type="email" class="form-control"  name="kh_email" placeholder="Nhập Tên Chủ Đề">
          </div>
          
          <div class="form-group">

            <label for="exampleInputEmail1">SỐ ĐIỆN THOẠI</label>
            <input type="text" class="form-control"  name="kh_sdt">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">ĐỊA CHỈ: </label>
            <input type="text" class="form-control"  name="kh_diachi" >
          </div>
          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">THÊM MỚI</button>
        </div>
      </form>

  </div>
  </form>

<!-- noi dung can thay doi o giua -->



@endsection



