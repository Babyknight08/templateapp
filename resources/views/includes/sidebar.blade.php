<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" id="sidebarImg" src="img/profile_small.jpg"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold"></span>  
                        @if(Auth::check())
                        <b>
                            {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</b>
 
                        <span class="text-muted text-xs block"> 
                            <b>
                                {{ Auth::user()->jobtitle }}</b>
                        @else
                            Guest
                        @endif     <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    <a href="{{ route('dashboard') }}">
                    EMB
                    </a>
                </div>
            </li>
            <li class="{{ request()->is('/') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span>
                </a>
            </li>
            
            @auth
            @if(auth()->user()->usertype == 1)
                <li class="{{ request()->is('user') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}">
                        <i class="fa fa-users"></i> <span class="nav-label">User</span>
                    </a>
                </li>
                @endif
            @endauth
            <li class="{{ request()->is('alltransaction*', 'inbox*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-file"></i> <span class="nav-label">Documents</span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse {{ request()->is('alltransaction*', 'inbox*', 'outbox*', 'receive*') ? 'in' : '' }}">
                    <li class="{{ request()->is('alltransaction*') ? 'active' : '' }}"><a href="{{ route('alltransaction.index') }}">All Transaction</a></li>
                    <li class="{{ request()->is('inbox*' ,'receive*') ? 'active' : '' }}"><a href="{{ route('inbox.index') }}">Inbox</a></li>
                    <li class="{{ request()->is('outbox*') ? 'active' : '' }}"><a href="{{ route('outbox.index') }}">Outbox</a></li>

                </ul>
            </li>
  
        </ul>

    </div>
</nav>


