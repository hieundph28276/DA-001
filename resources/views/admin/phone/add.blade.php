@extends ('admin/templates.index')
@section ('content')
<div class="card-box">
    <div class="">
        <div>
            <h4 class="header-title">Basic Form</h4>
            <form action="{{ route('route_phone_add') }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="userName">Tên sản phẩm<span class="text-danger">*</span></label>
                    <input type="name" name="name" placeholder="Enter user name" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for="disabledSelect">Danh mục</label>
                    <select name="category_id" class="form-control">
                        @foreach($category as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm<span class="text-danger">*</span></label>
                    <input id="" type="price" name="price" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm<span class="text-danger">*</span></label>
                    <input type="description" name="description" placeholder="description" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-sm-4 control-label">Ảnh sản phẩm</label>
                    <div class="col-md-9 col-sm-8">
                        <div class="row">
                            <div class="col-xs-6">
                                <img id="mat_truoc_preview" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                                <input type="file" name="image" accept="image/*" class="form-control-file @error('image') is-invalid @enderror" id="cmt_truoc">
                            </div>
                        </div>
                    </div>
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
@section('script')
<script>
    $(function() {
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    $(selector).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#cmt_truoc").change(function() {
            readURL(this, '#mat_truoc_preview');
        });

    });
</script>
@endsection