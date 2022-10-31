@extends('Frontend.Admin.index')

    @section('content')
        <!-- BEGIN LOADER -->
        <x-dashboard-loading-animation/>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm bg-white border-bottom">

                <ul class="navbar-item theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="">
                            <img src="{{ asset('Frontend/assets/dashboard-icons/1x/Asset 31.png') }}" alt="customer-add">
                        </a>
                    </li>

                    <li class="nav-item theme-text">
                        <strong>
                            <a href="" class="nav-link text-uppercase"> Customer list page</a>
                        </strong>
                    </li>
                </ul>

                <style>
                    .form-control-borderless {
                        border: none;
                    }

                    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
                        border: none;
                        outline: none;
                        box-shadow: none;
                    }
                    .card {
                        border-radius: 1rem;
                    }
                </style>

                <form action="#" method="POST" class="card card-sm">
                    @csrf
                    <div class="card-body p-0 pl-3 d-flex align-items-center">
                        <div class="col-auto pl-0">
                            <i class="fas fa-search h5 m-0"></i>
                        </div>
                        <!--end of col-->
                        <div class="col pl-0">
                            <input class="form-control form-control-lg p-0 form-control-borderless" id="mySearchInput" type="search" placeholder="Search">
                        </div>
                    </div>
                </form>


                <ul class="navbar-item ml-md-auto">
                    <li class="nav-item dropdown border header-user-icon border-info rounded-circle mr-1">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            @if (auth()->user()->gender == "male")
                                <img width="50" src="{{ asset('Frontend/assets/dashboard-icons/Asset 27.png') }}" alt="user-male">
                                @elseif (auth()->user()->gender == "female")
                                <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 28.png') }}" alt="user-female">
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
                                <table class="table table-primary border-0 rounded customer-list-table" id="myCustomerTable">
                                    <thead class="">
                                        <tr class="">
                                            <th scope="col">full name</th>
                                            <th scope="col">card number</th>
                                            <th scope="col">phone no.</th>
                                            <th scope="col">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $customer)
                                            <tr class="">
                                                <td scope="row">{{ $customer['name'] }}</td>

                                                    @foreach ($customer->saloon_card as $card)

                                                        <td>
                                                            @foreach (json_decode($card['card-number']) as $card_number)
                                                                {{ $card_number ?? 'Not added Yet!' }}
                                                            @endforeach
                                                        </td>

                                                    @endforeach

                                                    <td>{{ $customer['contact-no'] }}</td>
                                                <td>
                                                    <a href="{{ route('admin.modification', $customer->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a> |
                                                    <a href="{{ $customer->id }}">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $customers->links() }}
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
                $(document).ready(function(){

                    $("#mySearchInput").on("keyup", function() {

                        var value = $(this).val().toLowerCase();

                        $("#myCustomerTable tr").filter(function() {

                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                        });

                    });
            </script>
        @endsection
    @endsection
