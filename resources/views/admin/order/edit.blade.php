@extends ('admin/templates.index')
@section ('content')
<div class="card-box">
    <div class="">
        <div>
            <h4 class="header-title">Basic Form</h4>
            <form action="{{ route('route_order_edit', ['id'=>$orders->id]) }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="userName">Tên tài khoản<span class="text-danger">*</span></label>
                    <input type="name" name="name" value="{{$orders->name}}" placeholder="Enter user name" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Email<span class="text-danger"></span></label>
                    <input id="" type="" name="" value="{{$orders->email}}" placeholder="" class="form-control">
                </div>
                <label for="">Trạng thái đơn hàng<span class="text-danger"></span></label>
                <select name="status" class="form-control">
                    <option value="0"{{$orders->status == 0 ? 'selected' : ''}}> Đang chờ xử lý</option>
                    <option value="1"{{$orders->status == 1 ? 'selected' : ''}}> Đang đóng gói</option>
                    <option value="2"{{$orders->status == 2 ? 'selected' : ''}}> Đang vận chuyển</option>
                    <option value="3"{{$orders->status == 3 ? 'selected' : 'Giao hàng không thành công'}}> Đang giao hàng</option>

                </select>

                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                        Submit
                    </button>
                    <button type="reset" class="btn btn-secondary waves-effect">
                        Cancel
                    </button>
                </div>

            </form>
        </div>

    </div>
    <!-- end row -->

</div>
@endsection