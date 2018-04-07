@extends('backend.layouts.app')   

@section('title')
  Danh Sách Bàn
@endsection


@section('page-header')
      <h1>
        Danh Sách Bàn
        <small>Danh Sách Bàn</small>
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
              <h3 class="box-title">Danh Sách Bàn</h3>
              
            </div>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover text-center">
                <tr>
                  <th>Mã Bàn</th>
                  <th>Khu Vực</th>
                  <th>Tên Bàn</th>
                  <th>Tạo Mới</th>
                  <th>Cập Nhật</th>
                  <th>Trạng Thái</th>
                  
                  <th colspan="2"><button type="button" class="btn btn-info"><a href=" {{ route('ban.create') }}" > <i class="fa fa-plus"></i> Thêm Bàn </a></button></th>
                </tr>
                @foreach ($dsban as $b)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$b->b_ma}}</td>
                    <td>{{$b->kv_ten}}</td>

                    <td>{{$b->b_ten}}</td>
                    
                    <td>{{$b->b_taomoi}}</td>
                    <td>{{$b->b_capnhat}}</td>
                    @if ($b->b_trangthai === 2)

                        <td style="text-align: center;"><span class="badge bg-green">Khả Dụng</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-yellow">Khóa</span></td>
                    @endif
                    
                     
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('ban.edit', ['ban' => $b->b_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    </td>
                    <td>
                      <form method="POST" action="{{route('ban.destroy', ['ban' => $b->b_ma])}}">
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



