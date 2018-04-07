@extends('backend.layouts.app')   

@section('title')
  Thêm Món Ăn
@endsection


@section('page-header')
      <h1>
        Thêm Món Ăn
        <small>Thêm Món Ăn</small>
      </h1>
@endsection

@section('content')
@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      <!-- hàm validate trong lar hỗ trợ biến errors -->
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
<form name="frmmonan" method="POST" action="{{route('monan.store')}}" enctype="multipart/form-data"> <!-- action tu controller -->
  <!-- enctype="multipart/form-data" để đưa ảnh lên host -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm Món Ăn</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputPassword1">Loại Món Ăn</label>
            <select name="lma_ma" id="lma_ma" class="form-control select2 select2-hidden-accessible">
              @foreach($dsLoai as $loai)
              <option value="{{$loai->lma_ma}}">{{$loai->lma_ten}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN MÓN ĂN</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ma_ten" placeholder="Nhập Tên Chủ Đề">
          </div>
           <div class="form-group">

            <label for="exampleInputEmail1">GIÁ BÁN</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ma_dongia" placeholder="Nhập Tên Chủ Đề">
          </div>
          
          <div class="form-group">

            <label for="exampleInputEmail1">Ảnh</label>
            <input type="file" class="form-control" id="ma_hinhanh" name="ma_hinhanh" placeholder="Nhập Tên Chủ Đề">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Mô Tả</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ma_mota" placeholder="Nhập Tên Chủ Đề">
          </div>
          
          <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="ma_trangthai", id="ma_trangthai">
                  <!-- <select > -->
                    <option value="1">Khóa</option>
                    <option value="2">Khả dụng</option>
                  <!-- </select> -->
                </select>
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
          <button type="submit" class="btn btn-primary">THÊM MỚI</button>
        </div>
      </form>

  </div>
  </form>

<!-- noi dung can thay doi o giua -->



@endsection



