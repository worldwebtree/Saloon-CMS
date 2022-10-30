@extends('Frontend.Customer.index')

    @section('content')
        <!-- BEGIN LOADER -->
        <x-dashboard-loading-animation/>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm">
                <ul class="navbar-item theme-brand flex-row text-center">
                    <li class="nav-item theme-logo">
                        <a href="">
                            <img src="{{ asset('Frontend/assets/dashboard-icons/1x/Asset 31.png') }}" alt="customer-add">
                        </a>
                    </li>

                    <li class="nav-item theme-text border rounded ml-5">
                        <strong>
                            <a class="nav-link">
                                <span>
                                    <i class="fas fa-credit-card fa-1x text-info"></i>
                                    <strong>xxxx xxxx xxxx</strong>
                                </span>
                            </a>
                        </strong>
                    </li>
                </ul>

                <ul class="navbar-item ml-md-auto">
                        <li class="nav-item dropdown border header-user-icon border-info rounded mr-1">
                            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                @if (auth()->user()->gender == "male")
                                    <img width="20" src="{{ asset('Frontend/assets/dashboard-icons/Asset 27.png') }}" alt="user-male">
                                    {{ auth()->user()->name }}
                                    @elseif (auth()->user()->gender == "female")
                                    <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 28.png') }}" alt="user-female">
                                    {{ auth()->user()->name }}
                                @endif
                            </a>
                            <div class="dropdown-menu">
                                <form method="POST" action="{{ route('logout') }}" class="m-0">
                                    @csrf

                                    <a class="dropdown-item"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                    href="{{ route('logout') }}">Logout</a>
                                </form>
                            </div>
                        </li>
                </ul>
            </header>
        </div>
        <!--  END NAVBAR  -->

        {{-- <!--  BEGIN NAVBAR  -->
        <div class="sub-header-container">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
            </header>
        </div>
        <!--  END NAVBAR  --> --}}

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <!--  BEGIN SIDEBAR  -->
            {{-- <x-admin-dashboard-sidebar/> --}}
            <!--  END SIDEBAR  -->

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">

                    <div class="layout-top-spacing d-flex justify-content-between">
                        <div class="add-card">
                            <div class="location-info d-flex align-items-center mb-3">
                                <strong class="text-white pr-3">Progress</strong>
                                <img src="{{ asset('Frontend/assets/dashboard-icons/1x/setting-icon.png') }}" alt="location-icon" srcset="">
                            </div>
                            <div class="text-capitalize d-flex">
                                <h2 class="text-white mr-4">
                                    17 <br>
                                    <strong>servies</strong>
                                </h2>
                                <h2 class="text-white mr-4">
                                    04 <br>
                                    <strong>servies</strong>
                                </h2>
                                <h2 class="text-white">
                                    310 <br>
                                    <strong>remaining time</strong>
                                </h2>
                            </div>
                        </div>
                        <div class="add-card">
                            <span class="text-capitalize">
                                register date <br>
                                <strong class="text-white">21, Dember 2022</strong>
                            </span>
                            <div class="location-info d-flex justify-content-around align-items-center">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/1x/location-icon.png') }}" alt="location-icon" srcset="">
                                <strong class="text-white">jaipur</strong>
                            </div>
                        </div>
                    </div>

                    <div class="services-section row col-lg-12">
                        <div class="service col-lg-2 m-1 unlimited text-center">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 unlimited text-center">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 unlimited text-center">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 unlimited text-center">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>

                        <div class="service col-lg-2 m-1 limited">
                            <div class="service-title">
                                <span>
                                    hair cut
                                </span>
                            </div>

                            <div class="service-image">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="">
                            </div>

                            <div class="service-limit">
                                <span>
                                    unlimited
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-wrapper mt-3">
                    <div class="footer-section f-section-1 text-center">
                        <p class="">Copyright © 2022 <a target="_blank" href="#">WorldWebTree</a>, All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!--  END CONTENT AREA  -->

        </div>
        <!-- END MAIN CONTAINER -->

        @section('scripts')
            <script type="text/javascript">
            //
            </script>
        @endsection
    @endsection
