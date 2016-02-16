@extends('layouts.app')

@section('content')

        <!-- Login Form -->
<div class="lc-block toggled" id="l-login">
    <div class="lcb-float animated zoomInDown">
        <i class="zmdi zmdi-pin-account c-blue"></i>
    </div>

    {!! Form::open(['url' => '/login', 'method' => 'post']) !!}

    {!! csrf_field() !!}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        {!! Form::email('email', null, ['class' => 'form-control c-black', 'placeholder' => 'Email']) !!}

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

        {!! Form::password('password', ['class' => 'form-control c-black', 'placeholder' => 'Password']) !!}

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

    {!! Form::submit('Sign In', ['class' => 'btn btn-block btn-primary btn-float m-t-25']) !!}
    {!! Form::close() !!}

    <ul class="login-navigation">
        <li href="{{ url('/password/reset') }}" data-block="#l-forget-password" class="bg-red animated bounce">Forgot Your Password?
        </li>
    </ul>

</div>

@endsection