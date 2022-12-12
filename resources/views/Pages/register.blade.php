<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('auth@register') }}" method="post">
        @csrf
        <input type="email" name="email" value='{{ $email }}' id="" readonly>

        <input type="text" name="password" id="">

        <input type="text" name="confirm_password" id="">

        <input type="submit" value="Register">
    </form>
</body>
</html>
