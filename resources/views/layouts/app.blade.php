<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    @include('includes.header')
    @yield('css')
</head>
<body>
    @include('includes.extended_header')

    <main>
        @yield('content')
    </main>

    @include('includes.footer')
</body>
</html>
