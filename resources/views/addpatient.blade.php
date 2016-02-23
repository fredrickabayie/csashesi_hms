@extends('layouts.hms')

{{--| CONTENT |--}}
@section('content')
    <header class="page-header">
        <h3>Patients
            <small>Records of patients</small>
        </h3>
    </header>

    <div class="tile">
        <div class="t-header">
            <div class="th-title">
                Add Patient
            </div>
        </div>

        <div class="t-body tb-padding">
            {!! Form::open(['url' => 'add' , 'method' => 'post']) !!}

            {!! csrf_field() !!}

            <div class="row">

                <div class="col-sm-4">

                    <div class="input-group{{ $errors->has('fullName') ? 'has-error' : '' }}">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-account"></i>
                    </span>

                        {!! Form::text('fullName', null, ['class' => 'form-control c-black', 'placeholder' => 'Full Name']) !!}

                        @if ($errors->has('fullName'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fullName') }}</strong>
                            </span>
                        @endif

                    </div>

                    <br/>


                    <div class="input-group{{ $errors->has('contact') ? 'has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-local-phone"></i>
                        </span>

                        {!! Form::text('contact', null, ['class' => 'form-control c-black', 'placeholder' => 'Contact Number']) !!}

                        @if ($errors->has('contact'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contact') }}</strong>
                            </span>
                        @endif

                    </div>

                    <br/>

                    <div class="input-group{{ $errors->has('address') ? 'has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-pin"></i>
                        </span>

                        {!! Form::text('address', null, ['class' => 'form-control c-black', 'placeholder' => 'Home Address']) !!}

                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif

                    </div>

                </div>

                <div class="col-sm-4">
                    <div class="input-group{{ $errors->has('email') ? 'has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                        </span>

                        {!! Form::text('email', null, ['class' => 'form-control c-black', 'placeholder' => 'Email Address']) !!}

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    </div>

                    <br/>

                    <div class="input-group{{ $errors->has('birthDate') ? 'has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-calendar"></i>
                        </span>
                        <div class="dtp-container">

                            {!! Form::text('birthDate', null, ['class' => 'form-control c-black date-picker', 'placeholder' => 'Date of Birth']) !!}

                            @if ($errors->has('birthDate'))
                                <span class="help-block">
                                <strong>{{ $errors->first('birthDate') }}</strong>
                            </span>
                            @endif

                        </div>
                    </div>

                    <br/>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group m-b-25">
                                <span class="input-group-addon"><i class="zmdi zmdi-male-female"></i> Gender</span>
                                <select name="gender" class="selectpicker">
                                    @foreach( $genders as $gender )
                                        <option value="{{ $gender['gender_id'] }}">{{ $gender['gender_type'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-group m-b-25">
                                <span class="input-group-addon"><i class="zmdi zmdi-male-female"></i> Marital</span>
                                <select name="status" class="selectpicker">
                                    @foreach( $maritalStatus as $status )
                                        <option value="{{ $status['status_id'] }}">{{ $status['status_type'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-4">
                    <div class="input-group">
                        {!! Form::submit('Add', ['class' => 'btn bg-teal form-control']) !!}
                    </div>
                </div>

            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection