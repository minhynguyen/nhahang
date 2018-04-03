@extends('backend.layouts.app')   

@section('title')
  Danh Sách Khu Vực
@endsection


@section('page-header')
      <h1>
        Danh Sách Khu Vực
        <small>Danh Sách Khu Vực</small>
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
<!-- <a href="{{ route('khuvuc.create') }}">Thêm Mới Khu Vực</a> -->
<!-- <button type="button" class="btn btn-info"> <i class="fa fa-plus"></i> Thêm màu mới</button> -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Khu Vực</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Mã Khu Vực</th>
                  <th>Tên Khu Vực</th>
                  <th>Tạo Mới</th>
                  <th>Cập Nhật</th>
                  <th>Trạng Thái</th>
                  <th colspan="2" style="text-align: center;"><button type="button" class="btn btn-info"><a href=" {{ route('khuvuc.create') }}" > <i class="fa fa-plus"></i> Thêm Khu Vực </a></button></th>
                </tr>
                @foreach ($dskhuvuc as $kv)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$kv->kv_ma}}</td>
                    <td>{{$kv->kv_ten}}</td>
                    <td>{{$kv->kv_taomoi}}</td>
                    <td>{{$kv->kv_capnhat}}</td>
                    <td>{{$kv->kv_trangthai}}</td>
                    <td style="text-align: center;">
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('khuvuc.edit', ['khuvuc' => $kv->kv_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    </td>
                    <td>
                    
                      <form method="POST" action="{{route('khuvuc.destroy', ['khuvuc' => $kv->kv_ma])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </a></button>
                      </form>
                    </td>
                </tr>

        @endforeach
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



