<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">
    <meta name="description" content="SuperFlat Responsive Admin Template">
    <meta name="keywords" content="SuperFlat Admin, Admin, Template, Bootstrap">

    <title>Dashboard</title>

    {!! Html::style('vendors/bower_components/animate.css/animate.min.css') !!}
    {!! Html::style('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') !!}
    {!! Html::style('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') !!}
    {!! Html::style('css/app.min.css') !!}

</head>

<body>
<header id="header" class="clearfix" data-spy="affix" data-offset-top="65">
    <ul class="header-inner">

        <!-- Logo -->
        <li class="logo">
            <a href=""><img src="img/logo.png" alt=""></a>
            <div id="menu-trigger"><i class="zmdi zmdi-menu"></i></div>
        </li>

        <!-- Messages -->
        <li class="dropdown">
            <a href="" data-toggle="dropdown" class="hi-messages">
                <i class="zmdi zmdi-email"></i>
                <i class="hi-count">6</i>
            </a>

            <div class="dropdown-menu hi-dropdown">
                <div class="dropdown-header bg-green m-b-15">
                    MESSAGES

                    <ul class="actions a-alt">
                        <li><a href=""><i class="zmdi zmdi-plus"></i></a></li>
                    </ul>
                </div>

                <div class="list-group lg-alt">
                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <img class="img-avatar" src="img/profile-pics/1.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">David Villa Jacobs
                                <small>3 Hours ago</small>
                            </div>
                            <small class="list-group-item-text c-gray">Sorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Etiam mattis lobortis sapien non posuere
                            </small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <img class="img-avatar" src="img/profile-pics/5.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">Candice Barnes
                                <small>5 Hours ago</small>
                            </div>
                            <small class="list-group-item-text c-gray">Quisque non tortor ultricies, posuere elit id,
                                lacinia purus curabitur.
                            </small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <img class="img-avatar" src="img/profile-pics/2.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">Jeannette Lawson
                                <small>Yesterday</small>
                            </div>
                            <small class="list-group-item-text c-gray">Donec congue tempus ligula, varius hendrerit mi
                                hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis
                            </small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <img class="img-avatar" src="img/profile-pics/4.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">Darla Mckinney
                                <small>05/06/2014</small>
                            </div>
                            <small class="list-group-item-text c-gray">Duis tincidunt augue nec sem dignissim
                                scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia
                            </small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <img class="img-avatar" src="img/profile-pics/2.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">Rudolph Perez
                                <small>08/06/2014</small>
                            </div>
                            <small class="list-group-item-text c-gray">Phasellus a ullamcorper lectus, sit amet viverra
                                quam. In luctus tortor vel nulla pharetra bibendum
                            </small>
                        </div>
                    </a>

                    <a class="view-more" href="">View more</a>
                </div>
            </div>
        </li>


        <!-- Notifications -->
        <li class="dropdown">
            <a href="" data-toggle="dropdown" class="hi-notifications">
                <i class="zmdi zmdi-notifications"></i>
                <i class="hi-count">9</i>
            </a>
            <div class="dropdown-menu hi-dropdown">
                <div class="dropdown-header bg-orange m-b-15">
                    Notifications
                    <ul class="actions a-alt">
                        <li><a href=""><i class="zmdi zmdi-check-all"></i></a></li>
                    </ul>
                </div>
                <div class="list-group lg-alt">
                    <a class="list-group-item media" href="">
                        <div class="pull-right">
                            <img class="img-avatar" src="img/profile-pics/1.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">David Villa Jacobs
                                <small>3 Hours ago</small>
                            </div>
                            <small class="list-group-item-text c-gray">Sorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Etiam mattis lobortis sapien non posuere
                            </small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="media-body">
                            <div class="list-group-item-heading">Candice Barnes
                                <small>5 Hours ago</small>
                            </div>
                            <small class="list-group-item-text c-gray">Quisque non tortor ultricies, posuere elit id,
                                lacinia purus curabitur.
                            </small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="media-body">
                            <div class="list-group-item-heading">Jeannette Lawson
                                <small>Yesterday</small>
                            </div>
                            <small class="list-group-item-text c-gray">Donec congue tempus ligula, varius hendrerit mi
                                hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis
                            </small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-right">
                            <img class="img-avatar" src="img/profile-pics/4.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">Darla Mckinney
                                <small>05/06/2014</small>
                            </div>
                            <small class="list-group-item-text c-gray">Duis tincidunt augue nec sem dignissim
                                scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia
                            </small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-right">
                            <img class="img-avatar" src="img/profile-pics/2.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">Rudolph Perez
                                <small>08/06/2014</small>
                            </div>
                            <small class="list-group-item-text c-gray">Phasellus a ullamcorper lectus, sit amet viverra
                                quam. In luctus tortor vel nulla pharetra bibendum
                            </small>
                        </div>
                    </a>

                    <a class="view-more" href="">View more</a>
                </div>
            </div>
        </li>

        <!-- Ongoing Projects -->
        <li class="dropdown">
            <a data-toggle="dropdown" href="" class="hi-projects">
                <i class="zmdi zmdi-format-subject"></i>
            </a>
            <div class="dropdown-menu hi-dropdown">
                <div class="dropdown-header bg-red m-b-15">
                    ONGOING PROJECTS
                    <ul class="actions a-alt">
                        <li><a class="" href=""><i class="zmdi zmdi-plus"></i></a></li>
                    </ul>
                </div>
                <div class="list-group lg-alt">
                    <div class="list-group-item">
                        <div class="list-group-item-heading m-b-5">HTML5 Validation Report</div>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 95%">
                                <span class="sr-only">95% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="list-group-item-heading m-b-5">Google Chrome Extension</div>

                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="list-group-item-heading m-b-5">Social Intranet Projects</div>

                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="list-group-item-heading m-b-5">Bootstrap Admin Template</div>

                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="list-group-item-heading m-b-5">Youtube Client App</div>

                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>

                    <a class="view-more" href="">View more</a>
                </div>
            </div>
        </li>

        <!-- Events -->
        <li class="dropdown hidden-xs">
            <a href="" data-toggle="dropdown" class="hi-events">
                <i class="zmdi zmdi-calendar"></i>
            </a>
            <div class="dropdown-menu hi-dropdown">
                <div class="dropdown-header bg-blue m-b-15">
                    UPCOMING EVENTS
                    <ul class="actions a-alt">
                        <li><a class="" href=""><i class="zmdi zmdi-plus"></i></a></li>
                    </ul>
                </div>

                <div class="list-group lg-alt">
                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <div class="event-time bg-cyan">
                                <h2>16/07</h2>
                                <small>11:30 AM</small>
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">ICCSSR Annual Meeting</div>
                            <small class="list-group-item-text c-gray">Sorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Etiam mattis lobortis sapien non posuere
                            </small>
                            <small class="list-group-item-text c-gray f-11">10 Days to go</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <div class="event-time bg-green">
                                <h2>20/7</h2>
                                <small>11:30 AM</small>
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">Outsourcing in Clinical Trials Europe 2014</div>
                            <small class="list-group-item-text c-gray">Vestibulum ut auctor est. Proin euismod semper
                                tortor id egestas
                            </small>
                            <small class="list-group-item-text c-gray f-11">20 Days to go</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <div class="event-time bg-orange">
                                <h2>2/8</h2>
                                <small>11:30 AM</small>
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">Biomarkers World Congress 2014</div>
                            <small class="list-group-item-text c-gray">Phasellus luctus commodo augue, at posuere augue.
                                Sed pellentesque libero vel dapibus placerat
                            </small>
                            <small class="list-group-item-text c-gray f-11">31 Days to go</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <div class="event-time bg-red">
                                <h2>30/10</h2>
                                <small>11:30 AM</small>
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">August Flavors Cooking</div>
                            <small class="list-group-item-text c-gray">Quisque magna tellus, vulputate a faucibus at,
                                rhoncus vitae est. Nulla scelerisque sollicitudin mollis
                            </small>
                            <small class="list-group-item-text c-gray f-11">55 Days to go</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="">
                        <div class="pull-left">
                            <div class="event-time bg-blue">
                                <h2>23/11</h2>
                                <small>11:30 AM</small>
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="list-group-item-heading">Beach Party 2104</div>
                            <small class="list-group-item-text c-gray">Etiam dolor diam, pulvinar nec vehicula id,
                                sodales sagittis libero. Maecenas cursus varius libero et eleifend
                            </small>
                            <small class="list-group-item-text c-gray f-11">64 Days to go</small>
                        </div>
                    </a>
                </div>

                <a class="view-more" href="">View more</a>
            </div>
        </li>


        <!-- Search -->
        <li class="top-search">
            <input class="ts-input" placeholder="Search..." type="text">

            <i class="ts-reset zmdi zmdi-close"></i>
        </li>

        <!-- Settings -->
        <li class="pull-right dropdown hidden-xs">
            <a href="" data-toggle="dropdown">
                <i class="zmdi zmdi-more-vert"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a data-toggle="fullscreen" href="">Toggle Fullscreen</a></li>
                <li><a data-toggle="localStorage" href="">Clear Local Storage</a></li>
                <li><a href="">Account Settings</a></li>
                <li><a href="">Other Settings</a></li>
            </ul>
        </li>

        <!-- Quick Apps -->
        <li class="hidden-xs dropdown pull-right">
            <a href="" data-toggle="dropdown">
                <i class="zmdi zmdi-apps"></i>
            </a>

            <div class="dropdown-menu pull-right" id="launch-apps">
                <div class="dropdown-header bg-teal">SUPERFLAT APPS</div>

                <div class="la-body">
                    <div class="lab-item">
                        <a href="" class="bg-red">
                            <i class="zmdi zmdi-calendar"></i>
                        </a>
                        <small>Calendar</small>
                    </div>

                    <div class="lab-item">
                        <a href="" class="bg-green">
                            <i class="zmdi zmdi-file-text"></i>
                        </a>
                        <small>Files</small>
                    </div>

                    <div class="lab-item">
                        <a href="" class="bg-blue">
                            <i class="zmdi zmdi-email"></i>
                        </a>
                        <small>Mail</small>
                    </div>

                    <div class="lab-item">
                        <a href="" class="bg-orange">
                            <i class="zmdi zmdi-trending-up"></i>
                        </a>
                        <small>Analytics</small>
                    </div>

                    <div class="lab-item">
                        <a href="" class="bg-cyan">
                            <i class="zmdi zmdi-view-headline"></i>
                        </a>
                        <small>News</small>
                    </div>

                    <div class="lab-item">
                        <a href="" class="bg-teal">
                            <i class="zmdi zmdi-image"></i>
                        </a>
                        <small>Gallery</small>
                    </div>
                </div>
            </div>
        </li>
        <!-- Time -->
        <li class="pull-right hidden-xs">
            <div id="time">
                <span id="t-hours"></span>
                <span id="t-min"></span>
                <span id="t-sec"></span>
            </div>
        </li>
    </ul>
</header>

<aside id="sidebar">

    <!--| MAIN MENU |-->
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
            <a href="typography.html">
                <i class="zmdi zmdi-format-underlined"></i>
                <span>Typography<span class="label label-danger">New</span></span>
            </a>
        </li>
    </ul>
</aside>

<section id="content">
    <div class="container">
        <header class="page-header">
            <h3>Dashboard
                <small>Statistics for this month</small>
            </h3>
        </header>

    </div>
</section>

<footer id="footer">
    Copyright © 2016 CSASHESI HMS

    <ul class="f-menu">
        <li><a href="">Home</a></li>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Reports</a></li>
        <li><a href="">Support</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</footer>

<!-- Javascript Libraries -->
{!! Html::script('vendors/bower_components/jquery/dist/jquery.min.js') !!}
{!! Html::script('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
{!! Html::script('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') !!}
{!! Html::script('vendors/sparklines/jquery.sparkline.min.js') !!}
{!! Html::script('vendors/bootstrap-growl/bootstrap-growl.min.js') !!}
{!! Html::script('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') !!}
{!! Html::script('vendors/bower_components/moment/min/moment.min.js') !!}
{!! Html::script('js/functions.js') !!}
{!! Html::script('js/demo.js') !!}

</body>
</html>