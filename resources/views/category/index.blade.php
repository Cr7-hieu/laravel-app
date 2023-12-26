@extends('home')
@section('main')
<div class="col-xs-12">
    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
        </div>
    @endif --}}
    <div class="box">
        <div class="box-header">
            <a href="{{route('category.create')}}" class="btn btn-success">+Thêm mới Menu</a>
        </div>
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Danh mục cha</th>
                        <th>Trạng thái</th>
                        <th>Tuỳ chọn</th>
                    </tr>
                    @forelse ($categories as $item)
                        <tr>
                            <td>{{$item->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->parent_id}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{!!$item->status ?'<span class="label label-success">Hiển thị</span>' : '<span class="label label-success">Ẩn</span>' !!}</td>
                            <td>
                            <a href="edit-menu.html" class="btn btn-success">Sửa</a>
                            <a href="{{route('category.destroy')}}" onclick="return confim('Bạn có chắc chắn muốn xoá ')" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    @empty
                        <span>Chưa có dữ liệu</span>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection