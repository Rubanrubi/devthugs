
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
</head>

<body class="is-theme-core">
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<!-- Hero and nav -->
<div class="hero is-relative is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <!-- Error Wrapper -->
                <div class="column error-wrap error-centered has-text-centered">
                    <div class="bg-404">500</div>
                    <img src="assets/img/graphics/compositions/error-7-core.svg" data-base-url="assets/img/graphics/compositions/error-7" data-extension=".svg" alt="">
                    <div class="error-caption">
                        <h2>This Site is Under Maintanance.</h2>
                        <p>Please try again or contact the website administrator to get some help.</p>
                        <div class="button-wrap">
                            <a href="/" class="button button-cta btn-outlined is-bold btn-align primary-btn rounded raised">
                                Back to Homepage
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

<script src="{{ mix('assets/js/all.js') }}" as="script" async></script>
</body>

</html>
