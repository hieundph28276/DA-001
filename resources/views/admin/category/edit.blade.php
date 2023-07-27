@extends ('admin/templates.index')
@section ('content')
<div class="card-box">
    <div class="">
        <div>
            <h4 class="header-title">Basic Form</h4>
            <form action="{{ route('route_category_edit' , ['id'=>$category->id]) }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="userName">Tên sản phẩm<span class="text-danger">*</span></label>
                    <input type="name" name="name" value="{{$category->name}}" placeholder="Enter user name" class="form-control" id="">
                </div>
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