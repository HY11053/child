@extends('admin.layouts.admin_app')
@section('title')PC首页幻灯图片上传@stop
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
    {{Form::open(array('route' => 'flashpics','files' => true,))}}
    <div class="col-md-12">
        <!-- The time line -->
        <ul class="timeline">

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
                <i class="fa fa-camera bg-purple"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('j, n,y')}}</span>

                    <h3 class="timeline-header"><a href="#">图集处理</a> 移动首页轮播图集批量上传</h3>

                    <div class="timeline-body">
                        {{Form::file('image', array('name'=>'input-image2','class' => 'file-loading','id'=>'input-image-2','accept'=>'image/*'))}}
                        <div id="kv-success-modal2" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">图片上传成功</h4>
                                    </div>
                                    <div id="kv-success-box2" class="modal-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{Form::hidden('mimagepics', null,array('id'=>'mimagepics'))}}
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

<!-- /Custom Notification -->
<script src="/js/fileinput.min.js"></script>
        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })});
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

        <script>
            $("#input-image-2").fileinput({
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
                        @foreach($mpics as $indexnum=>$pic)
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
                $('#kv-success-box2').append(data.response.link);
                $('#kv-success-modal2').modal('show');
                $("#mimagepics").val($("#mimagepics").val()+data.response.link+',');
            }).on('filepreremoved', function(e, params) {
                console.log('File sorted params', params);
                alert(111);
            }).on('filedeleted', function(event, key) {
                console.log('Key = ' + key);
                arrs=key.split(',')
                $("#mimagepics").val($("#mimagepics").val().replace(arrs[1]+',',''));
            });
        </script>
@stop

