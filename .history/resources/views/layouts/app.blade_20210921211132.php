<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>@yield('title-blog')</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar w/ text</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
          </ul>
          <span class="navbar-text">
            Navbar text with an inline element
          </span>
        </div>
      </nav>


      <div class="jumbotron jumbotron-fluid m-0 p-3">
        <div class="container">
          <h1 class="display-4">Qishloq o'rmon va baliq xo'jaligi statistikasi </h1>
          <p class="lead">Ushbu loyiha Qishloq, o'rmon va baliqchilik xo'jaligi statistikasiga oid ma'lumotlar, ko'rsatkichlar, dinamik ma'lumotlar, yalpi mahsulot, diskret ma'lumotlar va press relizlar bilan joylashtirilishi belgilangan</p>
        </div>
      </div>
<br>
<hr>

    <button type="submit" class="btn btn-success">sfs fsd</button>
@yield('content')
</body>
</html>
