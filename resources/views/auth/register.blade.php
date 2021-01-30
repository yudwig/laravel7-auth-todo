@extends('app')

@section('content')
    <h3>登録</h3>
    <div style="width: 250px;">
        <form name="registerForm" method="post" action="{{ route('auth.register') }}">
            @csrf
            <div class="mb-3">
                <input class="form-control" type="email" name="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" name="password_confirmation" placeholder="Password Confirmation">
            </div>
        </form>
    </div>
    <div class="links">
        <a href="javascript:void(0);" onclick="document.registerForm.submit();">登録</a>
    </div>
@endsection

