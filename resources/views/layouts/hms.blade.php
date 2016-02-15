<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="SuperFlat Responsive Admin Template">
    <meta name="keywords" content="SuperFlat Admin, Admin, Template, Bootstrap">

    <title>Dashboard</title>

    {!! Html::style('vendors/bower_components/animate.css/animate.min.css') !!}
    {!! Html::style('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') !!}
    {!! Html::style('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') !!}
    {!! Html::style('css/app.min.css') !!}

</head>

<body>

{{--| NAVIGATION BAR |--}}
@include('layouts.navigation')

{{--| SIDEBAR |--}}
@include('layouts.sidebar')

{{--| MAIN CONTENT |--}}
<section id="content">
    <div class="container">
        <small> @yield('content')
    </div>
</section>

{{--| FOOTER |--}}
@include('layouts.footer')


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