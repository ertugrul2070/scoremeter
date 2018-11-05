<div class="navbar">
    <div class="navbar-inner">
            <ul id="nav">
                    @if (Route::has('login'))
                            @auth
                            <li><a href="{{url ('/home')}}">Home</a></li>
                            <li><a href="{{url ('/total')}}">Totaal</a></li>
                            <li><a href="{{url ('/players')}}">Players</a></li>
                        @else
                            <li><a href="{{url ('/home')}}">Home</a></li>
                            <li><a href="{{url ('/total')}}">Totaal</a></li>
                            <li><a href="{{url ('/players')}}">Players</a></li>

                            @endauth
                        @endif

                    <div  class="userAccount">
                    @if (Route::has('login'))
                        @auth
                                <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Uitloggen
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></li>                            @else
                    <li ><a href="{{ route('login') }}">Login</a></li>
                            <div class="register">
                    <li><a href="{{ route('register') }}" class="register-button">Meld Aan</a></li>
                            </div>
                        @endauth
                    @endif
                    </div>
                </ul>
</div>
</div>