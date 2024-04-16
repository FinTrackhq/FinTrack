<!DOCTYPE html>
<html lang="en" data-theme="forest">
    <head>
       @include('components.head')
    </head>
    <body class="antialiased">
    <div class="hero min-h-screen" style="background-image: url('{{asset('file/image/screenshots/bg.jpg')}}');">
        <div class="hero-overlay bg-opacity-30"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">@yield('code')</h1>
                <p class="mb-5">@yield('message')</p>
                <a class="btn btn-primary" href="{{url()->previous()}}"> <x-heroicon-o-arrow-long-left  class="w-4"/>Back</a>
                <a class="btn btn-info" href="https://t.me/ya_hannes"> <x-heroicon-s-user class="w-4"/>Support</a>
            </div>
        </div>
    </div>
    </body>
</html>
