<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">



    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#88C0D0"/>
    <meta name="google-site-verification" content="1lARdtuRDrupFGsqUkL4La_pIfuvnzubEZbyxFJoqBE" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="preload">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">


    @yield('styles')

    @stack('header.scripts')

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-72022502-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-72022502-1');
    </script>

    @php(wp_head())

</head>

<body @php(body_class()) >

@php(wp_body_open())

@php(do_action('get_header'))

<div id="app">
    <!-- PAGE LOADER -->
    @include('partials.page-loader')

    <!-- MOBILE NAV -->
    @include('partials.mobile-menu')

    @include('partials.nav')
    <main id="panel"><!-- Needed for mobile menu. This is what slides when you click mobile menu button -->
