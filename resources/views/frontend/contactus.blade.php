@extends('frontend.layouts.frontend')
@section('body')
<body class="page page-id-6977 page-template-default">

<a id="close_mobile_menu" href="javascript:;"></a>

@include('frontend.wrapper')
<!-- Begin template wrapper -->
<div id="wrapper" >

@include('frontend.layouts.head')
    <div class="ppb_wrapper  ">
        <div class="map_shortcode_wrapper" id="map1487416176512171305" style="width:600px;height:500px;margin: 0 auto;">
            <iframe width="604" height="525" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/flAXj"></iframe>
        </div>
        <div  class="one withsmallpadding ppb_text" style="text-align:center; padding:30px 0 30px 0;" >
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner"><div style="margin:auto;width:100%">
                            <div class="googlefont" style="font-family:NanumGothic;font-size:12px;">
                                灵石路709号，万灵谷花园A010栋，靠近万荣路口
                            </div>
                            <p>咨询电话：<br />
                                13761777735</p>
                            <p>营业时间：9:00-21:00<br />
                                Colorful Baby Studio</p>
                            <div class="googlefont" style="font-family:NanumGothic;font-size:12px;"><br />
                                Hiding your temperament, now you walk through the road<br />
                                people who read the book and love once<br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.layouts.footer')

</div>


<div id="overlay_background">
</div>
@stop
