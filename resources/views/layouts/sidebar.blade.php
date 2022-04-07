<div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="">
                <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                <h4 class="logo-text">PEDULI DIRI</h4>
            </a>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            <li>
                <a href="/dashboard">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            @if (auth()->user()->role == 'admin')
                <li>
                    <a href="/datauser">
                        <i class="zmdi zmdi-face"></i> <span>Data User</span>
                    </a>
                </li>
            @endif

            @if (auth()->user()->role == 'user')
                <li>
                    <a href="/profile">
                        <i class="zmdi zmdi-face"></i> <span>Profile</span>
                    </a>
                </li>
            @endif
        </ul>

    </div>
