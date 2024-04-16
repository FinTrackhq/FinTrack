<!doctype html>
<html lang="en" data-theme="forest">
<head >
    @include('components.head')
</head>
<body>
    @include('components.header')
           <main>
               @yield('main')
           </main>
    @include('components.footer')

    <script>
        AOS.init();
    </script>
</body>
</html>
