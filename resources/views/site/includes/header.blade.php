<!-- start navbar -->
<div class="nav">
    <div class="container">
        <div class="con-nav">
            <div class="menu"><i class="fas fa-bars"></i></div>
            <div class="con-links">
                <ul>
                    <li><a href="{{route('site')}}">Home</a></li>
                    <li><a href="{{route('playgrounds')}}">Playgrounds</a></li>
                    <li><a href="{{route('centers')}}">Sport Centers</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            <div class="con-links">
                <ul>
                    @if (Route::has('login'))
                    @auth
                    <x-app-layout>

                    </x-app-layout>
                    @else
                            <li><a href="{{route('login')}}" class="act">Log In</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="act">Register</a></li>
                        @endif
                    @endauth
            @endif
                </ul>
            </div>
        </div>
    </div>
</div>

