<!doctype html>
<html lang="en">
  <head>
  <div class="head">
      @yield('head')
    </div>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

  </head>
  <body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>


      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#home" class="nav-link px-2 link-light">Home</a></li>
        <li><a href="#jurusan" class="nav-link px-2 link-light">Jurusan</a></li>
        <li><a href="#tentang" class="nav-link px-2 link-light">Tentang</a></li>
        <li><a href="#media" class="nav-link px-2 link-light">Media</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="/login" class="btn btn-outline-warning me-2">Login</a>
      </div>
    </header>
  </div>
<div class="container">
    @yield('content')
  </div>

  </body>
</html>