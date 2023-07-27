<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from nahartheme.com/tf/jerin-preview/jerin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 13:21:09 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jerin - Minimal eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('css-clien/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css-clien/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css-clien/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
        @include('admin/templates.errors')
            <div class="col-md-6 col-md-offset-3 login-area ptb-130">
                @yield('content')
            </div>
        </div>
</body>


<!-- Mirrored from nahartheme.com/tf/jerin-preview/jerin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 13:21:09 GMT -->

</html>