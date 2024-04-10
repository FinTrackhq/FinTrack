<!doctype html>
<html lang="en">
<head >
    @include('components.head')
</head>
<body>

    @include('components.header')
           <main>
               @yield('main')
           </main>
    @include('components.footer')
</body>
</html>
