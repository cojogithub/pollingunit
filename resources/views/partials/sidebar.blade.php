@if(Auth::check())
<nav id="sidebar">
    <div class="sidebar-header d-flex align-items-center justify-content-between" id="sidebar-header">
        <div class="d-flex align-items-center">
            <div class="avatar">
                <img src="{{ asset(Auth::user()->profile_image ?? 'admin/img/avatar-6.png') }}" alt="..." class="img-fluid rounded-circle">
            </div>
            <div class="title">
                <h1 class="h5">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h1>
                <p>Web Designer</p>
            </div>
        </div>
        <button type="button" id="sidebarCollapse" class="btn btn-dark">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <ul class="list-unstyled">
        <ul id="exampledropdownDropdown" class="collapse list-unstyled"></ul>
    </ul>
    <span class="heading">Dashboard</span>
    <ul class="list-unstyled">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="{{ url('dashboard') }}"> <i class="icon-home"></i>Summary</a></li>
        <li class="{{ Request::is('datainput') ? 'active' : '' }}"><a href="{{ url('datainput') }}"> <i class="icon-home"></i> Data Input</a></li>
    </ul>
    <span class="heading">Political Connection</span>
    <ul class="list-unstyled">
        <li class="{{ Request::is('political-connection') ? 'active' : '' }}"><a href="{{ route('political.connection') }}"> <i class="icon-user"></i> Wall</a></li>
        <li class="{{ Request::is('profile/*') ? 'active' : '' }}"><a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}"> <i class="icon-grid"></i>Profile</a></li>
        <li class="{{ Request::is('photos') ? 'active' : '' }}"><a href="{{ route('photos') }}"> <i class="fa fa-bar-chart"></i>Photos</a></li>
        <li class="{{ Request::is('connections') ? 'active' : '' }}"><a href="{{ route('connections') }}"> <i class="icon-padnote"></i>Connections</a></li>
        <li class="{{ Request::is('groups') ? 'active' : '' }}"><a href="{{ route('groups') }}"> <i class="icon-chart"></i> Groups</a></li>
        <li class="{{ Request::is('view-page') ? 'active' : '' }}"><a href="{{ route('poll.manage') }}"> <i class="icon-chart"></i> View Polls</a></li>
        <li class="{{ Request::is('create-poll') ? 'active' : '' }}"><a href="{{ route('poll.create') }}"> <i class="icon-chart"></i> Create Poll</a></li>
    </ul>
    <span class="heading">Settings</span>
    <ul class="list-unstyled">
        <li>
            <a href="#settingsDropdown" aria-expanded="false" data-toggle="collapse">
                <i class="icon-settings"></i> Settings
            </a>
            <ul id="settingsDropdown" class="collapse list-unstyled">
                <li class="{{ Request::is('profile-settings') ? 'active' : '' }}"><a href="{{ url('profile-settings') }}"> <i class="icon-computer"></i> Profile Settings</a></li>
                <li class="{{ Request::is('account-settings') ? 'active' : '' }}"><a href="{{ url('account-settings') }}"> <i class="icon-page"></i> Account Settings</a></li>
                <li class="{{ Request::is('activities') ? 'active' : '' }}"><a href="{{ route('activities.index') }}"> <i class="icon-website"></i> User Activity</a></li>
            </ul>
        </li>
        <li class="{{ Request::is('support') ? 'active' : '' }}"><a href="{{ url('support') }}"> <i class="icon-light-bulb"></i> Help and Support</a></li>
    </ul>
</nav>
@else
<script>
    window.location.href = "{{ url('/') }}";
</script>
@endif
