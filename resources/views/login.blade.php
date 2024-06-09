@extends('layouts.web')
@section('title', 'Welcome')
@section('content')
<br><br><br>
<div class="row">
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6">
        <div class="contact-form">
            <form method="post" action="/login">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your email" name="email" />
                </div>

                <div class="form-group position-relative">
                    <input type="password" class="form-control" placeholder="password" name="password" id="password" />
                    <span class="toggle-password" onclick="togglePasswordVisibility()" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                        <i class="fa fa-eye" id="toggle-icon"></i>
                    </span>
                </div>

                <div><button class="btn" type="submit">Login</button></div>
            </form>
        </div>
    </div>
    <div class="col-lg-3 col-md-3"></div>
</div>
<br><br><br>
@endsection

@section('scripts')
<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById('password');
        var toggleIcon = document.getElementById('toggle-icon');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }
</script>
@endsection
