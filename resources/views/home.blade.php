<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth
        <p>Congrats u are login</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    @else
        <div style="border: 3px solid black">
            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name"><br><br>
                <input type="email" name="email" placeholder="Email"><br><br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <button>Register</button>
            </form>
        </div>
        <div style="border: 3px solid black">
            <h2>Login</h2>
            <form action="/login" method="POST">
                @csrf
                <input type="text" name="loginname" placeholder="Name"><br><br>
                <input type="password" name="loginpassword" placeholder="Password"><br><br>
                <button>Login</button>
            </form>
        </div>
    @endauth

</body>
</html>