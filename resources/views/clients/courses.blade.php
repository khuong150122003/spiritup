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
            <a class="sidebar-link active" href="{{ route('courses') }}" aria-expanded="false">
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
    <!--  Header End -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <ul class="list-status">
                    <li><a href="#" class="status-link active">All</a></li>
                    <li><a href="#" class="status-link">Active</a></li>
                    <li><a href="#" class="status-link">Completed</a></li>
                </ul>
                <div class="wrapper-lecture">
                    <div class="course-block">
                        <div class="list-courses-page">
                            <a href="#">
                                <div class="course-page">
                                    <h5>Career Orientation</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="course-page">
                                    <h5>Skill Development</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="course-page">
                                    <h5>Social Relation</h5>
                                </div>
                            </a>
                        </div>
                        <div class="list-events">
                            <a href="#">
                                <div class="event-block">
                                    <div class="horizontal-block">
                                        <img src="{{ url('resources/client/images/backgrounds/rocket.png') }}"
                                            class="rocket" alt="">
                                        <div class="infomation">
                                            <div class="lecture-event-info">
                                                <h5 class="title">What is Career Planning? Career Exploration
                                                    Infographic</h5>
                                                <p class="lecture-name">Lecture: PhD. Nguyen Thi Thuy Trang</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-evaluate">
                                        <h5 class="level">BEGINNER</h5>
                                        <div class="star">⭐⭐⭐⭐⭐</div>
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="event-block">
                                    <div class="horizontal-block">
                                        <img src="{{ url('resources/client/images/backgrounds/rocket.png') }}"
                                            class="rocket" alt="">
                                        <div class="infomation">
                                            <div class="lecture-event-info">
                                                <h5 class="title">A Tactical Approach to Reach the Top</h5>
                                                <p class="lecture-name">Lecture: PhD. Tran Xuan Linh</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-evaluate">
                                        <h5 class="level">INTERMEDIATE</h5>
                                        <div class="star">⭐⭐⭐⭐⭐</div>
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="event-block">
                                    <div class="horizontal-block">
                                        <img src="{{ url('resources/client/images/backgrounds/rocket.png') }}"
                                            class="rocket" alt="">
                                        <div class="infomation">
                                            <div class="lecture-event-info">
                                                <h5 class="title">How to Build a Social Relations in the
                                                    Workplace?</h5>
                                                <p class="lecture-name">Lecture: PhD. Nguyen Thi Thuy Trang</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-evaluate">
                                        <h5 class="level">ALL LEVEL</h5>
                                        <div class="star">⭐⭐⭐⭐⭐</div>
                                    </div>
                                </div>
                            </a>



                        </div>
                    </div>

                    <div class="lecture-video-block">
                        <div class="wrapper-inside">
                            <img src="{{ url('resources/client/images/profile/thay-tan.png') }}" alt=""
                                class="video-lecture">
                            <div class="row-evaluate-2">
                                <div class="star">⭐⭐⭐⭐⭐</div>
                                <h5 class="row-evaluate-level">Beginner</h5>
                            </div>
                            <div class="lecture-desc-video">
                                <h5>Defining Your Career Objective and Action Plan</h5>
                                <p class="desc">
                                    In this course, you will explorehow to define your career objective by
                                    gaining insights
                                    into your interests, skills, and values. Additionally, you will learn
                                    how to create a
                                    strategic plan that outlines the necessary steps to achieveyour
                                    professional goals.
                                </p>
                                <div class="row-lecture">
                                    <img src="{{ url('resources/client/images/profile/thay-tan-avt.png') }}" alt=""
                                        class="avatar">
                                    <div class="row-lecture-block">
                                        <p class="lecture-name-video">Nguyen Nhat Tan</p>
                                        <p>Director of Greenwich Vietnam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
