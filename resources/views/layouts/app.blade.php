<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Booklibs')</title>

  <!-- Google Font (opsional) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link 
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" 
    rel="stylesheet"
  >

  <!-- File CSS kustom -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/book_read.css') }}">
</head>
<body>
  <!-- NAVBAR -->
  <header class="navbar">
    <div class="nav-container">
    <div class="logo">
      <!-- Tambahkan img di sini -->
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-img">
      Booklibs
    </div>
      <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/book/create">Add Book</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- HERO SECTION -->
  <div class="hero">
    <h1>@yield('heroTitle', 'Temukan Petualangan di Setiap Halaman')</h1>
    <p>@yield('heroSubtitle', 'Bersama Booklibs, setiap buku bisa membuka cakrawala baru dan menambah inspirasi tanpa batas.')</p>
  </div>

  <!-- MAIN CONTENT -->
  <div class="container">
    @yield('content')
  </div>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 - Booklibs</p>
  </footer>
</body>
</html>