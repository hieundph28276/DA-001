@extends ('admin/templates.index')
@section ('content')
<div class="card-box">
    <div class="mb-3">
        <a href="{{ route('route_phone_add') }}" class="btn btn-primary ">Thêm Mới</a>
    </div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục </th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($phone as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        @foreach ($category as $ct)
                        @if ($ct->id == $item->category_id)
                        {{$ct->name}}
                        @endif
                        @endforeach
                    </td>
                    <td>{{$item->price}}.vnđ</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <img src="{{$item->image?''.Storage::url($item->image):''}}" style="width: 100px" alt="">
                    </td>
                    <td>
                        <a href="{{ route('route_phone_edit', ['id'=>$item->id]) }}">
                            <button class="btn btn-primary">Sửa</button>
                        </a>
                        <a href="{{ route('route_phone_delete', ['id'=>$item->id]) }}">
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