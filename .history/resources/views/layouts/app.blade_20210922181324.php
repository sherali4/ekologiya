<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
        <title>@yield('title-blog')</title>
</head>
<body>
@include('blocks.menu')

@if (Request::is('head'))

   @include('blocks.jumbotron')
@endif


@include('blocks.marque')

<div class="container-fluid table-bordered">
    <div class="row">
        <div class="col-3">@include('blocks.left')</div>
        <div class="col-9">



@if (Request::is('main'))
@include('blocks.jumbotron')
@endif

            @include('blocks.breadcrumb')


            <div class="text-center"> @yield('centertop') </div>
            @yield('content')
        </div>
        {{-- <div class="col-2">@include('blocks.right')</div>
 --}}
    </div>
</div>
   @include('blocks.footer')
</body>
</html>
