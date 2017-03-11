@extends('frontend.layouts.frontend')
@section('body')
<body class="single single-portfolios postid-7354">

<!-- Begin mobile menu -->
<a id="close_mobile_menu" href="javascript:;"></a>

@include('frontend.wrapper')
<!-- Begin template wrapper -->
<div id="wrapper" >


@include('frontend.layouts.head')

    <div class="ppb_wrapper  ">
        <div  class="one withsmallpadding ppb_header " style="text-align:center;padding:30px 0 30px 0;" >
            <div class="standard_wrapper"><div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin:auto;width:100%">
                            <h2 class="ppb_title" style="">{{$thisinfos->title}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="one withsmallpadding ppb_text" style="text-align:center; padding:30px 0 30px 0;" >
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin:auto;width:100%">
                            <p>{{$thisinfos->shortitle}}<br />
                                {{$thisinfos->created_at}}<br />
                                {{$thisinfos->title}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($thispicinfos as $index=>$thispicinfo)
        <div class="standard_wrapper">
            <div  class="one" @if($index==0) style="padding:0px 0 0px 0;" @else style="padding:100px 0 100px 0;" @endif >
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div class="image_classic_frame expand animate">
                            <div class="image_wrapper">
                                <a href="http://www.child.com{{$thispicinfo}}" class="img_frame">
                                    <img src="http://www.child.com{{$thispicinfo}}" alt="" class="portfolio_img"/>
                                </a>
                            </div>
                            <div class="image_caption">{{$thisinfos->title}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <br class="clear"/><br/>
    <div class="standard_wrapper">
        <hr class="small"/><br class="clear"/><br/>
        <h6 class="subtitle"><span>Recent Portfolios</span></h6><hr class="title_break"/>
        <br class="clear"/>
        <div class="portfolio_filter_wrapper gallery four_cols portfolio-content section content clearfix" data-columns="4">
            <div class="element grid classic4_cols " data-type="">

                <div class="one_fourth gallery4 classic static filterable gallery_type animated1" data-id="post-1">

                    <a href="http://nearanddear.kr/?portfolios=claraella-2">
                        <img src="http://nearanddear.kr/wp-content/uploads/2016/01/claraella2-feature.jpg" alt="clara&amp;ella.2" />
                        <div class="portfolio_classic_icon_wrapper">
                            <div class="portfolio_classic_icon_content">
                                <i class="fa fa-mail-forward"></i>
                            </div>
                        </div>
                    </a>


                    <div id="portfolio_desc_7363" class="portfolio_desc portfolio4 filterable">
                        <h5>clara&amp;ella.2</h5>
                        <div class="post_detail">little fairy at garret</div>
                    </div>
                </div>
            </div>
            <div class="element grid classic4_cols " data-type="">

                <div class="one_fourth gallery4 classic static filterable gallery_type animated1" data-id="post-1">

                    <a href="http://nearanddear.kr/?portfolios=claraella-1">
                        <img src="http://nearanddear.kr/wp-content/uploads/2016/01/clara1-feature.jpg" alt="clara&amp;ella.1" />
                        <div class="portfolio_classic_icon_wrapper">
                            <div class="portfolio_classic_icon_content">
                                <i class="fa fa-mail-forward"></i>
                            </div>
                        </div>
                    </a>


                    <div id="portfolio_desc_7354" class="portfolio_desc portfolio4 filterable">
                        <h5>clara&amp;ella.1</h5>
                        <div class="post_detail">little fairy at garret</div>
                    </div>
                </div>
            </div>
            <div class="element grid classic4_cols " data-type="">

                <div class="one_fourth gallery4 classic static filterable gallery_type animated1" data-id="post-1">

                    <a href="http://nearanddear.kr/?portfolios=elio-1">
                        <img src="http://nearanddear.kr/wp-content/uploads/2016/01/elio1-feature.jpg" alt="elio.1" />
                        <div class="portfolio_classic_icon_wrapper">
                            <div class="portfolio_classic_icon_content">
                                <i class="fa fa-mail-forward"></i>
                            </div>
                        </div>
                    </a>


                    <div id="portfolio_desc_7285" class="portfolio_desc portfolio4 filterable">
                        <h5>elio.1</h5>
                        <div class="post_detail">cinnamon at floor</div>
                    </div>
                </div>
            </div>
            <div class="element grid classic4_cols " data-type="">

                <div class="one_fourth gallery4 classic static filterable gallery_type animated1" data-id="post-1">

                    <a href="http://nearanddear.kr/?portfolios=logan-5">
                        <img src="http://nearanddear.kr/wp-content/uploads/2016/01/logan5-feature.jpg" alt="logan.5" />
                        <div class="portfolio_classic_icon_wrapper">
                            <div class="portfolio_classic_icon_content">
                                <i class="fa fa-mail-forward"></i>
                            </div>
                        </div>
                    </a>


                    <div id="portfolio_desc_7279" class="portfolio_desc portfolio4 filterable">
                        <h5>logan.5</h5>
                        <div class="post_detail">white-fur at garret</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio_recent_link">
        <a href="http://nearanddear.kr/?page_id=7017"><i class="fa fa-th-large marginright middle"></i><h6>View All Portfolios</h6></a>
    </div>
    <br class="clear"/><br/><hr class="small"/>
    @include('frontend.layouts.footer')

</div>


<div id="overlay_background">
    <div id="fullscreen_share_wrapper">
        <div class="fullscreen_share_content">
            <div id="social_share_wrapper">
                <ul>
                    <li><a class="tooltip" title="Share On Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://nearanddear.kr/?portfolios=claraella-1"><i class="fa fa-facebook marginright"></i></a></li>
                    <li><a class="tooltip" title="Share On Twitter" target="_blank" href="https://twitter.com/intent/tweet?original_referer=http://nearanddear.kr/?portfolios=claraella-1&amp;url=http://nearanddear.kr/?portfolios=claraella-1"><i class="fa fa-twitter marginright"></i></a></li>
                    <li><a class="tooltip" title="Share On Pinterest" target="_blank" href="http://www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fnearanddear.kr%2F%3Fportfolios%3Dclaraella-1&amp;media=http%3A%2F%2Fnearanddear.kr%2Fwp-includes%2Fimages%2Fmedia%2Fdefault.png"><i class="fa fa-pinterest marginright"></i></a></li>
                    <li><a class="tooltip" title="Share On Google+" target="_blank" href="https://plus.google.com/share?url=http://nearanddear.kr/?portfolios=claraella-1"><i class="fa fa-google-plus marginright"></i></a></li>
                    <li><a class="tooltip" title="Share by Email" href="mailto:someone@example.com?Subject=clara&amp;ella.1"><i class="fa fa-envelope marginright"></i></a></li>
                </ul>
            </div>		</div>
    </div>
</div>
@stop