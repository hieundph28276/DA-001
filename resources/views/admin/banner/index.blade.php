@extends ('admin/templates.index')
@section ('content')
<div class="card-box">
    <div class="mb-3">
        <a href="{{ route('route_banner_add') }}" class="btn btn-primary ">Thêm Mới</a>
    </div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Tên banner</th>
                    <th>Ảnh</th>
                    <th>Mô tả</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banner as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <img src="{{$item->image?''.Storage::url($item->image):''}}" style="width: 100px" alt="">
                    </td>
                    <td>{{$item->description }}</td>
                    <td>
                        <a href="{{ route('route_banner_edit', ['id'=>$item->id]) }}">
                            <button class="btn btn-primary">Sửa</button>
                        </a>
                        <a href="{{ route('route_banner_delete', ['id'=>$item->id]) }}">
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