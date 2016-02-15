<!DOCTYPE html>
<html lang="en">
<head>

    {{--| HEAD |--}}
    @include('includes.head')

</head>

<body>

{{--| NAVIGATION BAR |--}}
<header id="header" class="clearfix" data-spy="affix" data-offset-top="65">
    @include('includes.header')
</header>

{{--| SIDEBAR |--}}
@include('includes.sidebar')

{{--| MAIN CONTENT |--}}
<section id="content">
    <div class="container">
        <small> @yield('content')
    </div>
</section>

{{--| FOOTER |--}}
<footer id="footer">
    @include('includes.footer')
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