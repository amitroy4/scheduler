<div class="sidebar sidebar-style-2">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="index.html" class="logo">
                <img src="{{asset('admin')}}/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20">
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>

        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper">
        <div class="sidebar-content">
            <!--User Profile-->
            <div class="profile-section">
                <div class="user-profile d-flex flex-column align-items-center text-center py-4">
                    <div class="avatar avatar-xl mb-3">
                        <img src="{{asset('admin')}}/img/profile2.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar avatar-minimize avatar-md mb-3 d-none">
                        <img src="{{asset('admin')}}/img/profile2.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <span class="user-name fw-bold mb-1">Samuel Adhikary</span>
                    <span class="user-level op-7">Director</span>
                </div>
                <div class="row menubars border-top border-bottom text-center no-gutters px-4">
                    <div class="col-4 border-right">
                        <a href="#" class="menubar p-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Notifications"><i class="fa fa-bell"></i></a>
                    </div>
                    <div class="col-4 border-right">
                        <a href="#" class="menubar p-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <div class="col-4">
                        <a href="#" class="menubar p-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Email"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <!--User Profile-->
            <div class="nav-sidebar-scroll scrollbar scrollbar-inner">
                <ul class="nav nav-primary">
                    <!--Main Sidebar Menue-->
                    <li class="nav-item active">
                        <a href="calendar.html">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                            <span class="caret"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="widgets.html">
                            <i class="fas fa-desktop"></i>
                            <p>Events</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('client.index')}}">
                            <i class="far fa-calendar-alt"></i>
                            <p>Clients</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="widgets.html">
                            <i class="fas fa-desktop"></i>
                            <p>Company</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="widgets.html">
                            <i class="fas fa-desktop"></i>
                            <p>My Calender</p>
                        </a>
                    </li>
                    <!--To-Do Menue-->
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#email-nav">
                            <i class="far fa-envelope"></i>
                            <p>To-Do List</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="email-nav">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="email-inbox.html">
                                        <span class="sub-item">New To-Do</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email-compose.html">
                                        <span class="sub-item">To-Do List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email-detail.html">
                                        <span class="sub-item">Upcomming To-Do List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Meeting Schedule Menue-->
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#messages-app-nav">
                            <i class="far fa-paper-plane"></i>
                            <p>Meeting Schedule</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="messages-app-nav">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="messages.html">
                                        <span class="sub-item">New Meeting Schedule</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="conversations.html">
                                        <span class="sub-item">Manage Schedule</span>
                                    </a>
                                </li><li>
                                    <a href="conversations.html">
                                        <span class="sub-item">Upcomming Meetinge</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>