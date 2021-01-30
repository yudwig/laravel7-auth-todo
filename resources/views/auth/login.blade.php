@extends('app')

@section('content')
    <h3>ログイン</h3>
{{--    <div class="container" style="width: 300px;">--}}
    <div class="container" style="width: 250px;">
        <form name="loginForm" method="post" action="{{ route('auth.login') }}">
            @csrf
            <div class="mb-3">
                <input class="form-control" type="email" name="email" placeholder="Email Address" value="{{old('email')}}">
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
{{--            <input type="submit" value="send" style="display: none;">--}}
        </form>
    </div>
    <div class="links">
        <a href="javascript:void(0);" onclick="document.loginForm.submit();">Login</a>
    </div>
@endsection

