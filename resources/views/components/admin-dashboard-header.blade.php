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
