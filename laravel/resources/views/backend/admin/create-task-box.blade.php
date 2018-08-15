@extends('layouts.body')
@section('content')
<link rel="stylesheet" href="/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="/kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="/kindeditor/kindeditor-all.js"></script>
<script charset="utf-8" src="/kindeditor/lang/zh-CN.js"></script>
<script charset="utf-8" src="/kindeditor/plugins/code/prettify.js"></script>
<script>
    KindEditor.ready(function(K) {
        window.editor = K.create('textarea[name="content1"]', {
            cssPath : '/kindeditor/plugins/code/prettify.css',
        });
        prettyPrint();
    });
</script>


<div class="page-header">
    <h1>
        任务管理
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            @if($task_info) 更新任务 @else 创建任务 @endif 
        </small>
    </h1>
</div>

<div class="row">
    <div class="col-xs-12">
        <form name="example" class="form-horizontal" role="form" onsubmit="return false;">
            <input type="hidden" id='fr-hidden-id' value="{{$task_info['id']}}">
            <div class="form-group">
                <label class="col-sm-1 control-label no-padding-right" > 任务类型 </label>
                <div class="col-sm-9">
                    <div class="radio">
                        <label style="padding-left: 10px;">
                            <input name="fr-task-type" type="radio" class="ace" @if($task_info['type'] == 1) checked=""  @endif   value="1"  @if($task_info) disabled=""  @endif >
                            <span class="lbl"> 我的计划</span> 
                        </label>
                        <label>
                            <input name="fr-task-type" type="radio" class="ace" @if($task_info['type'] == 2) checked=""  @endif   value="2" @if($task_info) disabled=""  @endif >
                            <span class="lbl"> 委派任务</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label no-padding-right" > 任务标题 </label>
                <div class="col-sm-9">
                    <input type="text" id="fr-input-title" placeholder="请填写任务计划标题..." class="form-control" value="{{$task_info['title']}}" />
                </div>
            </div>

            <div class="form-group" id="fr-box-admin"   >
                <label class="col-sm-1 control-label no-padding-right" > 处理人 </label>
                <div class="col-sm-9">
                    <select class="col-xs-10 col-sm-5" id="fr-select-adminid" >
                        <option value="">请选择处理人</option>
                        @foreach($adminList as $v)
                            @if($v['id'] !== $admin_id)
                                <option value="{{$v['id']}}" @if($v['id'] == $task_info['delegate_id']) selected="" @endif  >{{$v['name']}}</option>
                            @endif
                        @endforeach
                        
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label no-padding-right" > 开始时间 </label>
                <div class="col-sm-9">
                    <input type="text" id="start_time" placeholder="请选择开始时间..." class="col-xs-10 col-sm-5" value="{{$task_info['start_time']}}">
                    
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label no-padding-right" > 结束时间 </label>
                <div class="col-sm-9">
                    <input type="text" id="end_time" placeholder="请选择结束时间..." class="col-xs-10 col-sm-5" value="{{$task_info['end_time']}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label no-padding-right" > 状态 </label>
                <div class="col-sm-9">
                    <div class="radio">
                        <label style="padding-left: 10px;">
                            <input name="fr-task-status" type="radio" class="ace" checked="" value="1">
                            <span class="lbl"> 等待处理</span>
                        </label>
                        <label>
                            <input name="fr-task-status" type="radio" class="ace" value="2">
                            <span class="lbl"> 处理中</span>
                        </label>
                        <label>
                            <input name="fr-task-status" type="radio" class="ace" value="3">
                            <span class="lbl"> 延期处理</span>
                        </label>
                        <label>
                            <input name="fr-task-status" type="radio" class="ace" value="4">
                            <span class="lbl"> 已完成</span>
                        </label>
                        <label>
                            <input name="fr-task-status" type="radio" class="ace" value="5">
                            <span class="lbl"> 已丢弃</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label no-padding-right" > 详情信息 </label>
                <div class="col-sm-9">
                    <textarea class="form-control"  placeholder="任务详细信息" style="height: 200px;resize: none;" name="content1" id='fr-task-content'>
                        
                        {{$task_info['content']}}
                    </textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-1 control-label no-padding-right" >  </label>
                <div class="col-sm-9">
                    <button class="btn btn-sm btn-success" onclick="obj.onsubmit()">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        <span class="bigger-110 no-text-shadow">@if($task_info) 更新 @else 添加 @endif</span>
                    </button>

                    <button class="btn btn-sm btn-info">
                        <i class="ace-icon fa fa-ban bigger-110"></i>
                        <span class="bigger-110 no-text-shadow">重置</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="/ace-asstes/js/moment.min.js"></script>
<script src="/ace-asstes/js/bootstrap-datetimepicker.min.js"></script>

<script>
    
    $('#start_time,#end_time').datetimepicker({
         format: 'YYYY-MM-DD HH:mm:ss',//use this option to display seconds
         icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-chevron-up',
            down: 'fa fa-chevron-down',
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-arrows ',
            clear: 'fa fa-trash',
            close: 'fa fa-times'
         }
    }).next().on(ace.click_event, function(){
        $(this).prev().focus();
    });


    var obj = {
    	loading:false,
        onsubmit:function(){
            var id              = $('#fr-hidden-id').val();
        	var type 			= $("input[name='fr-task-type']:checked").val();
        	var title 			= $.trim($('#fr-input-title').val());
        	var adminid 		= $('#fr-select-adminid').val();
        	var start_time 		= $('#start_time').val();
        	var end_time 		= $('#end_time').val();
        	var status          = $("input[name='fr-task-status']:checked").val();
        	var content         = window.editor.html();

        	if(title == ''){
        		layer.msg('请填写任务标题');return false;
        	}



        	if(type == 2 && adminid == ''){
        		layer.msg('请选择处理人');return false;
        	}

        	if(start_time == ''){
        		layer.msg('请选择开始时间');return false;
        	}

        	if(end_time == ''){
        		layer.msg('请选择结束时间');return false;
        	}

        	if(status == '' || status == undefined ){
        		layer.msg('请选择状态');return false;
        	}

        	if(this.loading == false){
                var index = layer.load(2);
                var parent_index = parent.layer.getFrameIndex(window.name);
                $.ajax({
                    url:"{{route('b_admin_createtask')}}",
                    type:'post',
                    data:{id:id,type:type,title:title,adminid:adminid,start_time:start_time,end_time:end_time,status:status,content:content},
                    dataType:'json',
                    beforeSend:function(){
                        obj.loading = true;
                    },
                    complete:function(){
                        layer.close(index);
                        obj.loading = false;
                    },
                    success:function(res){
                        if(res.code == 200){
                            layer.msg(res.message, {icon: 1});
                            parent.objClass.refresh();
                            parent.layer.close(parent_index);
                        }else{
                            layer.msg(res.message, {icon: 5});
                        }
                    },
                    error: throwError,
                });
            }
        },
    };


    $('input[type=radio][name=fr-task-type]').change(function() {
        if(this.value == 1){
            $('#fr-box-admin').hide();
        }else{
            $('#fr-box-admin').show();
        }
    });

    $(function(){
        if($("input[name='fr-task-type']:checked").val() == 1){
            $('#fr-box-admin').hide();
        }else{
            $('#fr-box-admin').show();
        }
    })


</script>
@endpush