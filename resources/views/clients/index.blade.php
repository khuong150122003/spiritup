@extends('layouts.app')

@section('nav')
    <ul id="sidebarnav">
        <li class="sidebar-item">
            <a class="sidebar-link active" href="{{ route('home') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Home</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('courses') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Course</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('coaching') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">1 on 1 Coaching</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('advice_board') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Advisory Board</span>
            </a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg sub-navbar">
            <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                    <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <form action="" method="get" class="nav-link filter">
                    <select class="form-select bg-light" aria-label="Default select example">
                        <option selected>Major</option>
                        <option value="1">IT</option>
                        <option value="2">Business</option>
                        <option value="3">Graphic Design</option>
                    </select>

                    <select class="form-select bg-light" aria-label="Default select example">
                        <option selected>Education Level</option>
                        <option value="1">Bachelor</option>
                        <option value="2">Master</option>
                        <option value="3">Ph.D</option>
                    </select>

                    <select class="form-select bg-light" aria-label="Default select example">
                        <option selected>Organizational</option>
                        <option value="1">FPT</option>
                        <option value="2">Greenwich</option>
                        <option value="3">Other</option>
                    </select>


                    <select class="form-select bg-light" aria-label="Default select example">
                        <option selected>Located</option>
                        <option value="1">Ho Chi Minh City</option>
                        <option value="2">Ha Noi</option>
                        <option value="3">Da Nang</option>
                        <option value="4">Can Tho</option>
                    </select>
                    </li>
                </form>
            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                    <a href="#" target="_blank" class="btn"
                        style="background-color: #1d43a6; color: #fff; margin-right: 36px;">Search</a>
            </div>
            </li>
            </ul>
        </nav>
    </div>
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h2 class="fw-semibold sub-heading">Welcome to SPIRITUP</h2>
                        </div>
                    </div>
                    <h2 class="heading-2">📖 Courses</h2>
                    <div class="content">
                        <div class="list-courses">
                            <a href="#">
                                <div class="course">
                                    <h5>Career Orientation</h5>
                                </div>

                            </a>
                            <a href="#">
                                <div class="course">
                                    <h5>Skill Development</h5>
                                </div>

                            </a>
                            <a href="#">
                                <div class="course">
                                    <h5>Social Relation</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h2 class="heading-2">😍 Coming soon</h2>
                    <a href="#">
                        <div class="event-block">
                            <div class="horizontal-block">
                                <img src="{{ url('resources/client/images/backgrounds/rocket.png') }}" class="rocket"
                                    alt="">
                                <div class="infomation">
                                    <div class="lecture-event-info">
                                        <h5 class="title">How to find your suitable job</h5>
                                        <p class="lecture-name">Lecture: PhD. Nguyen Thi Thuy Trang</p>
                                    </div>
                                </div>
                                <div class="date">
                                    <p>15 <span>th</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="level">FOR BEGINNER</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Monthly Earnings -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row alig n-items-start">
                                <div class="col-12">
                                    <h2 class="mb-9 fw-semibold heading-2-right">💕 News</h2>
                                </div>
                            </div>
                            <div class="post">
                                <img src="{{ url('resources/client/images/backgrounds/post-1.png') }}" alt=""
                                    class="post-img">
                                <div class="desc">
                                    <a href="#" class="desc-title"><span
                                            class="desc-title-hightlight">EXHIBITION</span> "Social
                                        Business
                                        Creation 2023".</a>
                                    <p>📸 June 12th, 2023</p>
                                </div>
                            </div>
                            <div class="post">
                                <img src="{{ url('resources/client/images/backgrounds/post-2.png') }}" alt=""
                                    class="post-img">
                                <div class="desc">
                                    <a href="#" class="desc-title"><span
                                            class="desc-title-hightlight">EXHIBITION</span> "Social
                                        Business
                                        Creation 2023".</a>
                                    <p>📸 June 12th, 2023</p>
                                </div>
                            </div>
                            <div class="post">
                                <img src="{{ url('resources/client/images/backgrounds/post-3.png') }}" alt=""
                                    class="post-img">
                                <div class="desc">
                                    <a href="#" class="desc-title"><span
                                            class="desc-title-hightlight">EXHIBITION</span> "Social
                                        Business
                                        Creation 2023".</a>
                                    <p>📸 June 12th, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
