@extends('backend.layouts.app')   

@section('title')
  Thêm Khu Vực
@endsection


@section('page-header')
      <h1>
        Thêm Khu Vực
        <small>Thêm Khu Vực</small>
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
<form name="frmLoai" method="POST" action="{{route('khuvuc.store')}}"> <!-- action tu controller -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm Khu Vực</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN KHU VỰC</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kv_ten" placeholder="">
          </div>


          <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="kv_trangthai", id="lma_trangthai">
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



