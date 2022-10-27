@extends('Frontend.Admin.index')

    @section('content')
        <!-- BEGIN LOADER -->
        <x-dashboard-loading-animation/>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        <x-admin-dashboard-header/>
        <!--  END NAVBAR  -->

        {{-- <!--  BEGIN NAVBAR  -->
        <div class="sub-header-container">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

                <ul class="navbar-nav flex-row">
                    <li>
                        <div class="page-header">

                            <nav class="breadcrumb-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>Sales</span></li>
                                </ol>
                            </nav>

                        </div>
                    </li>
                </ul>

            </header>
        </div>
        <!--  END NAVBAR  --> --}}

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <!--  BEGIN SIDEBAR  -->
            <x-admin-dashboard-sidebar/>
            <!--  END SIDEBAR  -->

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">

                    <div class="layout-top-spacing">
                        <div class="add-card float-right">
                            <a name="" id="" class="btn text-dark rounded-pill" href="#" role="button">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/1x/1x/1x/Asset 34.png') }}" alt="customer-add">
                                <span>
                                    Add Card
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="register-customer-form pt-5">
                        <form action="" method="post" class="text-uppercase">
                            <div class="d-flex justify-content-around">
                                <div class="mb-1">
                                    <label for="fullName" class="form-label pl-3">Full Name</label>
                                    <input type="text" class="form-control bg-transparent rounded-pill" name="fullName" id="FullName" placeholder="">
                                </div>

                                <div class="mb-1">
                                    <label for="email" class="form-label pl-3">Email</label>
                                    <input type="email" class="form-control bg-transparent rounded-pill" name="email" id="Email" placeholder="">
                                </div>

                                <div class="mb-1">
                                    <label for="contact-no" class="form-label pl-3">Contact no</label>
                                    <input type="number" class="form-control bg-transparent rounded-pill" name="contact-no" id="ContactNo" placeholder="">
                                </div>
                            </div>
                            <hr class="bg-dark w-100">

                            <div class="gender-section d-flex align-items-center">
                                <label for="gender" class="form-label">Gender</label>
                                <div class="ml-5 mb-1">
                                    <input type="text" class="form-control bg-transparent rounded-pill" name="gender" id="Gender" placeholder="">
                                </div>
                                <div class="mb-1 ml-5 mr-5">
                                    <input type="text" class="form-control bg-transparent rounded-pill" name="gender" id="Gender" placeholder="">
                                </div>

                                <div class="avatar-section border-left">
                                    <div class="ml-5 mb-1">
                                        <input type="file" class="form-control bg-transparent rounded-pill d-none" name="avatar" id="Avatar" placeholder="">
                                        <label for="Avatar">
                                            <span>wow</span>
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/1x/1x/1x/1x/Asset 1.png') }}" alt="camera">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                </div>
            </div>
            <!--  END CONTENT AREA  -->

        </div>
        <!-- END MAIN CONTAINER -->
    @endsection
