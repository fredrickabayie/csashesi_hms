@extends('layouts.hms')

{{--| CONTENT |--}}
@section('content')
    <header class="page-header">
        <h3>
            Profile
            <small>
                Your details are below
            </small>
        </h3>
    </header>


    <div class="tile" id="profile-main">
        <div class="pm-overview c-overflow-dark">
            <div class="pmo-pic">
                <div class="p-relative">

                    <img class="img-responsive" src="img/profile-pic.jpg" alt="">

                    <div class="dropdown pmop-message">
                        <a data-toggle="dropdown" href="" class="pmopm-send">
                            <i class="zmdi zmdi-pin-account c-blue"></i>
                        </a>

                    </div>
                </div>


                <div class="pmo-stat bg-green">
                    <h3 class="m-0 c-white">{{ Auth::user()->name }}</h3>
                    Pediatric Department
                </div>
            </div>

            <div class="pmo-block pmo-contact hidden-xs">
                <h2>Contact</h2>

                <ul>
                    <li><i class="zmdi zmdi-phone"></i> (+233) {{ Auth::user()->userDetail->phone }} </li>
                    <li><i class="zmdi zmdi-email"></i> {{ Auth::user()->email }} </li>
                    <li>
                        <i class="zmdi zmdi-pin"></i>
                        <address class="m-b-0">
                            {{ Auth::user()->userDetail->address }}
                        </address>
                    </li>
                </ul>
            </div>

        </div>

        <div class="pm-body clearfix">
            <ul class="tab-nav tn-justified">
                <li class="active"><a>About</a></li>
            </ul>


            <div class="pmb-block">
                <div class="pmbb-header">
                    <h2><i class="zmdi zmdi-equalizer m-r-5"></i> Summary</h2>
                </div>

                <div class="pmbb-body p-l-30">
                    <div class="pmbb-view">
                        {{ Auth::user()->userDetail->summary }}
                    </div>
                </div>
            </div>

            <div class="pmb-block">

                <div class="pmbb-header">
                    <h2><i class="zmdi zmdi-account m-r-5"></i> Basic Information</h2>
                </div>

                <div class="pmbb-body p-l-30">
                    <div class="pmbb-view">
                        <dl class="dl-horizontal">
                            <dt>Full Name</dt>
                            <dd>{{ Auth::user()->name }}</dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Gender</dt>
                            <dd> {{ Auth::user()->userDetail->gender->gender_type }} </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Birthday</dt>
                            <dd>{{ Auth::user()->userDetail->birthday }}</dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Martial Status</dt>
                            <dd> {{ Auth::user()->userDetail->maritalStatus->status_type }} </dd>
                        </dl>
                    </div>

                </div>

            </div>


            <div class="pmb-block">

                <div class="pmbb-header">
                    <h2><i class="zmdi zmdi-phone m-r-5"></i> Contact Information</h2>
                </div>

                <div class="pmbb-body p-l-30">

                    <div class="pmbb-view">
                        <dl class="dl-horizontal">
                            <dt>Mobile Phone</dt>
                            <dd> (+233) {{ Auth::user()->userDetail->phone }}</dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Email Address</dt>
                            <dd>{{ Auth::user()->email }}</dd>
                        </dl>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection