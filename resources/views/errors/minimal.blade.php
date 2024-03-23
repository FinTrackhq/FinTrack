<!DOCTYPE html>
<html lang="en">
    <head>
       @include('components.head')
    </head>
    <body class="antialiased">
    <div class="grid h-screen place-content-center bg-white px-4">
        <div class="text-center">
            <img src="{{asset('file/image/logo/svg/logo.svg')}}" class="object-cover items-center w-auto h-32" alt="FinTrack">
            <h1 class="mt-6 text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">@yield('code')</h1>

            <p class="mt-4 text-gray-500"> @yield('message')</p>
        </div>
    </div>
    </body>
</html>
