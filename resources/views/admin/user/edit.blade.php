@extends ('admin/templates.index')
@section ('content')
<div class="card-box">
    <div class="">
        <div>
            <h4 class="header-title">Basic Form</h4>
            <form action="{{ route('route_user_edit', ['id'=>$user->id]) }}" class="parsley-examples" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="userName">Tên người dùng<span class="text-danger">*</span></label>
                    <input type="" name="name" value="{{$user->name}}" placeholder="Enter user name" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="" class="form-control" name="email" value="{{$user->email}}" placeholder="Enter email">
                    <small class="text-muted">We'll never share your email with anyone
                        else.
                    </small>
                </div>

                <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="" name="password" value="password" class="form-control" placeholder="Password">
                </div> -->

                <div class="form-group">
                    <label for="exampleSelect1">Chức vụ</label>
                    <select class="form-control" name="role">
                        <option value="1" {{$user->role == 1 ? 'selected' : ''}}>Admin</option>
                        <option value="0" {{$user->role == 0 ? 'selected' : ''}}>Người dùng</option>
                    </select>
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