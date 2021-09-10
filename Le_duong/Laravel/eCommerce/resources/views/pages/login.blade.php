<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luxury Watches</title>

    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<section class="login-form-wrap">
    <h1>Admin</h1>
    <form class="login-form" action="POST" action="#">
        <label>
            <input type="text" name="username" required placeholder="Username">
        </label>
        <label>
            <input type="password" name="password" required placeholder="Password">
        </label>
        <input type="submit" value="Login">
    </form>
    <h5><a href="#">Forgot password</a></h5>
</section>
</body>
</html>
