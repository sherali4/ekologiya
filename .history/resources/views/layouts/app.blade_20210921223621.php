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


<div class="custom"  >
	<p></p>
<div class="border-t-2 border-cyan link-grid-wrapper bg-white homepage-wide"><div class="container px-6 py-2 mx-auto"><h3 class="page-header">Rasmiy Statistika</h3><ul class="nav menu-with-icons mod-list">
<li class="item-214"><a href="/uz/rasmiy-statistika/rasmiy-statistika-kalendari" class="icon"><i class="fal fa-calendar-alt"></i><span>Rasmiy statistika taqvimi</span></a></li><li class="item-215"><a href="/uz/rasmiy-statistika/metadata-2" class="icon"><i class="fal fa-file-alt"></i><span>Metama'lumotlar</span></a></li><li class="item-216"><a href="/uz/rasmiy-statistika/macro-indicators-2" class="icon"><i class="fal fa-chart-line"></i><span>Makroko‘rsatkichlar</span></a></li><li class="item-217"><a href="/uz/rasmiy-statistika/national-accounts-2" class="icon"><i class="fal fa-atlas"></i><span>Milliy hisoblar</span></a></li><li class="item-218"><a href="/uz/rasmiy-statistika/prices-and-indexes-2" class="icon"><i class="fal fa-tag"></i><span>Narx va indekslar</span></a></li><li class="item-219"><a href="/uz/rasmiy-statistika/investments" class="icon"><i class="fal fa-coins"></i><span>Investitsiyalar</span></a></li><li class="item-220"><a href="/uz/rasmiy-statistika/construction-2" class="icon"><i class="fal fa-user-hard-hat"></i><span>Qurilish</span></a></li><li class="item-221"><a href="/uz/rasmiy-statistika/merchandise-trade-2" class="icon"><i class="fal fa-truck-container"></i><span>Tashqi iqtisodiy faoliyat</span></a></li><li class="item-222"><a href="/uz/rasmiy-statistika/internal-trade-2" class="icon"><i class="fal fa-shopping-cart"></i><span>Ichki savdo</span></a></li><li class="item-223"><a href="/uz/rasmiy-statistika/industry-2" class="icon"><i class="fal fa-industry-alt"></i><span>Sanoat</span></a></li><li class="item-224"><a href="/uz/rasmiy-statistika/agriculture-2" class="icon"><i class="fal fa-tractor"></i><span>Qishloq xo‘jaligi</span></a></li><li class="item-225"><a href="/uz/rasmiy-statistika/ecology-2" class="icon"><i class="fal fa-leaf"></i><span>Ekologiya</span></a></li><li class="item-226"><a href="/uz/rasmiy-statistika/services-2" class="icon"><i class="fal fa-tools"></i><span>Xizmatlar</span></a></li><li class="item-227"><a href="/uz/rasmiy-statistika/demography-2" class="icon"><i class="fal fa-users"></i><span>Demografiya</span></a></li><li class="item-228"><a href="/uz/rasmiy-statistika/labor-market-2" class="icon"><i class="fal fa-fist-raised"></i><span>Mehnat bozori</span></a></li><li class="item-229"><a href="/uz/rasmiy-statistika/living-standards-2" class="icon"><i class="fal fa-home-alt"></i><span>Aholi turmush darajasi</span></a></li><li class="item-230"><a href="/uz/rasmiy-statistika/social-protection-2" class="icon"><i class="fal fa-hand-receiving"></i><span>Ijtimoiy soha</span></a></li><li class="item-232"><a href="/uz/rasmiy-statistika/small-business-and-entrepreneurship-2" class="icon"><i class="fal fa-briefcase"></i><span>Kichik biznes va tadbirkorlik</span></a></li><li class="item-233"><a href="/uz/rasmiy-statistika/usreo-2" class="icon"><i class="fal fa-building"></i><span>Korxona va tashkilotlar demografiyasi</span></a></li><li class="item-234"><a href="/uz/rasmiy-statistika/crime-and-justice-2" class="icon"><i class="fal fa-balance-scale"></i><span>Huquqbuzarlik</span></a></li><li class="item-235"><a href="/uz/rasmiy-statistika/environment-2" class="icon"><i class="fal fa-trees"></i><span>Atrof-muhit</span></a></li><li class="item-236"><a href="/uz/rasmiy-statistika/other-macroeconomic-and-financial-statistics-2" class="icon"><i class="fal fa-money-bill-wave"></i><span>Boshqa makroiqtisodiy va moliyaviy statistika</span></a></li><li class="item-237"><a href="/uz/rasmiy-statistika/e-gdds-imf-2" class="icon"><i class="fal fa-globe-americas"></i><span>k-MTUT (XVJ)</span></a></li><li class="item-239"><a href="/uz/xalqaro-statistika" class="icon"><i class="fal fa-globe"></i><span>Xalqaro statistika</span></a></li><li class="item-241"><a href="/uz/rasmiy-statistika/restricted-information-2" class="icon"><i class="fal fa-lock-alt"></i><span>Tarqatilishi cheklangan ma`lumotlar</span></a></li></ul>
</div></div>
<p></p></div>
<div class='large-card-wrapper has-path mod-'><div class='container mx-auto px-4 md:px-6'><div class='large-card'><div class='large-card-inner'><div id="uzchart" v-cloak class="custom"  >
	<p style="display:none;" id="uzchart_base">https://api.stat.uz/api/v1.0/map/</p>
</div>


















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
