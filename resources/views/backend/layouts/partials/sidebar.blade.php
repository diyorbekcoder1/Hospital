<header class="main-nav">
<nav>
    <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">
            <ul class="nav-menu custom-scrollbar" >
                <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>{{ trans('labels.general') }}</h6>
                    </div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('home')}}"><i data-feather="home"></i><span>Dashboard</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('contact.index')}}"><i data-feather="align-justify"></i><span>Contact</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('blog.index')}}"><i
                            data-feather="align-justify"></i><span>Blogs</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('employees.index')}}"><i
                            data-feather="align-justify"></i><span>Employees</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('event.index')}}"><i
                            data-feather="align-justify"></i><span>Events</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('page.index')}}"><i
                            data-feather="align-justify"></i><span>Pages</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('setting.index')}}"><i
                            data-feather="align-justify"></i><span>Settings</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('usefullink.index')}}"><i
                            data-feather="align-justify"></i><span>Usefullink</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('category.index')}}"><i
                            data-feather="align-justify"></i><span>Categories</span></a>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>{{ trans('labels.user') }}</h6>
                    </div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{url('admin/users')}}"><i data-feather="home"></i><span>Users</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{url('admin/roles')}}"><i data-feather="align-justify"></i><span>Roles</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{url('admin/permissions')}}"><i data-feather="align-justify"></i><span>Permission</span></a>
                </li>


                <li class="sidebar-main-title">
                    <div>
                        <h6>{{ trans('labels.settings') }}</h6>
                    </div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('home')}}"><i data-feather="home"></i><span>Dashboard</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('contact.index')}}"><i data-feather="align-justify"></i><span>Contact</span></a>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="{{route('blog.index')}}"><i
                            data-feather="align-justify"></i><span>Blogs</span></a>
                </li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
</nav>
</header>
