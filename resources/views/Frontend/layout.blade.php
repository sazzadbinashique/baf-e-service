<!DOCTYPE html>
<html lang="en" data-style-switcher-options="{'showBordersStyle': true, 'showLayoutStyle': true, 'showBackgroundColor': true}">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="105 Advanced Jet Training Unit">
    <meta name="author" content="hasnain nisan">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/frontend/img/apple-touch-icon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">

    @include('frontend.includes.styles')

    @yield('styles')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42715764-11"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-42715764-11');
    </script> -->

</head>

<body data-plugin-page-transition>
    <div class="body">
        @include('frontend.includes.header')
        <div role="main" class="main">
            @yield('content')
        </div>

        @include('frontend.includes.footer')
    </div>

    <!-- <a class="style-switcher-open-loader" href="#" data-base-path="" data-skin-src="" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Style Switcher" aria-label="Style Switcher"><i class="fas fa-cogs"></i>
        <div class="style-switcher-tooltip"><strong>Style Switcher</strong>
            <p>Check out different color options and styles.</p>
        </div>
    </a> -->

    @include('frontend.includes.scripts')

    @yield('scripts')

<script>
    $(document).ready(function(){
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 120) {
                $("#main-nav").addClass("fixed-nav");
                $("#main-nav").removeClass("bg-black");
            } else {
                $("#main-nav").removeClass("fixed-nav");
                $("#main-nav").addClass("bg-black");
            }
        });

    });

</script>
</body>

</html>
