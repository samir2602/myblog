<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/hello">Hello</a>
        <a href="/about">About</a>
        <a href="/posts">Post</a>
    </nav>

    <div class="content">
       @yield('content')
    </div>

    <footer>
        <p>© 2025 My Blog</p>
    </footer>
</body>
</html>