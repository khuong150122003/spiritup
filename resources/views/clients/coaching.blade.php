@extends('layouts.app')
@section('nav')
    <ul id="sidebarnav">
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('home') }}" aria-expanded="false">
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
            <a class="sidebar-link active" href="{{ route('coaching') }}" aria-expanded="false">
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
        <div class="card">
            <div class="card-body">
                <div class="lecture-row">
                    <div class="lecture-description">
                        <h1>1 on 1 Coaching with MBA. Alex Nguyen</h1>
                        <p class="desc-info">1 on 1 coaching is an hour course held over Zoom with an expert
                            MBA, Alex Nguyen.
                            <br />
                            These coaching sessions are unique to you and are based on your individual needs
                        </p>
                        <a href="https://www.facebook.com/messages/t/106109639124260" target="_blank">
                            <button class="btn btn-warning cta">Buy Now for 10$!</button>
                        </a>
                    </div>
                    <div class="lecture-information">
                        <img src="{{ url('resources/client/images/profile/co-trang-lecture.jpg') }}" alt=""
                            class="lecture-avt">
                    </div>
                </div>
                <h2 class="heading-2">Schedule Meeting</h2>
                <div class="schedule-lists">
                    <div class="row-filter">
                        <form action="" method="get" class="nav-link filter">
                            <input type="text" class="bg-white" id="search-2" placeholder="Find your mentor... 🔎">

                            <select class="form-select bg-light" aria-label="Default select example">
                                <option selected>Major</option>
                                <option value="1">IT</option>
                                <option value="2">Business</option>
                                <option value="3">Graphic Design</option>
                            </select>



                            <select class="form-select bg-light" aria-label="Default select example">
                                <option selected>Education Level</option>
                                <option value="1">IT</option>
                                <option value="2">Business</option>
                                <option value="3">Graphic Design</option>
                            </select>

                            <select class="form-select bg-light" aria-label="Default select example">
                                <option selected>Organizational</option>
                                <option value="1">IT</option>
                                <option value="2">Business</option>
                                <option value="3">Graphic Design</option>
                            </select>

                            <select class="form-select bg-light" aria-label="Default select example">
                                <option selected>Located</option>
                                <option value="1">IT</option>
                                <option value="2">Business</option>
                                <option value="3">Graphic Design</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="schedule-lecturers-lists">
                    <div class="lecturer-schedule">
                        <img src="{{ url('resources/client/images/profile/4.png') }}" alt="" class="avt">
                        <div class="info">
                            <h5 class="lecturer-name">Tran Xuan Linh</h5>
                            <ul>
                                <li>Business Administration Lecturer</li>
                                <li>University of Greenwich</li>
                                <li><span class="active-status">Active</span></li>
                            </ul>
                            <button class="btn btn-warning cta">⭐ Schedule Meeting</button>
                        </div>
                    </div>

                    <div class="lecturer-schedule">
                        <img src="{{ url('resources/client/images/profile/3.png') }}" alt="" class="avt">
                        <div class="info">
                            <h5 class="lecturer-name"> Ho Nguyen Phu Bao
                            </h5>
                            <ul>
                                <li>Information Technology Lecturer
                                </li>
                                <li>University of Greenwich</li>
                                <li><span class="active-status">Active</span></li>
                            </ul>
                            <button class="btn btn-warning cta">⭐ Schedule Meeting</button>
                        </div>
                    </div>

                    <div class="lecturer-schedule">
                        <img src="{{ url('resources/client/images/profile/2.png') }}" alt="" class="avt">
                        <div class="info">
                            <h5 class="lecturer-name"> Nguyen Duc Son
                            </h5>
                            <ul>
                                <li>Graphic Design Lecturer</li>
                                <li>University of Greenwich</li>
                                <li><span class="active-status">Active</span></li>
                            </ul>
                            <button class="btn btn-warning cta">⭐ Schedule Meeting</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
