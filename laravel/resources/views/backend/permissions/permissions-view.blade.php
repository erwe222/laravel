@extends('layouts.body')
@section('content')
</style>
<div class="row">
    <div class="col-xs-12">
        <div class="alert alert-info">
            <form class="form-inline" role="form" id="grid-search-form" onsubmit="return false;">
                <div class="form-group">
                    <label >状态：</label>
                    <select class="form-control" id="search-pre-status" style="width: 100px;">
                            <option value="">全 部</option>
                            <option value="1">启 用</option>
                            <option value="0">禁 用</option>
                    </select>
                </div> 
                <div class="form-group">
                    <input type="text" id="search-pre-name"  class="form-control" title="ID" placeholder="权限名称">
                </div>
                <button class="btn btn-info btn-sm"><i class="ace-icon fa fa-search"></i>搜索</button>
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
        <div class="table-header">角色列表</div>
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover" style="width:100%;"></table>
        </div>
    </div>
</div>

<div id="dialog-message" class="hide" >
    <form class="form-horizontal" role="form" id="menu-form">
        <input type="hidden" id="fr-pre-id"  value="0"  />
        <div class="form-group" id="fr-pre-type-hide">
            <label class="col-sm-2 control-label no-padding-right" > 添加类型 </label>
            <div class="col-sm-9">
                <div class="radio">
                    <label>
                        <input name="fr-pre-type" type="radio"  class="ace"  value="0" />
                        <span class="lbl"> 权限模块名</span>
                    </label>
                    <label>
                        <input name="fr-pre-type" type="radio"  class="ace" value="1"  checked="" />
                        <span class="lbl"> 权限地址</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group hide" id="fr-pre-type-0">
            <label class="col-sm-2 control-label no-padding-right" for="menu-name"> 权限模块名 </label>
            <div class="col-sm-9">
                <select class="form-control" id="fr-pre-pid" ></select>
            </div>
        </div> 
        <div class="form-group hide" id="fr-pre-type-1">
            <label class="col-sm-2 control-label no-padding-right" for="menu-name"> 权限模块名 </label>
            <div class="col-sm-9">
                <input type="text" id="fr-pre-modulename"  placeholder="请填写权限模块名..." class="form-control" />
            </div>
        </div>
        <div class="form-group" id="fr-pre-title-hide">
            <label class="col-sm-2 control-label no-padding-right" for="menu-name"> 权限名 </label>
            <div class="col-sm-9">
                <input type="text" id="fr-pre-title"  placeholder="请填写权限名..." class="form-control" />
            </div>
        </div>
        <div class="form-group" id="fr-pre-url-hide">
            <label class="col-sm-2 control-label no-padding-right" for="menu-name"> 权限地址 </label>
            <div class="col-sm-9">
                <input type="text" id="fr-pre-url"  placeholder="请填写权限地址..." class="form-control" />
            </div>
        </div>
        <div class="form-group" id="fr-pre-status-hide">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1-4"> 权限状态 </label>
            <div class="col-sm-9">
                <div class="radio">
                    <label>
                        <input name="fr-pre-status" type="radio"  class="ace" checked="" value="1" />
                        <span class="lbl">启用</span>
                    </label>
                    <label>
                        <input name="fr-pre-status" type="radio"  class="ace" value="0" />
                        <span class="lbl">禁用</span>
                    </label>
                </div>
            </div>
        </div>
</form>
</div>
@endsection

@push('scripts')
<script src="/ace-asstes/js/jquery.dataTables.min.js"></script>
<script src="/ace-asstes/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="/js/myTable.js"></script>
<script>
    var obj = {
        scrollX: true,
        columns: [
            {data:null,checkbox:true,width:10,orderable:false,class:'table-checkbox',
                render:function(data){
                    return '<label class="pos-rel"><input type="checkbox" class="ace" value="' + data["id"] + '" /><span class="lbl"></span></label>';
                }
            },
            {title: '权限模块',data: 'pid_name',name:'pid_name',orderable:false,width: 200,render: function ( data, type, row, meta ) {
                if(row.type == 0){
                    return row.title;
                }else{
                    return data;
                }
            }},
            {title: '权限名称',data: 'title',name:'title',orderable:false,width: 200,render: function ( data, type, row, meta ) {
                return (row.type == 0)?'-':data;
            }},
            {title: 'Url 地址',data: 'url',orderable:false},
            {title: '权限类型',data: 'status',name:'status',orderable:false,width: 50,render: function ( data, type, row, meta ) {
                if(row.type == 0){
                    return '<span class="label label-success" >权限模块</span>';
                }else{
                    return '<span class="label label-success">权&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;限</span>';
                }
            }},
            {title: '状态',data: 'status',name:'status',orderable:false,width: 50,render: function ( data, type, row, meta ) {
                if(data == 1){
                    return '<span class="label label-success arrowed-in arrowed-in-right" data-rowindex="'+meta.row+'">启用</span>';
                }else{
                    return '<span class="label label-danger arrowed" data-rowindex="'+meta.row+'">禁用</span>';
                }
            }},
            {title: '操 作',data: 'id',orderable:false,width: 160,render: function ( data, type, row, meta ) {
                var str = '<button class="btn btn-minier btn-purple" onclick="objClass.edit(\''+meta.row+'\')"><i class="ace-icon fa fa-pencil bigger-130"></i> 编辑</button>&nbsp;';
                str += '<button class="btn btn-minier btn-danger" onclick="objClass.delete(\''+row.id+'\')"><i class="ace-icon fa fa-trash-o bigger-130"></i> 删除</button>&nbsp;';
                return str;
            }}
        ],
    };
    
    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_permissions_getpermissionslist')}}");
    myTable.init();
    
    $('#grid-search-form').on('submit',function(){
        objClass.refresh();
    });

    $("input[name='fr-pre-type']").on('click',function(){
        objClass.radioClick($(this).val());
    });
            
    var objClass = {
        radioClick:function(type){
            if(type == 0){
                $('#fr-pre-type-0').addClass('hide');
                $('#fr-pre-type-1').removeClass('hide');
                $('#fr-pre-title-hide,#fr-pre-url-hide,#fr-pre-status-hide').addClass('hide');
            }else{
                $('#fr-pre-type-1').addClass('hide');
                $('#fr-pre-type-0').removeClass('hide');
                $('#fr-pre-title-hide,#fr-pre-url-hide,#fr-pre-status-hide').removeClass('hide');
            }
        },
        add:function(){
            $('#fr-pre-id').val(0);
            $('#fr-pre-pid').val(0);
            $(":radio[name='fr-pre-status'][value='1']").prop("checked", "checked");
            $(":radio[name='fr-pre-type'][value='1']").prop("checked", "checked");
            $('#fr-pre-title').val('');
            $('#fr-pre-url').val('');
            $('#fr-pre-modulename').val('');
            
            var types  = $("input[name='fr-pre-type']:checked").val();
            $('#fr-pre-type-hide').removeClass('hide');
            objClass.radioClick(types);
            this.loadSelect();
            this.showFrom('添加权限');
        },
        loadSelect:function(id){
            $.ajax({
                url:"{{route('b_permissions_getmodulename')}}",
                type:'get',
                dataType:'json',
                success:function(res){
                    if(res.code == 200){
                        $('#fr-pre-pid').empty().append('<option value="0">请选择权限模块</option>');  
                        $.each(res.data,function(k,obj){
                            $('#fr-pre-pid').append("<option value='"+obj.id+"'>"+obj.title+"</option>");
                        });
                        
                        $("#fr-pre-pid").find("option[value='"+id+"']").attr("selected",true);
                    }
                },
                error: throwError,
            });
        },
        edit:function(row_id){
            
            $('#fr-pre-type-hide').addClass('hide');
            var data = myTable.getRowData(row_id);
            this.loadSelect(data.pid);
            $('#fr-pre-id').val(data.id);
            $('#fr-pre-pid').val(data.pid);
            $(":radio[name='fr-pre-status'][value='" + data.status + "']").prop("checked", "checked");
            $(":radio[name='fr-pre-type'][value='" + data.type + "']").prop("checked", "checked");
            $('#fr-pre-title').val(data.title);
            $('#fr-pre-url').val(data.url);
            $('#fr-pre-modulename').val(data.title);
            objClass.radioClick(data.type);
            this.showFrom('修改权限');
        },
        submit:function(){
            var id              = $('#fr-pre-id').val();
            var pid             = $('#fr-pre-pid').val();
            var type            = $(":radio[name='fr-pre-type']:checked").val();
            var title           = $.trim($('#fr-pre-title').val());
            var url2            = $.trim($('#fr-pre-url').val());
            var status          = $(":radio[name='fr-pre-status']:checked").val();
            var modulename      = $.trim($('#fr-pre-modulename').val());
            if(type == 0){
                if(modulename == ''){layer.msg('请填写新增权限模块名！'); return false;}
            }else{
                if(pid == 0){layer.msg('请选择权限模块'); return false;}
                if(title == ''){layer.msg('权限名不能为空'); return false;}
                if(url == ''){layer.msg('权限地址不能为空'); return false;}
            }

            var url = (id == 0)?"{{route('b_permissions_addpermissions')}}":"{{route('b_permissions_updatepermissions')}}";
            $.ajax({
                url:url,
                type:'post',
                data:{id:id,pid:pid,type:type,title:title,url:url2,pre_status:status,modulename:modulename},
                dataType:'json',
                success:function(res){
                    if(res.code == 200){
                        layer.msg(res.message, {icon: 1});
                        $( "#dialog-message" ).dialog( "close" );
                        objClass.refresh();
                        $('#fr-role-id').val(0);
                        $('#fr-role-name').val('');
                        $('#fr-role-status').val('');
                    }else{
                        layer.msg(res.message, {icon: 5});
                    }
                },
                error: throwError,
            });
        },
        download:function(){
            alert('download');
        },
        delete:function(id){
            layer.confirm('您确定要删除该权限吗？', {icon: 3,
                btn: ['确定','取消'] //按钮
            }, function(){
                $.ajax({
                    url:"{{route('b_permissions_deletepermissions')}}",
                    type:'post',
                    data:{id:id},
                    dataType:'json',
                    success:function(res){
                        if(res.code == 200){
                            layer.msg('权限删除成功...', {icon: 1});
                            myTable.refresh();
                        }else{
                            layer.msg('权限删除失败', {icon: 5});
                        }
                    },
                    error: throwError,
                });
            });
        },
        refresh:function(){
            var data = {
                title:$.trim($('#search-pre-name').val()),
                status:$('#search-pre-status').val()
            };
            myTable.setSearchParams(data);
            myTable.refresh();
        },
        showFrom:function(title){
            var _this = this;
            $( "#dialog-message" ).removeClass('hide').dialog({
                modal: true,
                title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon glyphicon glyphicon-plus'></i> "+title+"</h4></div>",
                title_html: true,
                width:600,
                buttons: [{
                        text: "取消",
                        class : "btn btn-minier",
                        click: function() {
                            $('#fr-role-id').val(0);
                            $('#fr-role-name').val('');
                            $('#fr-role-status').val('');
                            $( this ).dialog( "close" ); 
                        } 
                    },{
                        text: "确定",
                        class: "btn btn-primary btn-minier",
                        click: function() {
                            _this.submit()
                        } 
                    }
                ]
            }).parent().css('top','10px');
        }
    };

    $('#btns-type-one > button').on('click',function(){
        objClass[$(this).data('type')]();
    });
</script>
@endpush