@extends('backend.layouts.app')   

@section('title')
  Chỉnh Sửa Loại
@endsection


@section('page-header')
      <h1>
        Chỉnh Sửa Loại
        <small>Chỉnh Sửa Loại</small>
      </h1>
@endsection

@section('content')
<form name="frmLoai" method="POST" action="{{route('loaimonan.update', ['loai'=> $loai->lma_ma]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">SỬA LOẠI MÓN ĂN</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN LOẠI</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="lma_ten" placeholder="Nhập Tên Chủ Đề" value="{{$loai->lma_ten}}">
          </div>
          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($loai->lma_trangthai === 1)
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="lma_trangthai", id="lma_trangthai">
                    <option value="1" selected>Khóa</option> 
                    <option value="2">Khả Dụng</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="lma_trangthai", id="lma_trangthai">
                    <option value="1" >Khóa</option> 
                    <option value="2" selected>Khả Dụng</option>
                </select>
                @endif

          </div>
          
          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">SỬA</button>
        </div>
      </form>

  </div>
  </form>

<!-- noi dung can thay doi o giua -->



@endsection



