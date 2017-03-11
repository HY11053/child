@extends('frontend.layouts.frontend')
@section('body')
<body class="page page-id-6845 page-template-default">
<!-- Begin mobile menu -->
<a id="close_mobile_menu" href="javascript:;"></a>

@include('frontend.wrapper')
<!-- Begin template wrapper -->
<div id="wrapper" >
@include('frontend.layouts.head')
    <div class="ppb_wrapper  ">
        <div  class="one withsmallpadding ppb_header " style="text-align:center;padding:30px 0 30px 0;" >
            <div class="standard_wrapper">
                <div class="page_content_wrapper">
                    <div class="inner">
                        <div style="margin:auto;width:100%">
                            <h2 class="ppb_title" style="">在线报价</h2>
                            <hr class="title_break center" style=""/><div class="ppb_header_content">
                                <p>请填写您的真实信息，方便我们更好为您服务</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="standard_wrapper">
            <div  class="one_third withsmallpadding ppb_text" style="padding:30px 0 30px 0;" >
                <div class="standard_wrapper">
                    <div class="page_content_wrapper">
                        <div class="inner">
                            <div style="margin:auto;width:100%">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="standard_wrapper">
            <div  class="one_third withsmallpadding ppb_text" style="padding:30px 0 30px 0;" >
                <div class="standard_wrapper">
                    <div class="page_content_wrapper">
                        <div class="inner">
                            <div style="margin:auto;width:100%">
                                <!-- Fast Secure Contact Form plugin 4.0.38 - begin - FastSecureContactForm.com -->
                                <div style="clear:both;"></div>
                                <div id="FSContact2" style="width:99%; max-width:400px;">
                                    <form action="/admin/phone/create" method="POST" >
                                        {{csrf_field()}}
                                        <div id="fscf_div_clear2_0" style="clear:both;">
                                            <div id="fscf_div_field2_0" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                                <div style="text-align:left; padding-top:5px;">
                                                    <label style="text-align:left;" for="fscf_name2">您的称呼</label>
                                                </div>
                                                <div style="text-align:left;">
                                                    <input style="text-align:left; margin:0; width:100%; max-width:500px;height:25px;" type="text" id="fscf_name2" name="name" value=""  />
                                                </div>
                                            </div>
                                        </div>

                                        <div id="fscf_div_clear2_2" style="clear:both;">
                                            <div id="fscf_div_field2_2" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                                <div style="text-align:left; padding-top:5px;">
                                                    <label style="text-align:left;" for="fscf_field2_2">宝宝的年龄</label>
                                                </div>
                                                <div style="text-align:left;">
                                                    <input style="text-align:left; margin:0; width:100%; max-width:500px;height:25px;" type="text" id="fscf_field2_2" name="age" value=""  />
                                                </div>
                                            </div>
                                        </div>

                                        <div id="fscf_div_clear2_5" style="clear:both;">
                                            <div id="fscf_div_field2_5" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                                <div  id="fscf_label2_5" style="text-align:left; padding-top:5px;">
                                                    <label style="text-align:left;" for="fscf_field2_5">联系电话</label>
                                                </div>
                                                <div style="text-align:left;">
                                                    <input style="text-align:left; margin:0; width:100%; max-width:500px;height:25px;" type="text" id="fscf_field2_5" name="phoneno" value=""  />
                                                </div>
                                            </div>
                                        </div>

                                        <div id="fscf_div_clear2_6" style="clear:both;">
                                            <div id="fscf_div_field2_6" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                                <div  id="fscf_label2_6" style="text-align:left; padding-top:5px;">
                                                    <label style="text-align:left;" for="fscf_field2_6">微信号码</label>
                                                </div>
                                                <div style="text-align:left;">
                                                    <input style="text-align:left; margin:0; width:100%; max-width:500px;height:25px;" type="text" id="fscf_field2_6" name="wechat" value=""  />
                                                </div>
                                            </div>
                                        </div>

                                        <div id="fscf_div_clear2_3" style="clear:both;">
                                            <div id="fscf_div_field2_3" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                                <div style="text-align:left; padding-top:5px;">
                                                    <label style="text-align:left;" for="fscf_field2_3">您的其他要求</label>
                                                </div>
                                                <div style="text-align:left;">
                                                    <textarea style="text-align:left; margin:0; width:100%; max-width:500px; height:150px;" id="fscf_field2_3" name="note" cols="30" rows="10" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="clear:both;"></div>

                                        <div style="text-align:left; padding-top:5px;">
                                        </div>

                                        <div id="fscf_submit_div2" style="text-align:left; clear:both; padding-top:15px;">
                                            <input type="submit" style="cursor:pointer; margin:0;width:170px;" value="Send"  />
                                        </div>

                                    </form>
                                    @if(count($errors) > 0)
                                        <ul class="alert alert-danger">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                <div style="clear:both;"></div>

                                <!-- Fast Secure Contact Form plugin 4.0.38 - end - FastSecureContactForm.com -->

                            </div></div></div></div></div></div>
        <div class="standard_wrapper"><div  class="one_third last withsmallpadding ppb_text" style="padding:30px 0 30px 0;color:#a8a8a8 !important;" ><div class="standard_wrapper"><div class="page_content_wrapper"><div class="inner"><div style="margin:auto;width:100%"><div class="googlefont" style="font-family:NanumGothic;font-size:12px;"><br />
                                    <strong><span style="color:#a6937c;">예약방법</span><br />
                                    </strong><span style="color:"#666666;">스튜디오와 상담후 예약신청서를 작성하셔서 보내주세요<br />
                                    예약금이 확인되면 예약완료문자와 전달사항을 보내드립니다<br />
                                    (신청서만 보내시면 예약완료가 되지않는답니다)</span></p>
                                    <p><strong><span style="color: #a6937c;">결제안내</span><br />
                                        </strong>스튜디오촬영 잔금은- 촬영일에<br />
                                        돌스냅촬영 잔금은- 촬영일 다음날까지 결제해주시면 된답니다</p>
                                    <p><span style="color: #a6937c;"><strong>환불안내</strong></span><br />
                                        부득이하게 예약을 취소하실경우 반드시 예약금입금일로부터<br />
                                        7일이내에 취소하셔야 환불됩니다</p>
                                    <p><span style="color: #a6937c;"><strong>촬영일변경</strong></span><br />
                                        예약하신 촬영일1주이내에 2회이상 촬영일을 변경하실경우,<br />
                                        모든 이벤트혜택이 상실됩니다.</p>
                                    <p><span style="color: #a6937c;"><strong>예약확인</strong></span><br />
                                        예약신청서와 예약금입금이 확인되면 24시간안에(휴무일제외)<br />
                                        예약완료문자를 보내드린답니다.<br />
                                        문자를 못받으신경우, 꼭 전화주세요^^*</p>
                                    <p><span style="color: #a6937c;"><strong>유의사항</strong></span><br />
                                        돌잔치촬영의 경우, 부득이한 사정으로 작가님이 변경될수있습니다.<br />
                                </div>
                            </div></div></div></div></div></div>
    </div>


    @include('frontend.layouts.footer')

</div>


<div id="overlay_background">
</div>
@stop
