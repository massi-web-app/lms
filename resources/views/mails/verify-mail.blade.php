<x-mail::message>
# کد فعالسازی در وب آموز

این ایمیل به دلیل ثبت نام شما در سایت وب آموز ارسال شده است.

<x-mail::panel :url="''">
کد فعال سازی : {{$code}}
</x-mail::panel>

باتشکر,<br>
{{ config('app.name') }}
</x-mail::message>
