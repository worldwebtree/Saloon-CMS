<div class="sidebar-wrapper sidebar-theme border-right">

    <nav id="sidebar">
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="{{ route('admin.dashboard') }}">
                    <div class="">
                        <span class="dash-icon">
                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 4.png') }}" alt="customer-add">
                        </span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{ route('admin.customers') }}">
                    <div class="">
                        <span class="dash-icon">
                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 5.png') }}" alt="customer-list">
                        </span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="#dashboard">
                    <div class="">
                        <span class="dash-icon">
                            <img src="{{ asset('Frontend/assets/dashboard-icons/Asset 8.png') }}" alt="settings-icon">
                        </span>
                    </div>
                </a>
            </li>
        </ul>

    </nav>

</div>
