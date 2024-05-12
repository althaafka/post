<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/auth.css" rel="stylesheet">
</head>
<body>
    <div class="background">
    </div>
    <form action="/login" method="POST">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password">

        <button>Log In</button>
        <div class="hyperlink">New user? <a href="/register">Register</a></div>
    </form>
</body>
</html>