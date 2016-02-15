{{--| SIDEBAR |--}}
<aside id="sidebar">

    {{--| MAIN MENU |--}}
    <ul class="side-menu">
        <li class="sm-sub sms-profile">
            <a class="clearfix" href="">
                <img src="img/profile-pic.jpg" alt="">

                <span class="f-11">
                    <span class="d-block">{{ Auth::user()->name }}</span>
                    <small class="text-lowercase">{{ Auth::user()->email }}</small>
                </span>
            </a>

            <ul>
                <li><a href="">View Profile</a></li>
                <li><a href="{{ url('/logout') }}">Logout</a></li>
            </ul>
        </li>

        <li class="active">
            <a href="{{ url('/home') }}">
                <i class="zmdi zmdi-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li>
            <a href="">
                <i class="zmdi zmdi-format-underlined"></i>
                <span>Typography<span class="label label-danger">New</span></span>
            </a>
        </li>
    </ul>

</aside>