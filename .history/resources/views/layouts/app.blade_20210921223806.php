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
@include('blocks.menu')
@include('blocks.jumbotron')

<div class="container-fluid table-bordered">
    <div class="row">
        <div class="col-3">@include('blocks.left')</div>
        <div class="col-7">
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb btn btn-outline-success bg-light">
                    <li class="breadcrumb-item"><a href="{{route('news')}}">Bosh sahifa</a></li>
                    <li class="breadcrumb-item"><a href="#">Fermer</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hisobotlar ro'yxati</li>
                </ol>
            </nav>
            <div class="text-center"> @yield('centertop') </div>
            @yield('content')
        </div>
        <div class="col-2">@include('blocks.right')</div>

    </div>
</div>
   @include('blocks.footer')
</body>
</html>
