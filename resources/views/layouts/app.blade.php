<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Hms software for hospitals and pharmacies">
    <meta name="keywords" content="Hms Software, Health, Csashesi, Clinic">

    <title>Login</title>

    {{--Stylesheets--}}
    {{ Html::style('vendors/bower_components/animate.css/animate.min.css') }}
    {{ Html::style('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}
    {{ Html::style('css/app.min.css') }}

</head>

<body class="login-content">

@yield('content')

{{--Scripts--}}
{{ Html::script('vendors/bower_components/jquery/dist/jquery.min.js') }}
{{ Html::script('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
{{ Html::script('js/functions.js') }}

</body>
</html>