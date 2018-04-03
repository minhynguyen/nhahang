@extends('backend.layouts.app')   

@section('title')
  Sửa Bàn
@endsection


@section('page-header')
      <h1>
        Sửa Bàn
        <small>Sửa Bàn</small>
      </h1>
@endsection

@section('content')
<form name="frmSanPham" method="POST" action="{{route('ban.update', ['ban'=> $ban->b_ma]) }}" enctype="multipart/form-data"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Sửa Bàn</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputPassword1">KHU VỰC</label>
            <select name="kv_ma" id="kv_ma" class="form-control select2 select2-hidden-accessible">
              @foreach($dskhuvuc as $kv)
              <option value="{{$kv->kv_ma}}" <?php echo ($kv->kv_ma == $ban->kv_ma) ? 'selected' : ''  ?>>{{$kv->kv_ten}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN BÀN</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="b_ten" placeholder="Nhập Tên Chủ Đề" value="{{$ban->b_ten}}">
          </div>
           
          
          
          

          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($ban->b_trangthai === 1)
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="b_trangthai", id="b_trangthai">
                    <option value="1" selected>Khóa</option> 
                    <option value="2">Khả Dụng</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="b_trangthai", id="b_trangthai">
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




