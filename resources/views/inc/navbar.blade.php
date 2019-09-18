<nav class="navbar navbar-inverse bg-dark mb-5">
    <div class="container">
        <div class="navbar-header d-flex">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/posts">Blog</a></li>
            </ul>

        </div>
            
            
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right flex-row">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="nav-item" class="dropdown">
                        <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        
{{--                        <ul class="dropdown-menu" role="menu">--}}
                            <li><a  class="nav-link" href="/dashboard">Dashboard</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
{{--                        </ul>--}}
                    </li>
                @endif
            </ul>
    </div>
</nav>
