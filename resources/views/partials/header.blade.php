<header class="header custom-header-margin">
    <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
                <div class="close-btn">Close <i class="fa fa-close"></i></div>
                <form id="searchForm" action="#">
                    <div class="form-group">
                        <input type="search" name="search" placeholder="What are you searching for...">
                        <button type="submit" class="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">POLLING</strong><strong>UNIT</strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary">P</strong><strong>U</strong></div>
                </a>
                <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
            </div>
            <div class="right-menu list-inline no-margin-bottom">
                <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
                <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
                    <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
                        <!-- Messages List -->
                    </div>
                </div>
                <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
                    <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list">
                        <!-- Tasks List -->
                    </div>
                </div>
                <div class="list-inline-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Mega <i class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu megamenu">
                        <!-- Megamenu Content -->
                    </div>
                </div>
                <div class="list-inline-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="{{ asset('img/flags/16/GB.png') }}" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                    <div aria-labelledby="languages" class="dropdown-menu"><a rel="nofollow" href="#" class="dropdown-item"> <img src="{{ asset('admin/img/flags/16/DE.png') }}" alt="English" class="mr-2"><span>German</span></a><a rel="nofollow" href="#" class="dropdown-item"> <img src="{{ asset('admin/img/flags/16/FR.png') }}" alt="English" class="mr-2"><span>French  </span></a></div>
                </div>
                <div class="list-inline-item logout">
                    <a id="logout" href="{{ route('logout') }}" class="nav-link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout <i class="icon-logout"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    });
</script>
