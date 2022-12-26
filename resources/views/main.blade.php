<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials._stylesheets')

    @yield('pagestyles')

    <title>@yield('title')</title>
    <!-- Insta Doctor -->
</head>

<body>
    @include('partials._navbar')
                @yield('content')
    @include('partials._footer')
    @include('partials._scripts')
    @yield('pagescripts')

</body>

</html>
