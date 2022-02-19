<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">Главная</a>
          </li>
        </ul>
        @if (Auth::user())
        <ul class="navbar-nav my-2 my-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('profile.index')}}">{{Auth::user()->name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Выйти</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        @else
        <ul class="navbar-nav my-2 my-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Войти</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Зарегистрироваться</a>
            </li>
        </ul>
        @endif
      </div>
    </div>
  </nav>