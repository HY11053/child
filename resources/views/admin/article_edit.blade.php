@extends('admin.layouts.admin_app')
@section('title')编辑普通文档@stop
@section('head')
    <link href="/AdminLTE/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/AdminLTE/plugins/iCheck/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/AdminLTE//plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/AdminLTE/plugins/datepicker/datepicker3.css">
    <!--<link href="/AdminLTE/plugins/summernote/summernote-bs3.css" rel="stylesheet">-->
    <link href="/AdminLTE/dist/css/fileinput.min.css" rel="stylesheet">
@stop
@section('content')
    <!-- row -->
    <div class="row">
        {{Form::model($articleinfos,array('route' =>array( 'article_edit','id'=>$id),'method' => 'put','files' => true,))}}
        <div class="col-md-12">
            <!-- The time line -->
            <ul class="timeline">

                <!-- timeline time label -->
                <li class="time-label">
                  <span class="bg-red">
                     {{date("M j, Y")}}
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->

                <li>
                    <i class="fa fa-pencil-square bg-blue"></i>

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:i')}}</span>

                        <h3 class="timeline-header"><a href="#">文章基本信息|</a> 按需填写</h3>

                        <div class="timeline-body basic_info">
                            <div class="form-group col-md-12">
                                {{Form::label('title', '文章标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('title', null, array('class' => 'form-control','id'=>'title','placeholder'=>'文章标题'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">自定义文档属性</label>
                                <div class="checkbox" style="margin-top: 0px;">
                                    <label>
                                        @if(strpos($articleinfos->flags, 'h') !== false)
                                        {{Form::checkbox('flags[]', 'h',true,array('class'=>'flat-red'))}} 头条
                                        @else
                                        {{Form::checkbox('flags[]', 'h',false,array('class'=>'flat-red'))}} 头条
                                        @endif
                                    </label>
                                    <label>
                                        @if(strpos($articleinfos->flags, 'p') !== false)
                                        {{Form::checkbox('flags[]', 'p',true,array('class'=>'flat-red'))}} 图片
                                        @else
                                        {{Form::checkbox('flags[]', 'p',false,array('class'=>'flat-red'))}} 图片
                                        @endif
                                    </label>
                                    <label>
                                        @if(strpos($articleinfos->flags, 'c') !== false)
                                            {{Form::checkbox('flags[]', 'c',true,array('class'=>'flat-red'))}}  推荐
                                        @else
                                            {{Form::checkbox('flags[]', 'c',false,array('class'=>'flat-red'))}}  推荐
                                        @endif

                                    </label>
                                    <label>
                                        @if(strpos($articleinfos->flags, 'f') !== false)
                                            {{Form::checkbox('flags[]', 'f',true,array('class'=>'flat-red'))}}  幻灯
                                        @else
                                            {{Form::checkbox('flags[]', 'f',false,array('class'=>'flat-red'))}}  幻灯
                                        @endif
                                    </label>
                                    <label>
                                        @if(strpos($articleinfos->flags, 's') !== false)
                                            {{Form::checkbox('flags[]', 's',true,array('class'=>'flat-red'))}}  滚动
                                        @else
                                            {{Form::checkbox('flags[]', 's',false,array('class'=>'flat-red'))}}  滚动
                                        @endif
                                    </label>
                                    <label>
                                        @if(strpos($articleinfos->flags, 'a') !== false)
                                            {{Form::checkbox('flags[]', 'a',true,array('class'=>'flat-red'))}}  特荐
                                        @else
                                            {{Form::checkbox('flags[]', 'a',false,array('class'=>'flat-red'))}}  特荐
                                        @endif
                                    </label>
                                </div>

                            </div>
                            <div class="form-group col-md-12">
                                {{Form::label('shorttitle', '简略标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('shorttitle',null, array('class' => 'form-control','id'=>'shorttitle','placeholder'=>'短标题'))}}
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                {{Form::label('tags', '拍摄标志', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('tags', null, array('class' => 'form-control','id'=>'tags','placeholder'=>'拍摄标志'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                {{Form::label('keywords', '关键字', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('keywords',null, array('class' => 'form-control','id'=>'keywords','placeholder'=>'关键字'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                {{Form::label('country', '经纬度', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('country',null, array('class' => 'form-control col-md-10','id'=>'country','placeholder'=>'填写地区名称即可'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12 ">
                                {{Form::label('typeid', '文章所属栏目', array('class' => 'col-sm-2 control-label'))}}
                                <div class="col-sm-5">

                                    {{Form::select('typeid', $allnavinfos, null,array('class'=>'form-control select2','style'=>'width: 78%'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                {{Form::label('description', '文档描述', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::textarea('description',null, array('class' => 'form-control col-md-10','id'=>'desrciption','rows'=>3,'placeholder'=>'不填写将自动提取首段'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12 ">
                                {{Form::label('ismake', '文章状态', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="radio col-md-4 col-sm-9 col-xs-12">
                                    {{Form::radio('ismake', '1', true,array('class'=>'flat-red'))}} 已审核
                                    {{Form::radio('ismake', '0', false,array('class'=>'flat-red'))}}未审核
                                </div>

                            </div>
                            <div class="form-group col-md-12 ">
                                {{Form::label('published_at', '预选发布时间', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="input-group date  col-md-4 col-sm-9 col-xs-12">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    {{Form::text('published_at', null, array('class' => 'form-control pull-right','id'=>'datepicker','placeholder'=>'点击选择时间'))}}
                                </div>
                            </div>
                        </div>
                        <div class="timeline-footer">
                            <button class="btn btn-primary btn-xs">Read more</button>
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-photo bg-aqua"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{date('D M j')}}</span>
                        <h3 class="timeline-header no-border"><a href="#">缩略图处理</a> 图片上传</h3>
                        <div class="timeline-body">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <img src="{{ $articleinfos->litpic }}" class="img-rounded img-responsive"/>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                {{Form::file('image', array('class' => 'file col-md-10','id'=>'input-2','multiple data-show-upload'=>"false",'data-show-caption'=>"true"))}}
                            </div>
                            <div style="clear: both"></div>

                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline time label -->
                <li class="time-label">
                  <span class="bg-green">
                   {{date("M j, Y")}}
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{date('j, n,y')}}</span>

                        <h3 class="timeline-header"><a href="#">图集处理</a> 批量上传图集</h3>

                        <div class="timeline-body">
                            {{Form::file('image', array('name'=>'input-image','class' => 'file-loading','id'=>'input-image-1','accept'=>'image/*'))}}
                            <div id="kv-success-modal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">图片上传成功</h4>
                                        </div>
                                        <div id="kv-success-box" class="modal-body">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{Form::hidden('imagepics', null,array('id'=>'imagepics'))}}
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-file-text bg-maroon"></i>

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

                        <h3 class="timeline-header"><a href="#">文档处理</a>文章内容编辑</h3>

                        <div class="timeline-body">
                            @include('admin.layouts.summernote')

                            <div style="display: none">{{Form::textarea('body', null, array('id'=>'lawsContent'))}}</div>
                        </div>
                        <div class="timeline-footer">
                            <button type="submit"  class="btn btn-md bg-maroon">提交文档</button>
                        </div>
                    </div>
                </li>

                <!-- END timeline item -->
                <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                </li>
            </ul>

        </div>
        <!-- /.col -->
        {!! Form::close() !!}
    </div>
    @if(count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <!-- /.row -->

    </section>
@stop

@section('libs')
    <!-- jQuery 2.2.3 -->
    <script src="/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slimscroll -->
    <script src="/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/AdminLTE/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/AdminLTE/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/AdminLTE/dist/js/demo.js"></script>
    <script src="/AdminLTE/plugins/summernote/summernote.min.js"></script>
    <script src="/AdminLTE/plugins/summernote/lang/summernote-zh-CN.js"></script>
    <!-- iCheck -->
    <script src="/AdminLTE/plugins/iCheck/icheck.min.js"></script>
    <script src="/AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>


    <script>



        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#summernote').summernote({
                height: 500,
                lang : 'zh-CN',
                callbacks: {
                    onImageUpload: function(files) {
                        //上传图片到服务器，使用了formData对象，至于兼容性...据说对低版本IE不太友好
                        var formData = new FormData();
                        formData.append('file',files[0]);
                        $.ajax({
                            type: 'POST',
                            url : '/admin/upload/articleimages',//后台文件上传接口
                            data : formData,
                            enctype: 'multipart/form-data',
                            processData : false,
                            contentType : false,
                            success: function(filename) {
                                var file_path ='/images/thread/'+ filename;
                                console.log(file_path);
                                $('#summernote').summernote("insertImage", file_path);
                            }
                        });
                    },
                    onChange: function(contents, $editable) {
                        // console.log('onChange:', contents, $editable);
                        $("#lawsContent").val(contents)
                        console.log($("#lawsContent").val())
                    },
                }
            });



        })

    </script>

    <script>
        $(function () {
            $('#datepicker').datepicker({
                autoclose: true
            });

            //iCheck for checkbox and radio inputs
            $('.basic_info input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('.basic_info input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass: 'iradio_minimal-red'
            });
            //Flat red color scheme for iCheck
            $('.basic_info input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });


        });
    </script>

    <!-- /Custom Notification -->
    <script src="/js/fileinput.min.js"></script>
    <script>
        $("#input-image-1").fileinput({
            uploadUrl: "/admin/upload/images",
            uploadAsync: true,
            minFileCount: 1,
            maxFileCount: 6,
            overwriteInitial: false,
            initialPreview: [
                // IMAGE DATA
                @foreach($pics as $pic)
                        "{{$pic}}",
                // IMAGE DATA
                @endforeach


            ],
            initialPreviewAsData: true, // identify if you are sending preview data only and not the raw markup
            initialPreviewFileType: 'image', // image is the default and can be overridden in config below
            initialPreviewConfig: [
                    @foreach($pics as $indexnum=>$pic)
                {caption: "{{$indexnum+1}}", size: 827000, width: "120px", url: "/admin/file-delete-batch", key: [ {{$indexnum+1}} ,'{{$pic}}',{{$articleinfos->id}}]},
                @endforeach

            ],
            purifyHtml: true, // this by default purifies HTML data for preview
            uploadExtraData: {
                img_key: "1000",
                img_keywords: "happy, places",
            }
        }).on('filesorted', function(e, params) {
            alert(222);
            console.log('File sorted params', params);
        }).on('fileuploaded', function(event, data) {
            $('#kv-success-box').append(data.response.link);
            $('#kv-success-modal').modal('show');
            $("#imagepics").val($("#imagepics").val()+data.response.link+',');
        }).on('filepreremoved', function(e, params) {
            console.log('File sorted params', params);
            alert(111);
        }).on('filedeleted', function(event, key) {
            console.log('Key = ' + key);
            arrs=key.split(',')
            $("#imagepics").val($("#imagepics").val().replace(arrs[1]+',',''));
        });
    </script>
@stop

