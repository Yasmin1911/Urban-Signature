<!doctype html>
<html lang="en">

<head>
  <title>US Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- Stylesheet -->
  <link href="{{URL::asset('assets/css/bootstrap.css')}}" rel="stylesheet"> 
  <style>
    body {
  margin-left: 50px;
}
    .nav-link{
      text-decoration: none;
    }

   .link-card{
    text-decoration: none;
    color: black;
    font-weight: bold;
   }

   .card-img-top{
    opacity: 75%;
   }
   

  </style>
</head>

<body>
<div class="sticky-top">
<nav class="navbar bg-dark" data-bs-theme="dark">
  <div class="container-fluid justify-content-center">
    <span class="navbar-brand mb-0 h1">Urban Signature</span>
  </div>
  <br>
  <br>
  <div class="gap-2 mx-auto">
  <button type="button" class="btn btn-outline-light">Accesorios</button>

  <button type="button" class="btn btn-outline-light">Ropa</button>
  
  <button type="button" class="btn btn-outline-light">Cuidado Personal</button>
</div>


<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Sing Up</a>
  </li>
  </ul>
</nav>
</div>

  <br>
  <br>
  <br>
<h5>Lo más vendido</h5>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="{{ asset('assets/img/logo.png') }}" class="card-img-top" alt="..." >
      <div class="card-body">
      <a href="" class="link-card">Producto</a>
      <h5 class="text-end">Q100.00</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{ asset('assets/img/logo.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="" class="link-card">Producto</a>
        <h5 class="text-end">Q100.00</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{ asset('assets/img/logo.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="" class="link-card">Producto</a>
      <h5 class="text-end">Q100.00</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{ asset('assets/img/logo.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="" class="link-card">Producto</a>
      <h5 class="text-end">Q100.00</h5>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>

<h4>Ofertas</h4>
<br>
<br>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/img/homeslide.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ofertas en Accesorios</h5>
        <p>Nada como los accesorios de temporada</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/homeslide.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ofertas en Ropa</h5>
        <p>Disfruta de las ofertas de verano</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/homeslide.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ofertas en Cuidado Personal</h5>
        <p>Nosotros cuidamos de tu piel con estas ofertas de cuidado facial</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
  <div class="container">
    <div class="grid">
        <p class="copyright">&copy; Copyright 2018 Katherine Kato</p>
    
    </div>
  </div>
</footer>

  <!-- Bootstrap JavaScript Libraries -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="{{URL::asset('assets/js/bootstrap.js')}}" ></script>

<script src="blog/public/assets/js/home.js"></script>
</body>

</html>