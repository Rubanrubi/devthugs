<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    <meta name="theme-color" content="#317EFB"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png') }}"/>
    <link rel="stylesheet" href="{{ mix('assets/css/all.css') }}" as="style">
    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    @livewireStyles
</head>
<body class="is-theme-core">
{{--<div class="pageloader"></div>--}}
{{--<div class="infraloader is-active"></div>--}}
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
                    <h2 class="subtitle">DevThugs provide a collection of tutorials about PHP, Laravel Framework, Codeigniter Framework, Mysql Database, Bootstrap Front-end Framework, Jquery, Node JS, Ajax Example, APIs, CURL Example, Composer Packages Example, AngularJS etc. You will find the best example an article about PHP Language. So you can also search tutorial from bellow search box..</h2>
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

<script src="{{ mix('assets/js/all.js') }}" as="script" async></script>
@livewireScripts
<script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.js" integrity="sha512-P3/SDm/poyPMRBbZ4chns8St8nky2t8aeG09fRjunEaKMNEDKjK3BuAstmLKqM7f6L1j0JBYcIRL4h2G6K6Lew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{--    <script src="assetsassets/js/app.js"></script>--}}
{{--    <script src="assetsassets/js/core.js"></script>--}}
</body>
</html>
