<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="{{ url('Css/style.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/1bd4cddc08.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Start Sign Up Form -->
    <div class="signup-box">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="">Name</label>
            <input type="text" placeholder="first Name" name="name">

            <label for="">Email</label>
            <input type="email" placeholder="Email" name="email" autocomplete="off" required>
            <label for="">Password</label>
            <input type="password" placeholder="Password" name="password" autocomplete="new-password" required>
            {{-- <label for="">Confirm Password</label>
            <input type="password" placeholder="Password" name="cpassword"> --}}
            <!-- <input type="button" value="submit" name="signup"> -->
            <button name="register">Sign Up</button>
            <p>By clicking the Sign Up button,you agree to our <br>
                <a href="#">Terms and Condition</a>and <a href="#">Policy privacy</a>
            </p>

        </form>
        <p class="para-2">
            Already have an account? <a href="{{ route('login') }}">Login here</a>
        </p>
    </div>


</body>

</html>
