<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>App Name - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fastbootstrap@1.1.2/dist/css/fastbootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fastbootstrap@1.1.2/dist/js/fastbootstrap.min.js">

</head>

<body class="m-4">
    <header>
        @yield('header')
    </header>
    <nav>
        @yield('action')
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>
</body>

</html>