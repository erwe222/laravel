@extends('layouts.body')
@push('css')
<link rel="stylesheet" href="/jquery-easyui/themes/material/easyui.css" />
<link rel="stylesheet" href="/css/easycss-edit.css" />
<style>
    .tree-branch {
        border-left-width: 8px !important;
    }
</style>
@endpush
@section('content')
<div class="row" >
    <div class="col-xs-12">
        <div class="alert alert-info" >
            <form class="form-inline" role="form" id="grid-search-form" onsubmit="return false;">
                <!-- <div class="form-group">
                    <label >模块：</label>
                    <select class="form-control" id="search-menu-id" style="width: 100px;">
                            <option value="">全 部</option>
                    </select>
                </div>  -->
                <div class="form-group">
                    <label >状态：</label>
                    <select class="form-control" id="search-menu-status" style="width: 100px;">
                            <option value="">全 部</option>
                            <option value="1">启 用</option>
                            <option value="2">禁 用</option>
                    </select>
                </div> 
                <div class="form-group">
                    <label for="search-iframe-10" class="sr-only">名称</label>                
                    <input type="text" id="search-name" name="name" class="form-control" title="名称" placeholder="请输入名称">             
                </div> 
                <button class="btn btn-info btn-sm"><i class="ace-icon fa fa-search"></i>搜索</button>
                <button class="btn btn-info btn-sm" type='reset'><i class="ace-icon fa fa-search"></i>重置</button>
            </form>
        </div>
    </div>
    <div class="col-xs-12">
        <p class="pull-right" id="btns-type-one" >
            <button class="btn btn-white btn-info btn-bold" data-type="addShowFrom" >
                <i class="ace-icon glyphicon glyphicon-plus bigger-120"></i>添加
            </button>
            <button class="btn btn-white btn-success btn-bold" data-type="refresh">
                <i class="ace-icon fa fa-undo bigger-120" ></i>刷新
            </button>
        </p>
    </div>
    
    <div class="col-xs-12">
        <div class="clearfix"><div class="pull-right tableTools-container"></div></div>
        <div class="table-header">菜单列表</div>
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover" style="width:100%;"></table>
        </div>
    </div>
</div>


<div id="dialog-message" class="hide" >
    <form class="form-horizontal" role="form" id="menu-form">
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right"> 父级菜单 </label>
        <div class="col-sm-9">
            <div class="widget-box collapsed">
                <div class="widget-header">
                    <h4 class="widget-title" id="menu-parent">添加一级菜单</h4>
                    <div class="widget-toolbar" id="test">
                        <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-down" id="test-icon"></i></a>
                    </div>
                </div>
                <div class="widget-body" style="display:none;">
                    <div class="widget-main">
                        <ul id="tree2"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="menu-name"> 菜单名 </label>
        <div class="col-sm-9">
            <input type="text" id="menu-name" name="menu-name" placeholder="请填写菜单名..." class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="menu-url"> 地址链接 </label>
        <div class="col-sm-9">
            <input type="text" id="menu-url" name="menu-url" placeholder="请填写地址链接..." class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="menu-icon"> 菜单图标 </label>
        <div class="col-sm-9">
            <input type="text" id="menu-icon" placeholder="请填写菜单图标..." class="form-control" name="menu-icon"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="menu-url"> 排序 </label>
        <div class="col-sm-9">
            <input type="text" id="menu-sort" name="menu-sort" placeholder="请填写排序位置...." class="form-control" onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}" onafterpaste="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}" />
        </div>
    </div>
    <input type="hidden" id="menu-id"  name="menu-id" value="0"  />
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-3"> 菜单类型 </label>
        <div class="col-sm-9">
            <div class="radio">
                <label>
                    <input name="menu-type" type="radio" class="ace" checked="" value="0" />
                    <span class="lbl">目录菜单</span>
                </label>
                <label>
                    <input name="menu-type" type="radio" class="ace" value="1" />
                    <span class="lbl">页面菜单</span>
                </label>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-4"> 菜单状态 </label>
        <div class="col-sm-9">
            <div class="radio">
                <label>
                    <input name="menu-status" type="radio"  class="ace" checked="" value="1" />
                    <span class="lbl">启用</span>
                </label>
                <label>
                    <input name="menu-status" type="radio"  class="ace" value="2" />
                    <span class="lbl">禁用</span>
                </label>
            </div>
        </div>
    </div>
</form>
</div>
@endsection

@push('scripts')
<script src="/ace-asstes/js/tree.min.js"></script>
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
            {title: '父级菜单',data: 'parent_name',name:'parent_name',orderable:false,width: 100},
            {title: '菜单名',data: 'name',width: 100,orderable:false},
            {title: '菜单地址',data: 'url',width: 100,orderable:false},
            {title: '图标',data: 'icon',width: 100,orderable:false},
            {title: '类型',data: 'type',name:'status',orderable:false,width: 100,render: function ( data, type, row, meta ) {
                if(data == 0){
                    return '<span  class="btn btn-white btn-yellow btn-sm">目录菜单</span>';
                }else{
                    return '<span  class="btn btn-white btn-pink btn-sm">地址菜单</span>';
                }
            }},
            {title: '状态',data: 'status',name:'status',orderable:false,width: 100,render: function ( data, type, row, meta ) {
                if(data == 1){
                    return '<span class="label label-success" >启用</span>';
                }else{
                    return '<span class="label label-danger" >禁用</span>';
                }
            }},
            {title: '排序',data: 'sort',width: 30,orderable:false},
            {title: '添加时间',data: 'created_at',width: 150},
            {title: '操 作',data: 'id',orderable:false,width: 240,render: function ( data, type, row, meta ) {
                var str = '<button class="btn btn-minier btn-purple" onclick="objClass.edit(\''+meta.row+'\')"><i class="ace-icon fa fa-pencil bigger-130"></i> 编辑</button>&nbsp;';
                str += '<button class="btn btn-minier btn-danger" onclick="objClass.delete(\''+row.id+'\')"><i class="ace-icon fa fa-trash-o bigger-130"></i> 删除</button>&nbsp;';
                return str;
            }}
        ],
    };
    
    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_menus_getmenulist')}}");
    myTable.init();

    $('#grid-search-form').on('submit',function(){
        objClass.refresh();
    });

    var objClass = {
        addSubmit:false,
        addShowFrom:function(){
            this.clrarFrom();
            this.showFrom();
        },
        edit:function(row_id){
            var data = myTable.getRowData(row_id);
            $('#menu-parent').text(data.parent_name);
            $("input[name='menu-id']").val(data.id);
            $("input[name='menu-name']").val(data.name);
            $("input[name='menu-url']").val(data.url);
            $("input[name='menu-icon']").val(data.icon);
            $("input[name='menu-sort']").val(data.sort);
            $(":radio[name='menu-type'][value='" + data.type + "']").prop("checked", "checked");
            $(":radio[name='menu-status'][value='" + data.status + "']").prop("checked", "checked");
            this.showFrom();
        },
        clrarFrom:function(){
            $('#menu-parent').text('请选择父菜单');
            $("input[name='menu-id']").val(0);
            $("input[name='menu-name']").val('');
            $("input[name='menu-url']").val('');
            $("input[name='menu-icon']").val('');
            $("input[name='menu-sort']").val('');
            $("input[name='menu-type']:checked").val('');
            $("input[name='menu-status']:checked").val('');
        },
        refresh:function(){
            var data = {
                name:$.trim($('#search-name').val()),
                status:$.trim($('#search-menu-status').val()),
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
                            _this.clrarFrom();
                            $( this ).dialog( "close" ); 
                        } 
                    },{
                        text: "确定",
                        class: "btn btn-primary btn-minier",
                        click: function() {
                            var parent = $('#menu-parent').text();
                            var id     = $("input[name='menu-id']").val();
                            var name   = $("input[name='menu-name']").val();
                            var url    = $("input[name='menu-url']").val();
                            var icon   = $("input[name='menu-icon']").val();
                            var sort   = $("input[name='menu-sort']").val();
                            var type   = $("input[name='menu-type']:checked").val();
                            var status = $("input[name='menu-status']:checked").val();
                            
                            if(id == 0){
                                var url1 = "{{route('b_menus_addmenu')}}";
                            }else{
                                var url1 = "{{route('b_menus_updatemenu')}}";
                            }
                            
                            if(objClass.addSubmit == true){
                                return false;
                            }else{
                                objClass.addSubmit = true;
                            }

                            $.ajax({
                                url:url1,
                                type:'post',
                                data:{id:id,parent:parent,name:name,url:url,icon:icon,type:type,status:status,sort:sort},
                                dataType:'json',
                                complete:function(){
                                    objClass.addSubmit = false;
                                },
                                success:function(res){
                                    if(res.code == 200){
                                        layer.msg(res.message, {icon: 1});
                                        $( "#dialog-message" ).dialog( "close" );
                                        // objClass.refresh();
                                        window.location.reload();
                                        $( this ).dialog( "close" );
                                    }else{
                                        layer.msg(res.message, {icon: 5});
                                    }
                                },
                                error: throwError,
                            });
                        } 
                    }
                ]
            }).parent().css('top','10px');
        },
        delete:function(){
            alert('预留功能');
        }
    };
    
    $('#btns-type-one > button').on('click',function(){
        objClass[$(this).data('type')]();
    });

</script>
<script type="text/javascript">
    $(function(){
	var sampleData = initiateDemoData();
	$('#tree2').ace_tree({  
		dataSource: initiateDemoData()['dataSource2'] ,
		loadingHTML:'<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>',
		'open-icon' : 'ace-icon fa fa-folder-open',
		'close-icon' : 'ace-icon fa fa-folder',
		'itemSelect' : false,
		'folderSelect': true,
		'multiSelect': false,
		'selected-icon' : null,
		'unselected-icon' : null,
		'folder-open-icon' : 'ace-icon tree-plus',
		'folder-close-icon' : 'ace-icon tree-minus'
	}).on('selected.fu.tree', function(e) {
            $('#menu-parent').text($('.tree-selected >.tree-branch-header .tree-branch-name  .tree-label').text());
            $('#tree2').parent().parent().css('display','none');
            $('#test-icon').addClass('fa-chevron-down');
            $('#tree2').parent().parent().parent().addClass('collapsed');
	});
	
	function initiateDemoData(){
		var tree_data = [];
                $.ajax({
                    url:"{{route('b_menus_getmenutreelist')}}",
                    type:'get',
                    async: false,
                    data:{},
                    dataType:'json',
                    success:function(res){
                        tree_data = res;
                    }
                });




		    var dataSource2 = function(options, callback){
			var $data = null
			if(!("text" in options) && !("type" in options)){
				$data = tree_data;
				callback({ data: $data });
				return;
			}else if("type" in options && options.type == "folder") {
				if("additionalParameters" in options && "children" in options.additionalParameters)
					$data = options.additionalParameters.children || {};
				else $data = {}
			}
			if($data != null){
                setTimeout(function(){callback({ data: $data });} , parseInt(Math.random() * 500) + 200);
            }
		}
		return { 'dataSource2' : dataSource2}
	}

    function diGuiFun(data,flag){
        var html = '';
        flag++;
        for (var i = 0; i < data.length;i++) {

            var ll = '';
            for (var j = 0; j < flag;j++) {
                ll += '-';
            }

            html += "<option value='"+data[i].id+"'>"+ll+data[i].text+"</option>";
            if(data[i].additionalParameters.children.length > 0){
                console.log(data[i].additionalParameters.children);
                html += diGuiFun(data[i].additionalParameters.children,flag);
            }
        }

        return html;
    }


    function testfun(){
        $.ajax({
            url:"{{route('b_menus_getmenutreelist')}}",
            type:'get',
            data:{},
            dataType:'json',
            success:function(res){
                var html = diGuiFun(res,0);
                $('#search-menu-id').append(html);
            }
        });
    }

    testfun();

});
</script>
@endpush