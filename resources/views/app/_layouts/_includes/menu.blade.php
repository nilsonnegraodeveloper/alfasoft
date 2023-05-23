<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix flex-box">

            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="{{ asset('static/images/user.png') }}" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>{{ auth()->user()->name}}</h2>
                </div>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Home </a>
                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-user"></i> Contacts </a></li>
                </ul>

            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>