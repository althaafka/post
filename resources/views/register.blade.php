<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="icon" href="/logo.svg" type="image/x-icon">
    <link href="css/auth.css" rel="stylesheet">
</head>
<body>
    <div class="background"></div>
    <form action="/register" method="POST">
        @csrf
        <h3>Register</h3>

        <label for="username">Username</label>
        <input type="text" name="name" placeholder="Username">

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password">

        <button>Register</button>
        <div class="hyperlink">New user? <a href="/login">Login</a></div>
    </form>
</body>
</html>