<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{asset('adminpanel')}}/img/admin_profile.JPG" style="width: 70px; height: 70px" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">2Wheels</strong>
                             </span> <span class="text-muted text-xs block">Admin<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                {{-- <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li> --}}
                                <li class="divider"></li>
                                <li><a href="{{route('admin_logout')}}">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            2W
                        </div>
                    </li>
                    <li >
                        <a href="{{route('admin_dashboard_page')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>

                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Bikes Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{route('admin.bike.create')}}">Create New Bike</a></li>
                            <li><a href="{{route('admin.bike.index')}}">New Bike List</a></li>
                            <li><a href="{{route('admin.bike.posts-aproval')}}">Used Bike Posts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('company.create')}}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Manage Company</span><span class="fa arrow"></span></a>

                    </li>

                    <li>
                        <a href="{{route('orders_list')}}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">All Orders</span><span class="fa arrow"></span></a>

                    </li>
                    <li>
                        <a href="{{route('model.create')}}"><i class="fa fa-envelope"></i> <span class="nav-label">Manage Model</span><span class="fa arrow"></span></a>

                    </li>



                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Product Categories</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{route('product_category.create')}}">Create</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Blog Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{route('blog.create')}}">Create</a></li>
                            <li><a href="{{route('blog.index')}}">List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('contact_us.index')}}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Contact Us List</span><span class="fa arrow"></span></a>

                    </li>

                    <li>
                        <a href="{{route('user.index')}}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>

                    </li>




                </ul>

            </div>
        </nav>
