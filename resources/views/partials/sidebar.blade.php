<nav id="sidebar">
    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse" class="sidebar-header d-flex align-items-center" id="sidebar-header">
        <div class="avatar">
            <img src="{{ asset('admin/img/avatar-6.jpg') }}" alt="..." class="img-fluid rounded-circle">
        </div>
        <div class="title">
            <h1 class="h5">{{ Auth::user()->name }}</h1>
            <p>Web Designer</p>
        </div>
    </a>
    <ul class="list-unstyled">
        <ul id="exampledropdownDropdown" class="collapse list-unstyled">
            <li><a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}"> <i class="icon-user"></i> Profile</a></li>
            <li>
                <a href="#settingsDropdown" aria-expanded="false" data-toggle="collapse">
                    <i class="icon-settings"></i> Settings
                </a>
                <ul id="settingsDropdown" class="collapse list-unstyled">
                    <li><a href="{{ url('profile-settings') }}"> <i class="icon-computer"></i> Profile Settings</a></li>
                    <li><a href="{{ url('account-settings') }}"> <i class="icon-page"></i> Account Settings</a></li>
                    <li><a href="{{ url('user-activity') }}"> <i class="icon-website"></i> User Activity</a></li>
                </ul>
            </li>
            <li><a href="#"> <i class="icon-light-bulb"></i> Support</a></li>
        </ul>
    </ul>
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="{{ url('dashboard') }}"> <i class="icon-home"></i>Home</a></li>
        <li class="{{ Request::is('tables') ? 'active' : '' }}"><a href="{{ url('tables') }}"> <i class="icon-grid"></i>Tables</a></li>
        <li class="{{ Request::is('charts') ? 'active' : '' }}"><a href="{{ url('charts') }}"> <i class="fa fa-bar-chart"></i>Charts</a></li>
        <li class="{{ Request::is('forms') ? 'active' : '' }}"><a href="{{ url('forms') }}"> <i class="icon-padnote"></i>Forms</a></li>
    </ul>
    <span class="heading">Extras</span>
    <ul class="list-unstyled">
        <li><a href="#"> <i class="icon-settings"></i> Demo</a></li>
        <li><a href="#"> <i class="icon-writing-whiteboard"></i> Demo</a></li>
        <li><a href="#"> <i class="icon-chart"></i> Demo</a></li>
    </ul>
</nav>
