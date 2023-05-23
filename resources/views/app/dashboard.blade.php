@extends('app._layouts.base')

@section('content')

@section('title')
<h4 class="page-title">DASHBOARD</h4>
@endsection

@section('sub_title')
<h2>DASHBOARD<small></small></h2>
@endsection

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <div class="user-bg">
                <div class="overlay-box">
                    <div class="user-content text-center">

                        <div class="col-md-12 col-sm-12 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="{{ asset('static/images/user.png') }}" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3>{{ auth()->user()->name }}</h3>

                            <ul class="list-unstyled user_data">

                                <li class="m-top-xs"><i class="fa fa-envelope user-profile-icon"></i>
                                    {{ auth()->user()->email }}
                                </li>
                            </ul>
                            
                            <br />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection