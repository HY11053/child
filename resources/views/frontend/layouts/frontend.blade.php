<!DOCTYPE html>
<html lang="zh-cn" data-style="fullscreen" data-menu="centeralign">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title')</title>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='rs-plugin-settings-css'  href='/children/css/settings.css' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='photography-reset-css-css'  href='/children/css/reset.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-wordpress-css-css'  href='/children/css/wordpress.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-animation-css-css'  href='/children/css/animation.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-ilightbox-css'  href='/children/css/ilightbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-jquery-ui-css-css'  href='/children/css/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-mediaelement-css'  href='/children/css/mediaelementplayer.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-flexslider-css'  href='/children/css/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-tooltipster-css'  href='/children/css/tooltipster.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-odometer-theme-css'  href='/children/css/odometer-theme-minimal.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-hw-parallax.css-css'  href='/children/css/hw-parallax.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-screen-css'  href='/children/css/screen.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-fonts-css'  href='/children/css/fronts.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-fontawesome-css'  href='/children/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-custom-css-css'  href='/children/css/custom-php.css' type='text/css' media='all' />
    <link rel='stylesheet' id='kirki-styles-css'  href='/children/css/kirki-styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='photography-responsive-css'  href='/children/css/grid.css' type='text/css' media='all' />
    <script type='text/javascript' src='/children/js/jquery.js'></script>
    <script type='text/javascript' src='/children/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='/children/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='/children/js/jquery.themepunch.revolution.min.js'></script>
    @yield('head')
</head>

<body class="@yield('class')">
<!-- Begin mobile menu -->
<a id="close_mobile_menu" href="javascript:;"></a>

@include('frontend.wrapper')
<!-- Begin template wrapper -->
<div id="wrapper" class="hasbg">

@include('frontend.layouts.head')
    @yield('nextslide')
@yield('ppb_wrapper')
    <div id="controls-wrapper" class="load-item"><div id="controls"><!--Slide captions displayed here--> <div id="slidecaption"></div></div></div>

@include('frontend.layouts.footer')

</div>


<div id="overlay_background">
    @yield('fullscreen')
</div>

<script type='text/javascript' src='/children/js/jquery.requestAnimationFrame.js'></script>
<script type='text/javascript' src='/children/js/jquery.mousewheel.min.js'></script>
<script type='text/javascript' src='/children/js/ilightbox.packed.js'></script>
<script type='text/javascript' src='/children/js/jquery.easing.js'></script>
<script type='text/javascript' src='/children/js/waypoints.min.js'></script>
<script type='text/javascript' src='/children/js/jquery.isotope.js'></script>
<script type='text/javascript' src='/children/js/jquery.masory.js'></script>
<script type='text/javascript' src='/children/js/jquery.tooltipster.min.js'></script>
<script type='text/javascript' src='/children/js/hw-parallax.js'></script>
<script type='text/javascript' src='/children/js/custom_plugins.js'></script>
<script type='text/javascript' src='/children/js/custom.js'></script>

@yield('libs')
</body>
</html>
