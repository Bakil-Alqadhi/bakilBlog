<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="/">
    <link href="{{ asset('back/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('back/dist/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('back/dist/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('back/dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    @stack('stylesheets')
    @livewireStyles

    <link href="{{ asset('back/dist/css/demo.min.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
        <!-- Navbar -->
        @include('back.layouts.nac.header')
        <div class="page-wrapper">
            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('back.layouts.nac.footer')
    <!-- Libs JS -->
    <script src="{{ asset('back/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('back/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062') }}" defer></script>
    <script src="{{ asset('back/dist/libs/jsvectormap/dist/maps/world.js?1684106062') }}" defer></script>
    <script src="{{ asset('back/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('back/dist/js/tabler.min.js?1684106062') }}" defer></script>
    @stack('scripts')
    <script src="{{ asset('/back/dist/js/demo.min.js?1684106062') }}" defer></script>

    @livewireScripts
</body>

</html>
