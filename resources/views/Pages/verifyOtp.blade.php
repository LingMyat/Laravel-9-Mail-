<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>otp</title>
</head>
<body>
    <form action="{{ route('otp@verifyOtp') }}" method="post">
        @csrf
        <input type="hidden" name="email" value='{{ request('email') }}'>
        <input type="number" name="code" id="">
        <input type="submit" value="Verify">
    </form>
</body>
</html>
