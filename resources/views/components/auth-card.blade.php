<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div style="background-color: rgba(0,0,0,.5)" class="w-full sm:max-w-md mt-6 px-6 py-4 border overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
