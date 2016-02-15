{{--| NAVIGATION BAR |--}}
<header id="header" class="clearfix" data-spy="affix" data-offset-top="65">

    <ul class="header-inner">

        {{--| Logo |--}}
        <li class="logo">
            <a href=""><img src="img/logo.png" alt="HMS LOGO"></a>
            <div id="menu-trigger"><i class="zmdi zmdi-menu"></i></div>
        </li>

        {{--| Messages |--}}
        <li class="dropdown">
            <a href="" data-toggle="dropdown" class="hi-messages">
                <i class="zmdi zmdi-email"></i>
            </a>
        </li>


        {{--| Notifications |--}}
        <li class="dropdown">
            <a href="" data-toggle="dropdown" class="hi-notifications">
                <i class="zmdi zmdi-notifications"></i>
            </a>
        </li>

        {{--| Events |--}}
        <li class="dropdown hidden-xs">
            <a href="" data-toggle="dropdown" class="hi-events">
                <i class="zmdi zmdi-calendar"></i>
            </a>
        </li>

        {{-- Search |--}}
        <li class="top-search">
            <input class="ts-input" placeholder="Search..." type="text">

            <i class="ts-reset zmdi zmdi-close"></i>
        </li>

        {{--| Settings |--}}
        <li class="pull-right dropdown hidden-xs">
            <a href="" data-toggle="dropdown">
                <i class="zmdi zmdi-more-vert"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="">Toggle Fullscreen</a></li>
                <li><a href="{{ url('/logout') }}">Logout</a></li>
            </ul>
        </li>

        {{--| Quick Apps |--}}
        <li class="hidden-xs dropdown pull-right">
            <a href="" data-toggle="dropdown">
                <i class="zmdi zmdi-apps"></i>
            </a>

            <div class="dropdown-menu pull-right" id="launch-apps"></div>
        </li>


        {{--| TIME |--}}
        <li class="pull-right hidden-xs">
            <div id="time">
                <span id="t-hours"></span>
                <span id="t-min"></span>
                <span id="t-sec"></span>
            </div>
        </li>

    </ul>

</header>