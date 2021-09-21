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
<div class="container marque">
	<div class="row">
		<div class="col-12">
			<marquee title="Sayt loyixasi bo'yicha dinamik ma'lumotlar" behavior="direction" loop="3" scrollamount="4" scrolldelay="3" style="padding-left:1px; margin-left:1px;"><span style="font-size: 18px; font-style:bold; font-family: ' Times New Roman', Times, serif; color:#f51533;"><strong>Ayni paytda <a class="animat1" href="http://127.0.0.1/svod/word.php">Qishloq xo'jaligi</a> sayti loyihasi bazasida yangiliklar soni <a class="animatqw">
							</a> tani, fayllar soni <a class="animatqw">
							124</a> tani tashkil qilmoqda. Hozirgacha saytga tashrif buyurganlar soni <a class="animatqw">54
							</a> nafar.</strong></span></marquee>
		</div>
	</div>
</div>

<div class="container-fluid table-bordered">
    <div class="row">
        <div class="col-3">@include('blocks.left')</div>
        <div class="col-7">

            @include('blocks.breadcrumb')


            <div class="text-center"> @yield('centertop') </div>
            @yield('content')
        </div>
        <div class="col-2">@include('blocks.right')</div>

    </div>
</div>
   @include('blocks.footer')
</body>
</html>
