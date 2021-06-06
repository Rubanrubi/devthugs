<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('/img/favicon.png') }}"/>

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    {{--        <link href="{{ mix('css/mapbox-gl.css')}}" rel="stylesheet" />--}}
    <link rel="stylesheet" href="{{ mix('/css/all.css') }}" as="style">
    {{--        <link id="theme-sheet" rel="stylesheet" href="{{ mix('assets/css/core.css')}}">--}}
</head>
<body class="is-theme-core">
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<!-- Hero (Parallax) and nav -->
<div class="hero is-app-grey">

@include('includes.navbar')

<!-- Hero image -->
    <div id="main-hero" class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vcentered">
                <div class="column is-6 is-offset-3 has-text-centered is-subheader-caption">
                    <h1 class="title is-2">
                        BLOG
                    </h1>
                    <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid enim? Immo videri
                        fortasse. Compensabatur, inquit.</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')

@include('includes.footer')

@include('includes.sidebar')

@include('includes.chart-bot')

<script async>
    // Make sure sw are supported
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker
                .register(window.location.origin +'/sw_cached_pages.js')
                .then(reg => console.log('Service Worker: Registered (Pages)'))
                .catch(err => console.log(`Service Worker: Error: ${err}`));
        });
    }
</script>

<script src="{{ mix('/js/all.js') }}" as="script" async></script>

{{--    <script src="assets/js/app.js"></script>--}}
{{--    <script src="assets/js/core.js"></script>--}}
</body>
</html>
