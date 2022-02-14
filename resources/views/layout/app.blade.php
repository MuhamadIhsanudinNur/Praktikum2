<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Templating Blade laravel</title>
</head>
<body>
    <marquee>
    <header>
        <h2>WELCOME TO WEBSITE RPL 4</h2>
        <nav>
            <a href="/rpl">HOME</a>
            |
            <a href="/rpl/tentang">TENTANG</a>
            |
            <a href="/rpl/kontak">KONTAK</a>
        </nav>
    </header>
    </marquee>
    <hr/>
    <br/>
    <br/>

    <marquee><h3> @yield('judul_halaman') </h3></marquee>
    <!--bagian konten blog-->
    @yield('konten')

    <br/>
    <br/>
    <hr/>
    <footer>
        <marquee><p>&copy; <a href="#">www.hotelhebat.com</a> 2022</p></marquee>
    </footer>
</body>
</html>
