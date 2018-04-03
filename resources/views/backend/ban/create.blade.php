@extends('backend.layouts.app')   

@section('title')
  Thêm Bàn
@endsection


@section('page-header')
      <h1>
         Thêm Bàn
        <small> Thêm Bàn</small>
      </h1>
@endsection

@section('content')
<form name="frmmonan" method="POST" action="{{route('ban.store')}}" enctype="multipart/form-data"> <!-- action tu controller -->
  <!-- enctype="multipart/form-data" để đưa ảnh lên host -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm Bàn</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputPassword1">KHU VỰC</label>
            <select name="kv_ma" id="lma_ma" class="form-control select2 select2-hidden-accessible">
              @foreach($dskhuvuc as $kv)
              <option value="{{$kv->kv_ma}}">{{$kv->kv_ten}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN BÀN</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="b_ten" placeholder="Nhập Tên Chủ Đề">
          </div>
           
          
          
          
          <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="b_trangthai", id="b_trangthai">
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



