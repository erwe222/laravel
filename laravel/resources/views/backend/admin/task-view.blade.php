@extends('layouts.body')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="alert alert-info">
            <form class="form-inline" role="form" id="grid-search-form" onsubmit="return false;">
                <div class="form-group">
                    <label >状态：</label>
                    <select class="form-control" id="search-role-status" style="width: 100px;">
                        <option value="">全 部</option>
                        @foreach($statusList as $k=>$v)
                            <option value="{{$k}}">{{$v}}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="form-group">
                    <input type="text" id="search-task-title"  class="form-control"  placeholder="标题">
                </div>
                <button class="btn btn-info btn-sm"><i class="ace-icon fa fa-search"></i>搜索</button>
                <button class="btn btn-info btn-sm" type='reset'><i class="ace-icon fa  fa-ban"></i>重置</button>
            </form>
        </div>
        <p class="pull-right" id="btns-type-one" >
            <button class="btn btn-white btn-info btn-bold" data-type="add" >
                <i class="ace-icon glyphicon glyphicon-plus bigger-120"></i>添加
            </button>
            <button class="btn btn-white btn-success btn-bold" data-type="refresh" >
                <i class="ace-icon fa fa-undo bigger-120" ></i>刷新
            </button>
        </p>
    </div>
    <div class="col-xs-12">
        <div class="clearfix"><div class="pull-right tableTools-container"></div></div>
        <div class="table-header">任务计划</div>
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover" style="width:100%;"></table>
        </div>
    </div>
</div>

<div id="cu-editstatus-box" style="display:none;width:300px;padding-top:10px;">
    <form class="form-horizontal" role="form" id="add-admin-form" onsubmit='return false;'>
        <input id="fr-task-id" type="hidden" class="form-control" value='0'>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" > 处理状态 </label>
            <div class="col-sm-9">
                <select class="form-control" id="fr-task-status" >
                    @foreach($statusList as $k=>$v)
                        <option value="{{$k}}">{{$v}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group " >
            <label class="col-sm-3 control-label no-padding-right" for="date-timepicker1"> <span class='fr-time-box'>结束时间</span> </label>
            <div class="col-sm-9">
                <div class="input-group fr-time-box">
                    <input id="date-timepicker1" type="text" class="form-control">
                    <span class="input-group-addon">
                        <i class="fa fa-clock-o bigger-110"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="menu-name">  </label>
            <div class="col-sm-9">
                <button class="btn btn-sm btn-primary" onclick="objClass.updateStatus()"> 修 改</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-sm btn-grey" onclick="layer.close(objClass.statusBoxIndex)"> 取 消</button>
            </div>
        </div>
    </form>
</div>


@endsection

@push('scripts')
<script src="/ace-asstes/js/jquery.dataTables.min.js"></script>
<script src="/ace-asstes/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="/ace-asstes/js/moment.min.js"></script>
<script src="/ace-asstes/js/bootstrap-datetimepicker.min.js"></script>
<script src="/js/myTable.js"></script>
<script >


    var obj = {
        adminId:"{{$admin_id}}",
        scrollX: true,
        order: [[ 9, "desc"]], //初始化默认排序
        columns: [
            {data:null,checkbox:true,width:10,orderable:false,class:'table-checkbox',
                render:function(data){
                    return '<label class="pos-rel"><input type="checkbox" class="ace table-checkbox-l" value="' + data["id"] + '" /><span class="lbl"></span></label>';
                }
            },
            {title: '创建人',data: 'admin_name',name:'admin_name',orderable:false,width: 50},
            {title: '处理人',data: 'delegate_name',name:'delegate_name',orderable:false,width: 50},
            {title: '标题',data: 'title',name:'title',orderable:false,width: 300},
            {title: '详情',data: 'id',orderable:false,width: 30,render: function ( data, type, row, meta ) {
                  return  '<a href="javascript:void(0)" onclick="objClass.catDetail('+meta.row+')" >查看详情</a>';
            }},
            {title: '任务类型',data: 'type',name:'type',orderable:false,width: 30,render: function ( data, type, row, meta ) {
                  return  (data == 1) ?'我的计划':'委派任务';
            }},
            {title: '状态(可编辑)',data: 'status',name:'status',orderable:false,width: 30,render: function ( data, type, row, meta ) {
                  var str = '<p style="cursor: pointer;margin-bottom: 0px;" onclick="objClass.showUpdateBox(\''+meta.row+'\')" >';
                  if(data == 1){
                    str += '<span class="label label-white middle">等待处理</span>';
                  }else if(data == 2){
                    str += '<span class="label label-success label-white middle">处理中</span>';
                  }else if(data == 3){
                    str += '<span class="label label-warning label-white middle">延期处理</span>';
                  }else if(data == 4){
                    str += '<span class="label label-danger label-white middle">已完成</span>';
                  }else{
                    str += '<span class="label label-info label-white middle">已丢弃</span>';
                  }

                  str +'</p>';
                  return str;
            }},
            {title: '开始时间',data: 'start_time',name:'start_time',orderable:true,width: 50},
            {title: '结束时间',data: 'end_time',name:'end_time',orderable:true,width: 50},
            {title: '创建时间',data: 'created_at',name:'created_at',orderable:true,width: 50},
            {title: '操 作',data: 'id',orderable:false,width: 20,render: function ( data, type, row, meta ) {
                var str ='';
                

                if(obj.adminId == row.admin_id){
                    str ='<i class="ace-icon fa fa-pencil-square-o bigger-130 blue" style="cursor:pointer;" onclick="objClass.edit('+row.id+')" ></i> ';
                    str += '&nbsp;&nbsp;<i class="ace-icon fa fa-trash-o bigger-130 red" style="cursor:pointer;" onclick="objClass.delete('+row.id+')"></i>';
                }
                
                return str;
            }}
        ]
    };
    
    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_admin_gettasklistdata')}}");
    myTable.init();
    
    $('#grid-search-form').on('submit',function(){
        objClass.refresh(true);
    });

    var objClass = {
        statusBoxIndex:null,
        isUpdateStatusLoading:false,
        refresh:function(flag){
            var t = true;
            if(flag != undefined){
                t = flag;
            }
            var data = {
                title:$.trim($('#search-task-title').val()),
                status:$('#search-role-status').val()
            };

            myTable.setSearchParams(data);
            myTable.refresh(t);
        },
        updateStatus:function(){
            
            if(this.isUpdateStatusLoading == false){
                var index = layer.load(2);
                $.ajax({
                    url:"{{route('b_admin_updatetaskstatus')}}",
                    type:'post',
                    data:{id:$('#fr-task-id').val(),status:$('#fr-task-status').val(),endtime:$('#date-timepicker1').val()},
                    dataType:'json',
                    beforeSend:function(){
                        objClass.isUpdateStatusLoading = true;
                    },
                    complete:function(){
                        layer.close(index);
                        objClass.isUpdateStatusLoading = false;
                    },
                    success:function(res){
                        if(res.code == 200){
                            layer.msg(res.message, {icon: 1});
                            layer.close(objClass.statusBoxIndex)
                            setTimeout(function(){
                                objClass.refresh();
                            },2000);
                        }else{
                            layer.msg(res.message, {icon: 5});
                        }
                    },
                    error: throwError,
                });
            }
        },
        showUpdateBox:function(row_id){
            var data = myTable.getRowData(row_id);

            if(data.delegate_id != "{{$admin_id}}"){
                layer.msg('无权修改');
                return false;
            }

            $('#cu-editstatus-box').show();
            $('#fr-task-id').val(data.id)
            $('#fr-task-status').val(data.status);
            if(data.status == 3){
                $('.fr-time-box').show();
            }else{
                $('.fr-time-box').hide();
            }

            $('#date-timepicker1').val(data.end_time);
            objClass.statusBoxIndex = layer.open({
              title:'<i class="ace-icon fa fa-pencil-square-o blue"></i> <span class="blue">编辑进度</span>',
              type: 1,
              skin: 'layui-layer-rim', //加上边框
              area: ['380px', '210px'], //宽高
              content: $('#cu-editstatus-box'),
              end:function(){
                $('#cu-editstatus-box').hide();
              }
            });
        },
        add:function(){
        	var index = layer.open({
        	  // title:'创建任务计划',
			  type: 2,
			  area: ['700px', '450px'],
			  fixed: false, //不固定
			  maxmin: false,
			  content: "{{route('b_admin_createtaskbox')}}",
              end:function(){
                objClass.refresh(true);
              }
			});

			layer.full(index);
        },
        edit:function(id){
            var index = layer.open({
              // title:'创建任务计划',
              type: 2,
              area: ['700px', '450px'],
              fixed: false, //不固定
              maxmin: false,
              content: "{{route('b_admin_createtaskbox')}}"+'?id='+id,
              end:function(){
                objClass.refresh(true);
              }
            });

            layer.full(index);
        },
        delete:function(row_id){
            layer.confirm('您确定要删除该任务吗？', {icon: 3,
                btn: ['确定','取消'] //按钮
            }, function(){
                $.ajax({
                    url:"{{route('b_admin_deletetask')}}",
                    type:'post',
                    data:{id:row_id},
                    dataType:'json',
                    success:function(res){
                        if(res.code == 200){
                            layer.msg('任务删除成功...', {icon: 1});
                            myTable.refresh();
                        }else{
                            layer.msg('任务删除失败', {icon: 5});
                        }
                    },
                    error: throwError,
                });
            });
        },
        catDetail:function(row_id){
            var data = myTable.getRowData(row_id);
            layer.open({
              type: 1,
              title: '<i class="ace-icon fa fa-envelope-o blue"></i> <span class="blue">详情信息</span>',
              shadeClose: true,
              area: ['800px', '400px'], //宽高
              skin: 'yourclass',
              content: data.content
            });
        },
    };

    $('#btns-type-one > button').on('click',function(){
        objClass[$(this).data('type')]();
    });

    $('#date-timepicker1').datetimepicker({
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

    $('#fr-task-status').on('change',function(){
        if(this.value == 3){
            $('.fr-time-box').show();
        }else{
            $('.fr-time-box').hide();
        }
    });
</script>
@endpush