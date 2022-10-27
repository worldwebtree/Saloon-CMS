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

                                <div class="ml-5 mb-1 border pt-3 pb-3 pl-2 pr-2">
                                    <input type="checkbox" class="form-control d-none" name="gender" id="Gender" placeholder="">
                                    <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 27.png') }}" alt="male-icon" srcset="">
                                    <label for="">male</label>
                                </div>

                                <div class="mb-1 ml-5 mr-5 border pt-3 pb-3 pl-2 pr-2">
                                    <input type="checkbox" class="form-control d-none" name="gender" id="Gender" placeholder="">
                                    <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 28.png') }}" alt="female-icon" srcset="">
                                    <label for="">female</label>
                                </div>

                                <div class="avatar-section border-left">
                                    <label for="" class="ml-5 pl-3">
                                        Submit Picture
                                    </label>
                                    <div class="ml-5 mb-1">
                                        <input type="file" class="form-control bg-transparent rounded-pill d-none" name="avatar" id="Avatar" placeholder="">

                                        <label for="Avatar">
                                            <div class="avatar-content position-relative border rounded pt-4 pb-4 pl-2 pr-2">
                                                <div style="background-color:#D4FAFF; width:15rem; height:50px; border-radius: 2rem;" class="border">
                                                    <span style="top: 2.3rem; left: 1rem; width: 10rem; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" id="file-empty-field" class="position-absolute"></span>
                                                </div>
                                                <img style="top: 1.6rem; left: 12rem;" class="position-absolute" src="{{ asset('Frontend/assets/dashboard-icons/1x/1x/1x/1x/Asset 1.png') }}" alt="camera">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr class="bg-dark w-100">

                    <div class="services-section">
                        <div class="services-content">
                            <h5 class="text-uppercase">
                                service list
                            </h5>
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
  background-color: #444;
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
                            </style>

                            <div class="services text-capitalize">
                                <div class="form-check">
                                    <li style="display: inline-block;" class="bg-transparent border-0">
                                        <div class="border d-flex align-items-center">
                                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 10.png') }}" alt="hair-cut-icon" srcset="">
                                            <label for="" class="pl-3 pr-2">
                                                hair cut
                                            </label>
                                            <label class="switch">
                                                <input type="checkbox" class="default">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
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

        @section('scripts')
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#Avatar").change(function (e) {
                        let fileName = e.target.files[0].name;
                        $("#file-empty-field").text(fileName);
                    });
                });
            </script>
        @endsection
    @endsection
