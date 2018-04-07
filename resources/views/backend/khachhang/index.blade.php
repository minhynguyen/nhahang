@extends('backend.layouts.app')   

@section('title')
  Danh Sách Khách Hàng
@endsection


@section('page-header')
      <h1>
        Danh Sách Khách Hàng
        <small>Danh Sách Khách Hàng</small>
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
              <h3 class="box-title">Danh Sách Khách Hàng</h3>

              
            </div>
            <div class="box-body table-responsive no-padding">
              
              <table class="table table-hover text-center">
                <tr>
                  <th>Mã Khách Hàng</th>
                  <th>Tên Khách Hàng</th>
                  <th>Email</th>
                  <th>Địa Chỉ</th>
                  <th>Số Điện Thoại</th>
                  <th>Trạng Thái</th>
                  
                  <th colspan="2"><button type="button" class="btn btn-info"><a href=" {{ route('khachhang.create') }}" > <i class="fa fa-plus"></i> Thêm Khách Hàng </a></button></th>
                </tr>
                @foreach ($dskhachhang as $kh)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$kh->kh_ma}}</td>
                    <td>{{$kh->kh_ten}}</td>
                    <td>{{$kh->kh_email}}</td>
                    <td>{{$kh->kh_diachi}}</td>
                    <td>{{$kh->kh_sdt}}</td>

                    
                    @if ($kh->kh_trangthai === 2)

                        <td style="text-align: center;"><span class="badge bg-green">Khả Dụng</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-yellow">Khóa</span></td>
                    @endif
                    
                     
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('khachhang.edit', ['khachhang' => $kh->kh_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    </td>
                    <td>
                      <form method="POST" action="{{route('khachhang.destroy', ['khachhang' => $kh->kh_ma])}}">
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



