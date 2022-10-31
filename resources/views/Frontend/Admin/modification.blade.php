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
        <x-admin-dashboard-header page_title="modification page"/>
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
                            <a name="" id="" class="btn text-dark rounded-pill" href="#" role="button">
                                <span class="d-flex align-items-center">
                                   <i class="fas fa-edit fa-2x text-white"></i> Update Card
                                </span>
                            </a>
                        </div>

                        <div class="add-card">
                            <a name="" id="" class="btn text-dark text-uppercase rounded-pill">
                                <span>
                                    personal info. <i class="fas fa-arrow-circle-down text-white"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="personal-information-section">
                        <div class="personal-info-content">
                            <form action="#" method="POST" class="customer-modification-form text-capitalize border rounded mb-4 pt-3 pb-3 pl-4 pr-4">
                                <div class="row justify-content-around col-lg-12">
                                    <div class="mb-3 col-lg-4">
                                        <label for="fullName" class="form-label pl-3">Full Name</label>
                                        <input type="text" class="form-control bg-transparent rounded-pill w-100" name="fullName" value="{{ $customer['name'] }}" id="FullName" placeholder="">
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="email" class="form-label pl-3">Email</label>
                                        <input type="email" class="form-control bg-transparent rounded-pill w-100" name="email" value="{{ $customer['email'] }}" id="Email" placeholder="">
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="ContactNo" class="form-label pl-3">Contact no</label>
                                        <input type="number" class="form-control bg-transparent rounded-pill w-100" name="contact-no" value="{{ $customer['contact-no'] }}" id="ContactNo" placeholder="">
                                    </div>

                                    @foreach ($customer->saloon_card as $card)
                                        <div class="row justify-content-around align-items-center mt-3 mb-3">
                                            <label for="CardNumber" class="form-label pl-3">Card no</label>

                                            @foreach (json_decode($card['card-number']) as $card_number)
                                                <div class="mb-3 col-lg-2">
                                                    <input type="text" class="form-control bg-transparent rounded-pill w-100" value="{{ $card_number }}" maxlength="4" pattern="\d{4}" required name="card-number[]" id="" placeholder="xxxx">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="mb-3 col-lg-4">
                                            <label for="DateTime">pick date & time*</label>
                                            <input type="datetime-local" class="form-control bg-transparent" name="dateTime" value="{{ $card['card-expiry'] }}" id="DateTime" placeholder="">
                                        </div>
                                    @endforeach

                                    <div class="mb-3 col-lg-4">
                                        <label for="Password">password</label>
                                        <input type="password" class="form-control bg-transparent" name="password" value="{{ $customer['password'] }}" id="Password" placeholder="xxxx">
                                    </div>
                                    <div class="mb-3 col-lg-4">
                                        <label for="Location">location</label>
                                        <input type="text" class="form-control bg-transparent" name="location" value="{{ $customer['location'] }}" id="Location" placeholder="">
                                    </div>

                                    <div style="justify-content:space-around;" class="gender-section row align-items-center">
                                        <label for="gender" class="form-label">Gender</label>
                                            <div style="border:2px solid #dfdfdf;" id="set-border-blue-male" class="ml-5 mb-3 rounded pt-3 pb-3 pl-2 pr-2">
                                                <input type="checkbox" class="form-control d-none" name="gender" value="{{ $customer['gender'] }}" id="Gender-male" placeholder="">
                                                <label for="Gender-male" id="gender-male-label">
                                                    <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 27.png') }}" alt="male-icon" srcset="">
                                                    male
                                                </label>
                                            </div>

                                            <div style="border:2px solid #dfdfdf;" id="set-border-blue-female" class="mb-3 ml-5 mr-5 rounded pt-3 pb-3 pl-2 pr-2">
                                                <input type="checkbox" class="form-control d-none" name="gender" value="{{ $customer['gender'] }}" id="Gender-female" placeholder="">
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
                                                Update Picture
                                            </label>
                                            <div class="ml-5 mb-1">
                                                <input type="file" class="form-control bg-transparent rounded-pill d-none" name="avatar" id="Avatar" placeholder="">

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
                                </div>
                            </form>

                            <div class="add-card">
                                <a name="" id="" class="btn text-dark text-uppercase rounded-pill">
                                    <span>
                                        Update Services. <i class="fas fa-arrow-circle-down text-white"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="services-section mt-5">
                                <div class="services-content">

                                    <div class="services text-capitalize col-lg-12 row">
                                        <div class="col-lg-3 mb-3">
                                            <li style="display: inline-block;" class="bg-transparent border-0 service-list-item">
                                                <div class="setBorder d-flex align-items-center pl-1 pr-1 pt-1 pb-1">
                                                    <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="hair-cut-icon" srcset="">
                                                    <label for="" class="pl-3 pr-2">
                                                        hair cut
                                                    </label>
                                                    <label class="switch">
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        foot massage
                                                    </label>
                                                    <label class="switch">
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        hand wexing
                                                    </label>
                                                    <label class="switch">
                                                        <input type="checkbox" checked class="default">
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
                                                        leg wexing
                                                    </label>
                                                    <label class="switch">
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
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
                                                        <input type="checkbox" checked class="default">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
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
            @if ($customer['gender'] == "male")
                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#Gender-male").attr("checked", "checked");
                    });
                </script>

                @elseif ($customer['gender'] == "female")
                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#Gender-female").attr("checked", "checked");
                    });
                </script>

                @elseif ($customer['gender'] == "custom")
                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#Gender-custom").attr("checked", "checked");
                    });
                </script>
            @endif
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

                    if ( $("#Gender-male").is(":checked") ) {

                        $("#set-border-blue-male").addClass("gender-animate-border");
                    }else {
                        $("#set-border-blue-male").removeClass("gender-animate-border");
                    }

                    if ( $("#Gender-female").is(":checked") ) {

                        $("#set-border-blue-female").addClass("gender-animate-border");
                    }else {
                        $("#set-border-blue-female").removeClass("gender-animate-border");
                    }

                    if ( $("#Gender-custom").is(":checked") ) {

                        $("#set-border-blue-custom").addClass("gender-animate-border");
                    }else {
                        $("#set-border-blue-custom").removeClass("gender-animate-border");
                    }

                });
            </script>
        @endsection
    @endsection
