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

@if (Request::is(['head','about']))

   @include('blocks.jumbotron')
@endif


@include('blocks.marque')

<div class="container container-fluid">
    <div class="row">
        <div class="col-3">@yield('left-blog')  @include('blocks.left') </div>
        
        
        @if (Request::is(['press','vvp','report','about','ruyxat','hujjat']))
        <div class="col-9">
            @include('blocks.breadcrumb')
            <div class="text-center"> @yield('centertop') </div>
            @yield('content')
        </div>
         
    </div>
         
   @else
    <div class="col-6">
            @include('blocks.breadcrumb')
            <div class="text-center"> @yield('centertop') </div>
            @yield('content')
        </div>
         <div class="col-3 mt-4"> @yield('right-blog') {{-- @include('blocks.right') --}}</div>

    </div>
       
  
@endif
        
        
       
</div>
   @include('blocks.footer')
</body>
</html>
