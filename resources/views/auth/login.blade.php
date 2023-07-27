@extends ('auth/templates.layout')
@section ('content')
<div class="login-content">
    <div class="login-title">
        <h4>login</h4>
        <p>Please login using account detail bellow.</p>
    </div>
    <div class="login-form">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input name="email" placeholder="Email@gmail.com" type="email">
            <input name="password" placeholder="Password" type="password">
            <div class="button-remember">
                <div class="checkbox-remember">
                    <input id="checkbox" type="checkbox">
                    <label>Remember me</label>
                    <a href="#">Forgot your Password?</a>
                </div>
                <button class="login-btn" type="submit">Login</button>
            </div>
            <div class="new-account">
                <p>new here ? <a href="{{ route('login_add') }}">Create an new account .</a></p>
            </div>
        </form>
    </div>
</div>
@endsection