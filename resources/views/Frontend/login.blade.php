<x-guest-layout>
    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div style="background-color: #575D6B" class="title text-center py-6 uppercase text-gray-400 w-full">
            customer login
        </div>

        <form method="POST" class="px-6 py-6" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <div class="login-form-input">
                        <i class="fas fa-envelope"></i>
                        {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                    <x-text-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-6">
                <div class="login-form-input">
                    <i class="fas fa-lock"></i>
                    {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required autocomplete="current-password" />
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="border-0 bg-gray-600 text-indigo-600 shadow-sm " name="remember">
                    <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                <x-primary-button class="ml-3" style="background-color:#575D6B;">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#email").click(function () {
                // e.preventDefault();
                // alert('hi');
                $(".input-animate-email").toggleClass("animate-input");
            });
        });
    </script>
</x-guest-layout>
