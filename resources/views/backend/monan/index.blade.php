@extends('backend.layouts.app')   

@section('title')
  Danh Sách Món Ăn
@endsection


@section('page-header')
      <h1>
        Danh Sách Món Ăn
        <small>Danh Sách Món Ăn</small>
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

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Món Ăn</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover text-center">
                <tr>
                  <th>Mã Món Ăn</th>
                  <th>Loại Món Ăn</th>
                  <th>Tên Món Ăn</th>
                  <th>Giá Bán</th>
                  <th>Hình Ảnh</th>
                  <th>Mô Tả</th>
                  <th>Tạo Mới</th>
                  <th>Cập Nhật</th>
                  <th>Trạng Thái</th>
                  
                  <th colspan="2"><button type="button" class="btn btn-info"><a href=" {{ route('monan.create') }}" > <i class="fa fa-plus"></i> Thêm Món Ăn </a></button></th>
                </tr>
                @foreach ($dsmonan as $ma)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$ma->ma_ma}}</td>
                    <td>{{$ma->lma_ten}}</td>

                    <td>{{$ma->ma_ten}}</td>
                    <td>{{$ma->ma_dongia}}</td>
                    <td><img src="{{ asset('upload/' . $ma->ma_hinhanh)}}" width="50px", height="50px"> </td>
                    <td>{{$ma->ma_mota}}</td>
                    <td>{{$ma->ma_taomoi}}</td>
                    <td>{{$ma->ma_capnhat}}</td>
                    <!-- <td>{{$ma->ma_trangthai}}</td> -->
                    @if ($ma->ma_trangthai === 2)

                        <td style="text-align: center;"><span class="badge bg-green">Khả Dụng</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-yellow">Khóa</span></td>
                    @endif
                    
                     
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('monan.edit', ['monan' => $ma->ma_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    </td>
                    <td>
                      <form method="POST" action="{{route('monan.destroy', ['monan' => $ma->ma_ma])}}">
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



