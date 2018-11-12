<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="javascript: void(0);" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('images/user.svg') }}" alt="">
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu">
                        {{--<li><a href="javascript:;"> Profile</a></li>--}}
                        {{--<li>--}}
                            {{--<a href="javascript:;">--}}
                                {{--<span class="badge bg-red pull-right">50%</span>--}}
                                {{--<span>Settings</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="javascript:;">Help</a></li>--}}
                       {{-- <li><a href="{{ route('user.profile') }}"><i class="fa fa-cogs pull-right"></i> Profile</a></li>
                        <li><a href="{{ route('user.logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>--}}
                    </ul>
                </li>

                {{--<li role="presentation" class="dropdown">--}}
                    {{--<a href="javascript: void(0);" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false" id="notifications">--}}
                        {{--<i class="fa fa-envelope-o"></i>--}}
                        {{--<span class="badge bg-green" id="notification_count">0</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            </ul>
        </nav>
    </div>
</div>
