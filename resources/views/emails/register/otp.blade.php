<x-mail::message>
# Otp

Your verification code is {{ $code }}.

<x-mail::button :url="''">
Button
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
