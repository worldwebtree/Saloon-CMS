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
                    <a href="" class="nav-link text-uppercase"> Card Page </a>
                </strong>
            </li>
        </ul>

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
