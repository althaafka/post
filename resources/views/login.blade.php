<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link href="css/auth.css" rel="stylesheet">
    <link rel="icon" href="/images/logo.svg" type="image/x-icon">
</head>
<body>
    <div class="background"></div>
    <form action="/login" method="POST">
        @csrf
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" name="loginname" placeholder="Username" id="username">

        <label for="password">Password</label>
        <input type="password" name="loginpassword" placeholder="Password" id="password">

        <button>Log In</button>
        <div class="hyperlink">New user? <a href="/register">Register</a></div>
    </form>
</body>
</html>