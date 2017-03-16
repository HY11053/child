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
                                <a href="{{$thispicinfo}}" class="img_frame">
                                    <img src="{{$thispicinfo}}" alt="" class="portfolio_img"/>
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
            @foreach($thisClists as $thisClist)
            <div class="element grid classic4_cols " >

                <div class="one_fourth gallery4 classic static filterable gallery_type animated1" >

                    <a href="/portfolio/article/{{$thisClist->id}}">
                        <img src="{{$thisClist->litpic}}" alt="{{$thisClist->title}}" />
                        <div class="portfolio_classic_icon_wrapper">
                            <div class="portfolio_classic_icon_content">
                                <i class="fa fa-mail-forward"></i>
                            </div>
                        </div>
                    </a>

                    <div id="portfolio_desc_7363" class="portfolio_desc portfolio4 filterable">
                        <h5>{{$thisClist->title}}</h5>
                        <div class="post_detail">{{$thisClist->tags}}</div>
                    </div>
                </div>
            </div>
                @endforeach

        </div>
    </div>
    <div class="portfolio_recent_link">
        <a href="/portfolio/"><i class="fa fa-th-large marginright middle"></i><h6>View All Portfolios</h6></a>
    </div>
    <br class="clear"/><br/><hr class="small"/>
    @include('frontend.layouts.footer')
</div>


<div id="overlay_background">
    <div id="fullscreen_share_wrapper">
        <div class="fullscreen_share_content">
            <div id="social_share_wrapper">
                <ul>
                    <li><a class="tooltip" title="Share On Facebook" target="_blank" href=""><i class="fa fa-facebook marginright"></i></a></li>
                    <li><a class="tooltip" title="Share On Twitter" target="_blank" href=""><i class="fa fa-twitter marginright"></i></a></li>
                    <li><a class="tooltip" title="Share On Pinterest" target="_blank" href=""><i class="fa fa-pinterest marginright"></i></a></li>
                    <li><a class="tooltip" title="Share On Google+" target="_blank" href=""><i class="fa fa-google-plus marginright"></i></a></li>
                    <li><a class="tooltip" title="Share by Email" href=""><i class="fa fa-envelope marginright"></i></a></li>
                </ul>
            </div>		</div>
    </div>
</div>
@stop