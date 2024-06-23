<nav class="main-nav">
    <!-- ***** Logo Start ***** -->
    <a href="{{ url('/') }}" class="logo" style="color: #000;">POLLING UNIT</a>
    <!-- ***** Logo End ***** -->
    <!-- ***** Menu Start ***** -->
    <ul class="nav">
        <li class="scroll-to-section"><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
        <li class="scroll-to-section"><a href="{{ url('/#about') }}" class="{{ Request::is('/') ? '' : '' }}">About</a></li>
        <li class="services-menu">
            <a href="#" class="dropdown-toggle" id="servicesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
            <div class="dropdown-menu custom-dropdown" aria-labelledby="servicesDropdown">
                <a class="dropdown-item" href="{{ url('election-coordination') }}">Election Campaign Coordination</a>
                <a class="dropdown-item" href="{{ url('polling-unit-management') }}">Poll Unit Management</a>
                <a class="dropdown-item" href="{{ url('fundraising') }}">Fundraiser Campaign</a>
            </div>
        </li>
        <li class="scroll-to-section"><a href="{{ url('/#contact-us') }}">Contact Us</a></li>
        @if (Route::has('login'))
            @auth
                @php
                    $user = Auth::user();
                    $userFullName = $user->firstname . ' ' . $user->lastname;
                @endphp
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">{{ $userFullName }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                       onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link {{ Request::routeIs('login') ? 'active-red' : '' }}">Login</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link {{ Request::routeIs('register') ? 'active-red' : '' }}">Register</a>
                    </li>
                @endif
            @endauth
        @endif
    </ul>
    <a class="menu-trigger">
        <span>Menu</span>
    </a>
    <!-- ***** Menu End ***** -->
</nav>
