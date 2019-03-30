@section('css')
    <link rel="stylesheet" href="{{ mix('css/login.css') }}">
@endsection

@extends('layouts.app')

@section('content')
<div class="login-page">
    <div class="form">

        <form method="post" class="register-form">
            @csrf
            <input type="text" name="mail" placeholder="E-mail"/>
            <button type="submit" name="reset">Reset</button>
            <p class="message"><a href="#">Cancel</a></p>
        </form>
        <form method="post" class="login-form">
            @csrf
            <input type="text" name="mail" placeholder="E-mail"/>
            <input type="password" name="password" placeholder="Password"/>
            <button type="submit" name="login">login</button>
            <p class="message"><a href="#">Forgot password</a></p>
        </form>

    </div>
</div>
@endsection

@section('script')
<script>
    $('.message a').click(function(){
       $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>
@endsection
