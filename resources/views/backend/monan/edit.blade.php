@extends('backend.layouts.app')   

@section('title')
  Sửa Món Ăn
@endsection


@section('page-header')
      <h1>
        Sửa Món Ăn
        <small>Sửa Món Ăn</small>
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
<form name="frmSanPham" method="POST" action="{{route('monan.update', ['monan'=> $monan->ma_ma]) }}" enctype="multipart/form-data"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Sửa Món Ăn</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputPassword1">Loại Món Ăn</label>
            <select name="lma_ma" id="lma_ma" class="form-control select2 select2-hidden-accessible">
              @foreach($dsLoai as $loai)
              <option value="{{$loai->lma_ma}}" <?php echo ($loai->lma_ma == $monan->lma_ma) ? 'selected' : ''  ?>>{{$loai->lma_ten}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN MÓN ĂN</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ma_ten" placeholder="Nhập Tên Chủ Đề" value="{{$monan->ma_ten}}">
          </div>
           <div class="form-group">

            <label for="exampleInputEmail1">gia </label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ma_dongia" placeholder="Nhập Tên Chủ Đề" value="{{$monan->ma_dongia}}">
          </div>
          
          <!-- <div class="form-group">
            <img src="{{ asset('upload/' . $monan->ma_hinhanh)}}" width="50px", height="50px">
            <label for="exampleInputEmail1">hinh</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="ma_hinhanh" placeholder="Nhập Tên Chủ Đề" value="{{$monan->ma_hinhanh}}">
          </div> -->
          <div class="form-group">
            <img src="{{ asset('upload/' . $monan->ma_hinhanh)}}" width="50px", height="50px">
            <label for="exampleInputEmail1">hinh</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="ma_hinhanh" placeholder="Nhập Tên Chủ Đề" value="{{$monan->ma_hinhanh}}">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">thong tin</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ma_mota" placeholder="Nhập Tên Chủ Đề" value="{{$monan->ma_mota}}">
          </div>
          
          

          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($monan->ma_trangthai === 1)
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="ma_trangthai", id="ma_trangthai">
                    <option value="1" selected>Khóa</option> 
                    <option value="2">Khả Dụng</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="ma_trangthai", id="ma_trangthai">
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



