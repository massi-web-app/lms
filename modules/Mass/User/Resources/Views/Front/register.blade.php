@extends('User::Front.master')


@section('content')
    <form action="{{route('register')}}" class="form" method="post">
        @csrf
        <a class="account-logo" href="/">
            <img src="/img/weblogo.png" alt="">
        </a>
        <div class="form-content form-account">
                <input type="text" class="txt  @error('name') is-invalid @enderror" name="name"
                       value="{{ old('name')}}" required autocomplete="name" autofocus
                       placeholder="نام و نام خانوادگی">
               @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="text" class="txt txt-l @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email')}}" required autocomplete="email" autofocus placeholder="ایمیل">
               @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="text" class="txt txt-l @error('mobile') is-invalid @enderror" name="mobile"
                       value="{{ old('mobile')}}" required autocomplete="mobile" autofocus placeholder="شماره موبایل">
                @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
                @enderror

                <input type="password" class="txt txt-l @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password"   placeholder="رمز عبور">


                <input type="password" class="txt txt-l @error('password_confirmation') is-invalid @enderror"
                       name="password_confirmation" required  placeholder="تکرار رمز عبور">
                @error('password')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="rules">رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و کاراکترهای غیر الفبا مانند !@#$%^&*() باشد.</span>
                <br>
                <button class="btn continue-btn">ثبت نام و ادامه</button>
        </div>
        <div class="form-footer">
            <a href="{{route('login')}}">صفحه ورود</a>
        </div>
    </form>
@endsection
