@extends('frontend.layouts.frontend')
@section('body')
    <body class="home page page-id-3602 page-parent page-template page-template-gallery page-template-gallery-php">
    <!-- Begin mobile menu -->
    <a id="close_mobile_menu" href="javascript:;"></a>

@include('frontend.wrapper')
    <!-- Begin template wrapper -->
    <div id="wrapper" class="hasbg">

@include('frontend.layouts.head')
        <a id="nextslide" class="load-item"></a>

        <div id="controls-wrapper" class="load-item"><div id="controls"><!--Slide captions displayed here--> <div id="slidecaption"></div></div></div>

        <div class="footer_bar fullscreen  noborder">
            <div class="footer_bar_wrapper fullscreen">
                <div id="copyright">nearanddear © 2015 | All Rights Reserved | TEL.02-499-5010 </div><br class="clear"/>
                <a id="toTop"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>

    </div>


    <div id="overlay_background">
        <div id="fullscreen_share_wrapper">
            <div class="fullscreen_share_content">
                <div id="social_share_wrapper">
                    <ul>
                        <li><a class="tooltip" title="Share On Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://nearanddear.kr/"><i class="fa fa-facebook marginright"></i></a></li>
                        <li><a class="tooltip" title="Share On Twitter" target="_blank" href="https://twitter.com/intent/tweet?original_referer=http://nearanddear.kr/&amp;url=http://nearanddear.kr/"><i class="fa fa-twitter marginright"></i></a></li>
                        <li><a class="tooltip" title="Share On Pinterest" target="_blank" href="http://www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fnearanddear.kr%2F&amp;media=http%3A%2F%2Fnearanddear.kr%2Fwp-includes%2Fimages%2Fmedia%2Fdefault.png"><i class="fa fa-pinterest marginright"></i></a></li>
                        <li><a class="tooltip" title="Share On Google+" target="_blank" href="https://plus.google.com/share?url=http://nearanddear.kr/"><i class="fa fa-google-plus marginright"></i></a></li>
                        <li><a class="tooltip" title="Share by Email" href="mailto:someone@example.com?Subject=near)Home"><i class="fa fa-envelope marginright"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @section('libs')
        <link rel='stylesheet' id='photography-supersized-css'  href='/children/css/supersized.css' type='text/css' media='all' />
        <link rel='stylesheet' id='photography-supersized-shutter-css'  href='/children/css/supersized.shutter.css' type='text/css' media='all' />
        <script type='text/javascript' src='/children/js/supersized.3.2.7.min.js'></script>
        <script type='text/javascript' src='/children/js/supersized.shutter.min.js'></script>
        <script type='text/javascript' src='/children/js/jquery.touchwipe.1.1.1.js'></script>
        <script type='text/javascript' src='/children/js/script-supersized-gallery.js?gallery_id=6274&#038;cover=1'></script>
        @stop

@stop
