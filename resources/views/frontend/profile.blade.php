@extends('frontend.layouts.frontend')
@section('body')
<body class="page page-id-7017 page-template page-template-portfolio-3-contained page-template-portfolio-3-contained-php">

<!-- Begin mobile menu -->
<a id="close_mobile_menu" href="javascript:;"></a>

@include('frontend.wrapper')
<!-- Begin template wrapper -->
<div id="wrapper" >


@include('frontend.layouts.head')
    <div id="page_caption" class="  single_gallery">
        <div class="page_title_wrapper">
            <div class="page_title_inner">
                <h1 >作品欣赏</h1>
                <hr class="title_break">
                <div class="page_tagline">
                    SAMPLE SHOW
                    <br/>
                    Hiding your temperament, now you walk through the road<br />
                    People who read the book and love once.
                    <br /><br />
                    Colorful Baby Studio
                    <br /><br />
                </div>
            </div>
        </div>

    </div>

    <!-- Begin content -->
    <div id="page_content_wrapper" class="">
        <!-- Begin content -->

        <div class="inner">

            <div class="inner_wrapper nopadding">

                <div id="page_main_content" class="sidebar_content full_width nopadding fixed_column">

                    <div id="portfolio_filter_wrapper" class="gallery three_cols portfolio-content section content clearfix" data-columns="3">

                        @foreach($thisPortfolioLists as $thisPortfolioList)
                        <div class="element grid classic3_cols " data-type="">

                            <div class="one_third gallery3 static filterable gallery_type animated2 portfolio_type" data-id="post-2">

                                <a href="/portfolio/article/{{$thisPortfolioList->id}}">
                                    <img src="{{$thisPortfolioList->litpic}}" alt="{{$thisPortfolioList->title}}" />
                                    <div id="portfolio_desc_7363" class="portfolio_title">
                                        <div class="table">
                                            <div class="cell">
                                                <h5>{{$thisPortfolioList->title}}</h5>
                                                <div class="post_detail">{{$thisPortfolioList->tags}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        @endforeach

                    </div>

                    <br class="clear"/>

                    <div class="pagination">
                       {!! $thisPortfolioLists->links()!!}
                    </div>

                    <div class="pagination_detail">
                        Page {!! $thisPortfolioLists->currentPage() !!} of {!! $thisPortfolioLists->count() !!}
                    </div>

                    <br class="clear"/><br/>

                </div>

            </div>
        </div>
        <br class="clear"/><br/>
    </div>
    @include('frontend.layouts.footer')

</div>
<div id="overlay_background">
</div>
@stop
