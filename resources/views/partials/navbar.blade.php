<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('admin/img/slider-icon.png') }}" alt="Brand Icon" class="brand-icon">
                <span class="brand-title">Political<span style="color:red">CONNECTION</span></span>
            </a>
        </div>
        <div id="navbar" class="navbar">
            <ul class="nav navbar">
                <li><a href="{{ route('political.connection') }}">Wall</a></li>
                <li><a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">Profile</a></li>
                <li><a href="{{ route('photos') }}">Photos</a></li>
                <li><a href="{{ route('connections') }}">Connections</a></li>
                <li><a href="{{ route('groups') }}">Groups</a></li>
            </ul>
        </div>
    </div>
</nav>
