<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/home.css" rel="stylesheet">
    <link rel="icon" href="/images/logo.svg" type="image/x-icon">
    <title>Post</title>
</head>
<body>
    <nav id="navbar">
      <ul class="navbar-items flexbox-col">
        <li class="navbar-logo flexbox-left">
          <a class="navbar-item-inner flexbox">
            <img src="/images/logo.svg" alt="logo">
          </a>
        </li>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left">
            <div class="navbar-item-inner-icon-wrapper flexbox">
                <img src="/navbar/home.svg" alt="logo">
            </div>
            <span class="link-text">Home</span>
          </a>
        </li>
        <li class="navbar-item flexbox-left">
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="navbar-item-inner flexbox-left" style="background: none; border: none; cursor: pointer;">
            <div class="navbar-item-inner-icon-wrapper flexbox">
                <img src="/images/navbar/logout.svg" alt="logout">
            </div>
            <span class="link-text">Logout</span>
        </button>
          </form>
        </li>
      </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
