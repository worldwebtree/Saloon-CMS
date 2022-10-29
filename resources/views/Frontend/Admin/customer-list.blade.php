@extends('Frontend.Admin.index')

    @section('content')
        <!-- BEGIN LOADER -->
        <x-dashboard-loading-animation/>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        <x-admin-dashboard-header>
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
                                <img src="{{ asset('Frontend/assets/dashboard-icons/1x/Asset-customers.png') }}" alt="customer-add">
                                <span>
                                    Customer List
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="customer-list-section">
                        <div class="customer-list-content">
                            <div class="table-responsive">
                                <table class="table table-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">Column 1</th>
                                            <th scope="col">Column 2</th>
                                            <th scope="col">Column 3</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td scope="row">R1C1</td>
                                            <td>R1C2</td>
                                            <td>R1C3</td>
                                        </tr>
                                        <tr class="">
                                            <td scope="row">Item</td>
                                            <td>Item</td>
                                            <td>Item</td>
                                        </tr>
                                    </tbody>
                                </table>
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
