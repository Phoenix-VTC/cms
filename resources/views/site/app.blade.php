<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- Primary Meta Tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $item->title }} - {{ config('app.name') }}</title>
    <meta name="title" content="{{ $item->title }} - {{ config('app.name') }}">
    <meta name="description"
          content="Phoenix is a brand-new VTC, founded by experienced members of the community. We believe in forward thinking, and strive to put our members first!">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ asset('assets/images/branding/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ asset('assets/images/branding/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{ asset('assets/images/branding/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/branding/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('assets/images/branding/favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}">
    <meta name="theme-color" content="#18181B">
    {{-- Stylesheets and Scripts --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- Google Analytics --}}
    @if(Request::hasCookie('phoenix_cookie_consent'))
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-R59FJ1SJVV"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'G-R59FJ1SJVV');
        </script>
    @endif
</head>
<body class="antialiased bg-body text-body font-body bg-gray-900">
@yield('navigation')
@yield('contents')
@yield('footer')
@include('cookieConsent::index')
</body>
</html>
