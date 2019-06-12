<!DOCTYPE html>
<html>
<head>
    @include('theme.frontend.layouts.includes.head')
    @yield('head')
</head>

<body>
    @include('theme.frontend.layouts.includes.nav')
    <main>
        @yield('content')
    </main>
    @include('theme.frontend.layouts.includes.footer')
    @include('theme.frontend.layouts.includes.foot')
    @yield('foot')
</body>
</html>