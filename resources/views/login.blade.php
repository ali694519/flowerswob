<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ url('Css/style.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/1bd4cddc08.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Start Login Form -->
    <div class="login-box">
        <h1>Login</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label>Email</label>
            <input type="email" placeholder="email" name="email" autocomplete="off">
            <label>Password</label>
            <input type="password" placeholder="password" name="password" autocomplete="new-password">
            <button name="login">Login </button>

        </form>
        <p class="para-2">
            Not have an account? <a href="{{ route('register') }}">Sign Up Here</a>
        </p>
    </div>


</body>

</html>
