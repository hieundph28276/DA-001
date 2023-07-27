@extends ('auth/templates.layout')
@section ('content')
<div class="login-content">
    <div class="login-title">
        <h4>Register</h4>
        <p>Please sign up using account detail bellow.</p>
    </div>
    <div class="login-form">
        <form action="{{ route('login_add') }}" method="POST">
            @csrf
            <input name="name" placeholder="User name" type="name">
            <input name="password" placeholder="Password" type="password">
            <input name="email" placeholder="Email" type="email">
            <div class="button-remember">
                <div class="checkbox-remember">
                    <input id="checkbox" type="checkbox">
                    <label>Remember me</label>
                    <a href="#">Forgot your Password?</a>
                </div>
                <button class="login-btn" type="submit">Login</button>
            </div>
            <div class="new-account">
                <p>new here ? <a href="register.html">Create an new account .</a></p>
            </div>
        </form>
    </div>
</div>
@endsection