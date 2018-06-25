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
                            <option value="1">启 用</option>
                            <option value="0">禁 用</option>
                    </select>
                </div> 
                <div class="form-group">
                    <input type="text" id="search-role-name" name="params[id]" class="form-control" title="ID" placeholder="角色名">
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
        <input type="hidden" id="fr-role-id"  value="0"  />
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="menu-name"> 角色名 </label>
            <div class="col-sm-9">
                <input type="text" id="fr-role-name"  placeholder="请填写角色名..." class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1-4"> 角色名状态 </label>
            <div class="col-sm-9">
                <div class="radio">
                    <label>
                        <input name="fr-role-status" type="radio"  class="ace" checked="" value="1" />
                        <span class="lbl">启用</span>
                    </label>
                    <label>
                        <input name="fr-role-status" type="radio"  class="ace" value="0" />
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
            {title: '角色名',data: 'name',name:'name',orderable:false,width: 100},
            {title: '状态',data: 'status',name:'status',orderable:false,width: 100,render: function ( data, type, row, meta ) {
                if(data == 1){
                    return '<span class="label label-success arrowed-in arrowed-in-right" data-rowindex="'+meta.row+'">启用</span>';
                }else{
                    return '<span class="label label-danger arrowed" data-rowindex="'+meta.row+'">禁用</span>';
                }
            }},
            {title: '使用人数',data: 'total',width: 100,orderable:false},
            {title: '添加时间',data: 'created_at',width: 150},
            {title: '修改时间',data: 'updated_at',width: 150},
            {title: '操 作',data: 'id',orderable:false,width: 240,render: function ( data, type, row, meta ) {
                var str = '<button class="btn btn-minier btn-purple" onclick="objClass.edit(\''+meta.row+'\')"><i class="ace-icon fa fa-pencil bigger-130"></i> 编辑</button>&nbsp;';
                str += '<button class="btn btn-minier btn-danger" onclick="objClass.delete(\''+row.id+'\')"><i class="ace-icon fa fa-trash-o bigger-130"></i> 删除</button>&nbsp;';
                str += '<button class="btn btn-minier btn-success" onclick="objClass.change(\''+meta.row+'\')"><i class="ace-icon fa fa-pencil bigger-130"></i> 修改权限</button>';
                return str;
            }}
        ],
    };
    
    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_role_getroleslist')}}");
    myTable.init();
    
    $('#grid-search-form').on('submit',function(){
        objClass.refresh();
    });

    var objClass = {
        add:function(){
            this.showFrom();
        },
        edit:function(row_id){
            var data = myTable.getRowData(row_id);
            $('#fr-role-id').val(data.id);
            $('#fr-role-name').val(data.name);
            $(":radio[name='fr-role-status'][value='" + data.status + "']").prop("checked", "checked");
            this.showFrom();
        },
        submit:function(){
            var id      = $('#fr-role-id').val();
            var name    = $('#fr-role-name').val();
            var status  = $("input[name='fr-role-status']:checked").val();
            if($.trim(name) == ''){
                layer.msg('角色名不能为空');
                return false;
            }
            
            if(id == 0){
                var url = "{{route('b_role_addrole')}}";
            }else{
                var url = "{{route('b_role_updaterole')}}";
            }

            $.ajax({
                url:url,
                type:'post',
                data:{id:id,name:name,status:status},
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
            layer.confirm('您确定要删除该角色吗？', {icon: 3,
                btn: ['确定','取消'] //按钮
            }, function(){
                $.ajax({
                    url:"{{route('b_role_deleterole')}}",
                    type:'post',
                    data:{id:id},
                    dataType:'json',
                    success:function(res){
                        if(res.code == 200){
                            layer.msg('角色删除成功...', {icon: 1});
                            myTable.refresh();
                        }else{
                            layer.msg('角色删除失败', {icon: 5});
                        }
                    },
                    error: throwError,
                });
            });
        },
        refresh:function(){
            var data = {
                role_name:$.trim($('#search-role-name').val()),
                status:$('#search-role-status').val()
            };
            myTable.setSearchParams(data);
            myTable.refresh();
        },
        showFrom:function(){
            var _this = this;
            $( "#dialog-message" ).removeClass('hide').dialog({
                modal: true,
                title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon glyphicon glyphicon-plus'></i> 添加菜单</h4></div>",
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
        },
        change:function(row_id){
            var data = myTable.getRowData(row_id);
            var url = "{{route('b_role_rolepermissionsview')}}"+'?id='+data.id;
            var title = "【"+data.name+"】角色权限";
            var data = {href:url,title:title,icon:'fa fa-pencil',index:data.id,lock:false};
//            window.parent.objTab.tabAdd(data);
            window.parent.mytab.addTab(data);
        }
    };

    $('#btns-type-one > button').on('click',function(){
        objClass[$(this).data('type')]();
    });
    
    
</script>
@endpush