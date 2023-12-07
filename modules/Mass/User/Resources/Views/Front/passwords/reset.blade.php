@extends('User::Front.master')
@section('content')
    <form method="post" action="{{route('password.update')}}" class="form">
        <a class="account-logo" href="/">
            <img src="/img/weblogo.png" alt="">
        </a>
        <div class="form-content form-account">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input id="email" type="email" class="txt txt-l @error('email') is-invalid @enderror"
                   placeholder="ایمیل"
                   name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password" class="txt txt-l @error('password') is-invalid @enderror"
                   name="password" required autocomplete="new-password"   placeholder="رمز عبور جدید *">

            <input type="password" class="txt txt-l @error('password_confirmation') is-invalid @enderror"
                   name="password_confirmation" required  placeholder=" تکرار رمز عبور جدید *">
            @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span class="rules">رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و کاراکترهای غیر الفبا مانند !@#$%^&*() باشد.</span>
            <br>
            <button class="btn continue-btn">تغییر رمز عبور</button>
        </div>

        <div class="form-footer">
            <a href="{{route('login')}}">صفحه ورود</a>
        </div>

    </form>
@endsection
