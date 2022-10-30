@extends('Frontend.Admin.index')

    <style>
        /* The switch - the box around the slider */
        .switch {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 14px;
        }

        /* Hide default HTML checkbox */
        .switch input {display:none;}

        /* The slider */
        .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        }

        .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 0;
        bottom: 0;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        }

        input.default:checked + .slider {
        background-color: #29ABE2;
        }
        input.primary:checked + .slider {
        background-color: #2196F3;
        }
        input.success:checked + .slider {
        background-color: #8bc34a;
        }
        input.info:checked + .slider {
        background-color: #3de0f5;
        }
        input.warning:checked + .slider {
        background-color: #FFC107;
        }
        input.danger:checked + .slider {
        background-color: #f44336;
        }

        input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
        border-radius: 34px;
        }

        .slider.round:before {
        border-radius: 50%;
        }
        .setBorder {
            border: 2px solid #dfdfdf !important;
        }

        .gender-animate-border {
            border: 2px solid #29ABE2 !important;
        }
    </style>

    @section('content')
        <!-- BEGIN LOADER -->
        <x-dashboard-loading-animation/>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        <x-admin-dashboard-header page_title="card page"/>
        <!--  END NAVBAR  -->

        <!--  BEGIN NAVBAR  -->
        <div class="sub-header-container">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
            </header>
        </div>
        <!--  END NAVBAR  -->

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
                            <a style="cursor: pointer;" id="Add_card_submit_btn" type="submit" class="btn text-dark rounded-pill" role="button">
                                <img src="{{ asset('Frontend/assets/dashboard-icons/1x/1x/1x/Asset 34.png') }}" alt="customer-add">
                                <span>
                                    Add Card
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="register-customer-form pt-5">
                        <form id="registration_info_form" action="{{ route('admin.store') }}" method="POST" class="text-uppercase">
                            @csrf
                            <div class="row justify-content-around col-lg-12">
                                <div class="mb-3 col-lg-4">
                                    <label for="fullName" class="form-label pl-3">Full Name</label>
                                    <input type="text" class="form-control bg-transparent rounded-pill w-100" required name="fullName" id="FullName" placeholder="">
                                </div>

                                <div class="mb-3 col-lg-4">
                                    <label for="email" class="form-label pl-3">Email</label>
                                    <input type="email" class="form-control bg-transparent rounded-pill w-100" required name="email" id="Email" placeholder="">
                                </div>

                                <div class="mb-3 col-lg-4">
                                    <label for="contact-no" class="form-label pl-3">Contact no</label>
                                    <input type="number" class="form-control bg-transparent rounded-pill w-100" required name="contact-no" id="ContactNo" placeholder="">
                                </div>
                            </div>
                            <hr class="bg-dark w-100">

                            <div style="justify-content:space-around;" class="gender-section row align-items-center">
                                <label for="gender" class="form-label">Gender</label>
                                <div style="border:2px solid #dfdfdf;" id="set-border-blue-male" class="ml-5 mb-3 rounded pt-3 pb-3 pl-2 pr-2">
                                    <input type="checkbox" class="form-control d-none" required value="male" name="gender" id="Gender-male" placeholder="">
                                    <label for="Gender-male" id="gender-male-label">
                                        <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 27.png') }}" alt="male-icon" srcset="">
                                        male
                                    </label>
                                </div>

                                <div style="border:2px solid #dfdfdf;" id="set-border-blue-female" class="mb-3 ml-5 mr-5 rounded pt-3 pb-3 pl-2 pr-2">
                                    <input type="checkbox" class="form-control d-none" required value="female" name="gender" id="Gender-female" placeholder="">
                                    <label for="Gender-female" id="gender-female-label">
                                    <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 28.png') }}" alt="female-icon" srcset="">
                                        female
                                    </label>
                                </div>

                                <div style="border:2px solid #dfdfdf;" id="set-border-blue-custom" class="mb-3 ml-5 mr-5 rounded pt-3 pb-3 pl-2 pr-2">
                                    <input type="checkbox" class="form-control d-none" required value="custom" name="gender" id="Gender-custom" placeholder="">
                                    <label for="Gender-custom" class="d-flex align-items-center" id="gender-custom-label">
                                        <i class="fas fa-user fa-3x text-info pr-2"></i>
                                        custom
                                    </label>
                                </div>

                                <div style="border-left:2px solid #dfdfdf;" class="avatar-section">
                                    <label for="" class="ml-5 pl-3">
                                        Submit Picture
                                    </label>
                                    <div class="ml-5 mb-1">
                                        <input type="file" class="form-control bg-transparent rounded-pill d-none" required name="avatar" id="Avatar" placeholder="">

                                        <label for="Avatar">
                                            <div style="border:2px solid #dfdfdf;" class="avatar-content position-relative rounded pt-4 pb-4 pl-2 pr-2">
                                                <div style="background-color:#D4FAFF; border:2px solid #dfdfdf; width:15rem; height:50px; border-radius: 2rem;" class="">
                                                    <span style="top: 2.3rem; left: 1rem; width: 10rem; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" id="file-empty-field" class="position-absolute"></span>
                                                </div>
                                                <img style="top: 1.6rem; left: 12rem;" class="position-absolute" src="{{ asset('Frontend/assets/dashboard-icons/1x/1x/1x/1x/Asset 1.png') }}" alt="camera">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        {{-- </form> --}}
                    </div>
                    <hr class="bg-dark w-100">

                    <div class="services-section">
                        <div class="services-content">
                            <h5 class="text-uppercase">
                                service lists
                            </h5>

                            <div class="services text-capitalize col-lg-12 row">
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                hair cut
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="hair cut" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 11.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                shampoo
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="shampoo" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 12.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                blow dryer
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="blow dryer" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 13.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                eye brow
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="eye brow" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 14.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                hair treatement
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="hair treatement" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 15.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                hair spa
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="hair spa" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 16.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                facial
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="facial" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 17.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                menicure pedicure
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="menicure pedicure" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 18.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                hand massage
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="hand massage" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 19.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                front massage
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="front massage" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 20.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                waxing full body
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="waxing full body" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 21.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                hand waxing
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="hand waxing" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 22.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                leg waxing
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="leg waxing" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 23.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                under arms
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="under arms" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 24.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                clean up
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="clean up" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 25.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                dtan
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="dtan" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                        <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 26.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                face wax brazilian
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" required name="service[]" value="face wax brazilian" checked class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="bg-dark w-100">

                    <div class="card-section col-lg-12">
                        <div class="card-content pl-5 pr-5 pt-2 pb-2 setBorder rounded">
                            <h5 class="text-uppercase pl-4">
                                Enter Card No.*
                            </h5>
                            <div class="card-number-inputs-section">
                                <div class="card-inputs row justify-content-around align-items-center">
                                    <div class="card-image mb-3">
                                        <img src="{{ asset('Frontend/assets/dashboard-icons/1x/Asset 1.png') }}" alt="" srcset="">
                                    </div>
                                    <input type="text" class="form-control bg-transparent col-lg-2 mb-3" maxlength="4" pattern="\d{4}" required name="card-number[]" id="" placeholder="xxxx">
                                    <input type="text" class="form-control bg-transparent col-lg-2 mb-3" maxlength="4" pattern="\d{4}" required name="card-number[]" id="" placeholder="xxxx">
                                    <input type="text" class="form-control bg-transparent col-lg-2 mb-3" maxlength="4" pattern="\d{4}" required name="card-number[]" id="" placeholder="xxxx">
                                    <input type="text" class="form-control bg-transparent col-lg-2 mb-3" maxlength="4" pattern="\d{4}" required name="card-number[]" id="" placeholder="xxxx">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="bg-dark w-100">

                    <div class="other-credentials-section setBorder rounded col-lg-12">
                        <div class="other-credentials-section-content pt-2 pb-2 row justify-content-around">
                            <div class="mb-3">
                                <label for="DateTime">pick date & time*</label>
                                <input type="datetime-local" class="form-control bg-transparent" required name="dateTime" id="DateTime" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="Password">password</label>
                                <input type="password" class="form-control bg-transparent" required name="password" id="" placeholder="xxxx">
                            </div>
                            <div class="mb-3">
                                <label for="Location">location</label>
                                <input type="text" class="form-control bg-transparent" required name="location" id="" placeholder="">
                            </div>
                        </div>
                    </div>
                    </form>
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
                $(document).ready(function () {
                    $("#Avatar").change(function (e) {
                        let fileName = e.target.files[0].name;
                        $("#file-empty-field").text(fileName);
                    });
                });

                $(document).ready(function () {
                    $("#gender-male-label").click(function () {
                        $("#set-border-blue-male").toggleClass("gender-animate-border");
                    });

                    $("#gender-female-label").click(function () {
                        $("#set-border-blue-female").toggleClass("gender-animate-border");
                    });

                    $("#gender-custom-label").click(function () {
                        $("#set-border-blue-custom").toggleClass("gender-animate-border");
                    });
                });

                // registration form submition
                $(document).ready(function () {
                    $("#Add_card_submit_btn").click(function (e) {
                        $("#registration_info_form").submit();
                    });
                });
            </script>
        @endsection
    @endsection
