<div class="list-group align-left">
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>

</div>

<div class="list-group">
    <!--tips: add .list-group-flush to the .list-group to remove some borders and rounded corners-->
    <button type="button" class="list-group-item list-group-item-action text-center active"><h4>Bosh Menyu</h4></button>
    <button type="button" class="list-group-item list-group-item-action">Yalpi mahsulot</button>
    <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
       Fermer hisoboti
        <span class="badge badge-primary badge-pill">15155</span>
    </button>
    <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
        Dehqon hisoboti
         <span class="badge badge-primary badge-pill">732</span>
     </button>
     <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
        Paxta xisoboti
         <span class="badge badge-primary badge-pill">17</span>
     </button>
     <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
        Yirik korxonalar hisoboti
         <span class="badge badge-primary badge-pill">56</span>
     </button>
     <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
        Kichik korxonalar hisoboti
         <span class="badge badge-primary badge-pill">6410  </span>
     </button>
    <button type="button" class="list-group-item list-group-item-action disabled">Bo'lim haqida</button>
</div>
