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
            <a class="sidebar-link" href="{{ route('coaching') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">1 on 1 Coaching</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link active" href="{{ route('advice_board') }}" aria-expanded="false">
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
                <a href="https://www.facebook.com/messages/t/106109639124260">
                    <img class="bg-page" src="{{ url('resources/client/images/backgrounds/background.png') }}"
                        alt="">
                </a>
                <h2 class="heading-2">Meet the expert</h2>
                <div class="list-lectures">
                    <div class="lecture">
                        <div class="first-row">
                            <img src="{{ url('resources/client/images/profile/co-trang-lecture.jpg') }}" alt=""
                                class="avatar">
                            <div class="lecture-name">
                                <p>Alex Nguyen</p>
                                <p>⭐⭐⭐⭐⭐</p>
                            </div>
                        </div>
                        <div class="lecture-info">
                            <p class="degree">Master of Business Administration</p>
                            <ul>
                                <li>👉 Business Lecturer at Greenwich Vietnam</li>
                                <li>👉 Founder/Mentor at Greenwich Marcom Innovation</li>
                            </ul>
                        </div>
                        <p class="statitic"><span>500</span> Statisfied customers</p>
                    </div>

                    <div class="lecture">
                        <div class="first-row">
                            <img src="{{ url('resources/client/images/profile/victor.png') }}" alt=""
                                class="avatar">
                            <div class="lecture-name">
                                <p>Victor Cat</p>
                                <p>⭐⭐⭐⭐⭐</p>
                            </div>
                        </div>
                        <div class="lecture-info">
                            <p class="degree">CFO - Co Founder DEHR Network</p>
                            <ul>
                                <li>👉 Risk Management Director at PNJ</li>
                                <li>👉 Head of Risk Management and Compliance at Prudential Vietnam Assurance</li>
                            </ul>
                        </div>
                        <p class="statitic"><span>498</span> Statisfied customers</p>
                    </div>


                    <div class="lecture">
                        <div class="first-row">
                            <img src="{{ url('resources/client/images/profile/co-linh.png') }}" alt=""
                                class="avatar">
                            <div class="lecture-name">
                                <p>Linh Nguyens</p>
                                <p>⭐⭐⭐⭐⭐</p>
                            </div>
                        </div>
                        <div class="lecture-info">
                            <p class="degree">CMO of Techfarm digital company</p>
                            <ul>
                                <li>👉 More than 8 years of experience in the Fashion and Technology
                                    industry,specializing in Strateg, Business Development, Marketing and Data Analysis
                                </li>

                            </ul>
                        </div>
                        <p class="statitic"><span>489</span> Statisfied customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
