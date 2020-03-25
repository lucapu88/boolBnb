{{-- NAVBAR TRASPARENTE IN HOME --}}
<nav class="home-navbar navbar fixed-top navbar-expand-lg navbar-light">
  <a href="{{ url('/') }}"><img class="img-fluid logo" src="https://i2.wp.com/supportdriven.com/wp-content/uploads/2018/05/Belo.png?fit=301%2C323&ssl=1&w=640" alt="logo-bianco"></a>
  <a href="{{ url('/') }}"><img class="img-fluid logoBlue" src="https://imageog.flaticon.com/icons/png/512/1724/1724634.png?size=1200x630f&pad=10,10,10,10&ext=png&bg=FFFFFFFF" alt="logo-blue"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"></ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active ita">
        <a class="nav-link" href="#">vuoto<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <!-- Modal language-->
        <a class="nav-link" href="#" id="myBtn-lang"> Italiano (IT) <span class="sr-only">(current)</span></a>
        <div id="myModal-lang" class="modal">
          <div class="modal-content col-4 text-center text-primary">
            <span class="close-lang text-right">&times;</span>
            <h2>Scegli la lingua</h2>
            <p class="language"><img class="flag" src="http://icons.iconarchive.com/icons/iconscity/flags/256/italy-icon.png" alt="it-flag"> Italiano (IT)</p>
            <p class="language"><img class="flag" src="https://icons.iconarchive.com/icons/iconscity/flags/256/uk-icon.png" alt="uk-flag"> English (EN)</p>
          </div>
        </div>
      </li>
      <li class="nav-item">
       <!-- Modal payment -->
       <a class="nav-link" href="#" id="myBtn">€ Euro</a>
       <div id="myModal" class="modal">
         <div class="modal-content col-4 text-center text-primary">
           <span class="close text-right">&times;</span>
           <h2>Scegli una valuta</h2>
           <p class="valuta">€ Euro</p>
           <p class="valuta">₣ Franco</p>
           <p class="valuta">$ Dollaro</p>
           <p class="valuta">£ Sterlina</p>
           <p class="valuta">¥ Yen</p>
         </div>
       </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.apartments.create') }}">Offri una casa</a>
      </li>
      <!-- Authentication Links -->
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
      @else
      <li class="nav-item"><a class="nav-link" href="{{ route('admin.apartments.index') }}">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('admin.leads.index') }}">Messaggi</a></li>
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->first_name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          {{-- tasto Dashboard --}}
          <a class="dropdown-item" href="{{ route('admin.apartments.index') }}">
              {{ __('Dashboard') }}
          </a>
          {{-- tasto agg app --}}
          <a class="dropdown-item" href="{{ route('admin.apartments.create') }}">
              {{ __('Aggiungi appartamento') }}
          </a>
          {{-- tasto messaggi --}}
          <a class="dropdown-item" href="{{route('admin.leads.index')}}">
              {{ __('Messaggi') }}
          </a>
          <hr>
          {{-- tasto logout --}}
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
  </div>
</nav>
