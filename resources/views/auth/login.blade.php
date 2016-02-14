<!DOCTYPE html>
<html class="ie9">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">
    <meta name="description" content="SuperFlat Responsive Admin Template">
    <meta name="keywords" content="SuperFlat Admin, Admin, Template, Bootstrap">


    <title>Login</title>

    {{--Stylesheets--}}
    {{ Html::style('vendors/bower_components/animate.css/animate.min.css') }}
    {{ Html::style('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}
    {{ Html::style('css/app.min.css') }}
</head>

<body class="login-content">


<!-- Login Form -->
<div class="lc-block toggled" id="l-login">
    <div class="lcb-float"><i class="zmdi zmdi-pin-account"></i></div>

    {!! Form::open(['url' => '/login', 'method' => 'post']) !!}

    {!! csrf_field() !!}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

    </div>

    <div class="clearfix"></div>

    <div class="p-relative ">
        <div class="checkbox cr-alt">
            <label class="c-gray">
                {!! Form::checkbox('remember') !!}
                <i class="input-helper"></i>
                Remember Me
            </label>
        </div>
    </div>

    {!! Form::submit('Sign In', ['class' => 'btn btn-block btn-success btn-float m-t-25']) !!}
    {!! Form::close() !!}

    <ul class="login-navigation">
        <li href="lockscreen.html" data-block="#l-forget-password" class="bg-red">Forgot Your Password?</li>
    </ul>
</div>

{{--Scripts--}}
{{ Html::script('vendors/bower_components/jquery/dist/jquery.min.js') }}
{{ Html::script('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
{{ Html::script('js/functions.js') }}

</body>
</html>
