<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('theme.backend.layouts.includes.head')
</head>
    <body>
        @include('theme.backend.layouts.includes.loader')
        @include('theme.backend.layouts.includes.header')
        <div id="main">
            <div class="wrapper">

                @include('theme.backend.layouts.includes.left-sidebar')

                <section id="content">
                    @include('theme.backend.layouts.includes.breadcrumbs')
                    <div class="container">
                        @yield('content')
                    </div>
                </section>
            </div>
        </div>
        @include('theme.backend.layouts.includes.footer')
        @include('theme.backend.layouts.includes.foot')
    </body>
</html>