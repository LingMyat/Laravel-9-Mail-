<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('auth@login') }}" method="post">
        @csrf
        <div>
            email
            <input type="email" name="email" id="">
            password
            <input type="text" name="password" id="">
        </div>
        <input type="submit" value="Login">
    </form>
    <a href="{{ route('page@sentOtp') }}">Register Here</a>
</body>
</html>
