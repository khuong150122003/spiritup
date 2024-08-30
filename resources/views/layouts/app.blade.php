<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPIRITUP</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('resources/client/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ url('resources/css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('resources/css/styles.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{ url('') }}" class="text-nowrap logo-img">
                        <img src="{{ url('resources/client/images/logos/logo white.png') }}" width="180"
                            alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    @yield('nav')
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <form action="" method="get" class="nav-link">
                            <input type="text" class="bg-white" id="search" placeholder="Find your mentor... 🔎">
                        </form>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item"><a class="nav-link authen"
                                            href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                @endif
                                @if (Route::has('register'))
                                    <li class="nav-item"><a class="nav-link authen"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <a href="#" class="btn btn-light icon"><i class="bi bi-bell-fill"></i></a>
                                <a href="#" class="btn btn-light icon"><i class="bi bi-inbox-fill"></i></a>
                                <li class="nav-item dropdown">
                                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ url('resources/client/images/profile/user-1.jpg') }}" alt=""
                                            width="35" height="35" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                        aria-labelledby="drop2">
                                        <div class="message-body">
                                            <a href="javascript:void(0)"
                                                class="d-flex align-items-center gap-2 dropdown-item">
                                                <i class="ti ti-user fs-6"></i>
                                                <p class="mb-0 fs-3">My Profile</p>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="d-flex align-items-center gap-2 dropdown-item">
                                                <i class="ti ti-mail fs-6"></i>
                                                <p class="mb-0 fs-3">My Account</p>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="d-flex align-items-center gap-2 dropdown-item">
                                                <i class="ti ti-list-check fs-6"></i>
                                                <p class="mb-0 fs-3">My Task</p>
                                            </a>
                                            <a href="{{ route('logout') }}"
                                                class="btn btn-outline-primary mx-3 mt-2 d-block"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            @yield('content')

        </div>
    </div>
    </div>


    <script src="{{ url('resources/client/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('resources/client/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('resources/js/app.min.js') }}"></script>
    <script src="{{ url('resources/js/dashboard.js') }}"></script>
</body>

</html>
