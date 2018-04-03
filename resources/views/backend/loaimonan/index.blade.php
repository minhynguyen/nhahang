@extends('backend.layouts.app')   

@section('title')
  Danh Sách Các Loại Món Ăn
@endsection


@section('page-header')
      <h1>
        Danh Sách Các Loại Món Ăn
        <small>Danh Sách Các Loại Món Ăn</small>
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
<!-- <a href="{{ route('loaimonan.create') }}">Thêm Mới Loại Món Ăn</a> -->
<!-- <button type="button" class="btn btn-info"> <i class="fa fa-plus"></i> Thêm màu mới</button> -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Các Loại Món Ăn</h3>

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
                  <th>Ma</th>
                  <th>Ten</th>
                  <th>Tao Moi</th>
                  <th>Cap Nhat</th>
                  <th>Trang Thai</th>
                  <th colspan="2" style="text-align: center;"><button type="button" class="btn btn-info"><a href=" {{ route('loaimonan.create') }}" > <i class="fa fa-plus"></i> Thêm Món Ăn </a></button></th>
                </tr>
                @foreach ($dsLoai as $l)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$l->lma_ma}}</td>
                    <td>{{$l->lma_ten}}</td>
                    <td>{{$l->lma_taomoi}}</td>
                    <td>{{$l->lma_capnhat}}</td>
                    <td>{{$l->lma_trangthai}}</td>
                    <td style="text-align: center;">
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('loaimonan.edit', ['loai' => $l->lma_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    </td>
                    <td>
                    
                      <form method="POST" action="{{route('loaimonan.destroy', ['loai' => $l->lma_ma])}}">
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



