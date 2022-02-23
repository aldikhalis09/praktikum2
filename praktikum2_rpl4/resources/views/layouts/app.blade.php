<!DOCTYPE html>
<html lang="en">
<head>

<title>Templating Blade Laravel</title>
</head>
<body>
  <header>
      <h2>WELCOME TO WEBSITE RPL</h2>
      <nav>
          <a href="/rpl4">HOME</a>

          <a href="/rpl4/tentang">TENTANG</a>

          <a href="/rpl4/kontak">KONTAK</a>
        </nav>
  </header>
  <hr/>
  <br/>
  <br/>

  <h3>@yield('judul_halaman')</h3>

  @yield('konten')

  <hr/>
  <br/>
  <br/>
  <footer>
      <p>&copy; <a href="#">www.mywebsite.com</a>2022</p>
  </footer>
</body>
</html>
