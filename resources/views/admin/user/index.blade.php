@extends ('admin/templates.index')
@section ('content')
<div class="card-box">
    <div class="mb-3">
        <a href="{{ route('route_user_add') }}" class="btn btn-primary ">Thêm Mới</a>
    </div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Tên user</th>
                    <th>Email</th>
                    <th>Chức vụ</th>
                    <!-- <th>Mật khẩu</th> -->
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email }}</td>
                    <td>{{$item->role == 1 ? 'Admin' : 'Người dùng'}}</td>
                    <td>
                        <a href="{{ route('route_user_edit', ['id'=>$item->id]) }}">
                            <button class="btn btn-primary">Sửa</button>
                        </a>
                        <a href="{{ route('route_user_delete', ['id'=>$item->id]) }}">
                            <button class="btn btn-danger">Xóa</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection