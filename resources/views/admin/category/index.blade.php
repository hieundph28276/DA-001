@extends ('admin/templates.index')
@section ('content')
<div class="card-box">
    <div class="mb-3">
        <a href="{{ route('route_category_add') }}" class="btn btn-primary ">Thêm Mới</a>
    </div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Tên danh mục</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <a href="{{ route('route_category_edit', ['id'=>$item->id]) }}">
                            <button class="btn btn-primary">Sửa</button>
                        </a>
                        <a href="{{ route('route_category_delete', ['id'=>$item->id]) }}">
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