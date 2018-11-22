<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/home" class="site_title"><i class="fa fa-paw"></i> <span>{{ env('APP_NAME') }}</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('images/img.jpg') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ auth()->user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Dashboard</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Overview </a>

                    </li>
                    {{--@allows(get_auth_user(), ['user.create', 'user.update', 'user.view','user.delete','role.create','role.view'])--}}

                    <li><a><i class="fa fa-bar-chart-o"></i> Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            {{--@allows(get_auth_user(), ['user.update', 'user.view','user.delete'])--}}
                            <li><a href="{{ route('admin.users') }}">List</a></li>
                            {{--@endAllows--}}
                            {{--@allows(get_auth_user(), ['user.create'])--}}
                            <li><a href=" {{ route('admin.users.create') }}">Add New</a></li>
                            {{--@endAllows--}}
                            
                        </ul>
                    </li>
                    {{--@endAllows--}}



                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            {{--<a data-toggle="tooltip" data-placement="top" title="Settings">--}}
                {{--<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>--}}
            {{--</a>--}}
            {{--<a data-toggle="tooltip" data-placement="top" title="FullScreen">--}}
                {{--<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>--}}
            {{--</a>--}}
            {{--<a data-toggle="tooltip" data-placement="top" title="Lock">--}}
                {{--<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>--}}
            {{--</a>--}}
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('user.logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>