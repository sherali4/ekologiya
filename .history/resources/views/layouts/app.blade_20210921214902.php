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
        <div class="col-2">@include('blocks.left')</div>
        <div class="col-8">

            <div class="text-center"> @yield('centertop') </div>
            @yield('content')
        </div>
        <div class="col-2">@include('blocks.right')</div>

    </div>
</div>
    <button type="submit" class="btn btn-success">sfs fsd</button>

@include('blocks.footer')
</body>
</html>
