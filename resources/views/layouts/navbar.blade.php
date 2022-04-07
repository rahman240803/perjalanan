<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link toggle-menu" href="javascript:void();">
                    <i class="icon-menu menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <form class="search-bar">
                    <input type="text" class="form-control" placeholder="Enter keywords">
                    <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                </form>
            </li>
        </ul>


        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="/profile">
                <span class="user-profile"><img  @if (Auth::user()->foto != null && Auth::user()->foto > 0) src="{{ asset('foto/' . Auth::user()->foto) }}"
                         @else src="{{ asset('foto/default.png') }}" @endif  class="img-circle"
                        alt="user avatar"></span>
                        
                        
                        
                        
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                
                @if (Auth::user()->role == 'admin')
                <li class="dropdown-item"> <a href="/profile">Profile</a></li>
                @endif
                <li class="dropdown-item"> <a href="/logout">Logout</a></li>
            </ul>
        </li>
    </nav>
</header>
