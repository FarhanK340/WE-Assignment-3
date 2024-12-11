<div class="extended-header">
        <div class="navbar-logo">
            <img src="{{ asset('images/logo.png') }}" alt="zoo-logo">
        </div>
        <div class="page-links">
            <ul>
                <li><a href="{{ route('home')}}">Home</a></li>
                <li><a href="{{ route('services')}}">Services</a></li>
                <li><a href="{{ route('animals')}}">Animals</a></li>
                <li><a href="{{ route('contact')}}">Contact</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul>
                <li><a href="{{ route('services') }}">Ticket Info</a></li>
            </ul>
        </div>
        <div class="user-links">
            <ul>
                @if (Auth::check())
                    <div class="signed-in">Welcome, {{ Auth::user()->name }}</div>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                @else
                    <li><a href="{{ route('register') }}">Sign Up</a></li>
                    <li><a href="{{ route('login') }}">Log In</a></li>
                @endif
            </ul>
        </div>
</div>
