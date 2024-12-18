@extends('User::Front.master')

@section('content')
    <div class="form">
        <a class="account-logo" href="/">
            <img src="/img/weblogo.png" alt="">
        </a>

        <div class="form-content form-account">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    یک لینک تایید ایمیل جدید به ایمیلتان ارسال شد.
                </div>
            @endif

            قبل از ادامه لطفا ایمیلتان را چک کنید.
            اگر ایمیلی دریافت نکرده اید درخواست مجددا کد بدهید.
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit"
                        class="btn btn-link p-0 m-0 align-baseline">ارسال مجدد لینک </button>
            </form>
        </div>
        <div class="form-footer">
            <a href="/">بازگشت به صفحه اصلی</a>
        </div>
    </div>
@endsection
