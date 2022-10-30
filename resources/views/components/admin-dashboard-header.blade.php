@props([
    'page_title' => ''
])

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
                    <a href="" class="nav-link text-uppercase"> {{ $page_title }} </a>
                </strong>
            </li>
        </ul>

        {{-- <form action="#" method="post">
            <div class="mb-3 d-flex">
                <label for="" class="border border-right-0 rounded">
                    <i class="fas fa-search"></i>
                </label>
                <input type="search" class="form-control border-left-0 rounded" placeholder="Search">
            </div>
        </form> --}}
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
                    <input class="form-control form-control-lg p-0 form-control-borderless" type="search" placeholder="Search">
                </div>
            </div>
        </form>


        <ul class="navbar-item ml-md-auto">

            <li class="nav-item user-profile-dropdown">
                <a class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    @if (auth()->user()->gender == "male")
                        <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 27.png') }}" alt="user-male">
                        @elseif (auth()->user()->gender == "female")
                        <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 28.png') }}" alt="user-female">
                    @endif
                </a>
            </li>

        </ul>
    </header>
</div>
