<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Entrust
            </a>
        </div>
        @if(Auth::check())
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">Домашняя</a></li>
                </ul>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('profile') }}">Профиль</a></li>
                    </ul>
                    @if(Auth::user()->can(['edit-admin','edit-users','edit-post','edit-roles','view-permissions']))
                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <!-- Left Side Of Navbar -->
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('management') }}">Управление</a></li>
                            </ul>
                            @endif
                                    @if(Auth::user()->can('edit-post'))
                                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                                            <!-- Left Side Of Navbar -->
                                            <ul class="nav navbar-nav">
                                                <li><a href="{{ route('creatArticle') }}">Написать Статью</a></li>
                                            </ul>
                                        @endif
                                        @endif
                                        <!-- Right Side Of Navbar -->
                                            <ul class="nav navbar-nav navbar-right">
                                                <!-- Authentication Links -->
                                                @if (Auth::guest())
                                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                                @else
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                            {{ Auth::user()->name }} <span class="caret"></span>
                                                        </a>

                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                                        </ul>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                </div>
</nav>