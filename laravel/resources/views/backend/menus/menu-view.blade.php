@extends('layouts.body')
@push('css')
<link rel="stylesheet" href="/jquery-easyui/themes/material/easyui.css" />
<link rel="stylesheet" href="/css/easycss-edit.css" />

@endpush
@section('content')
<div class="row" >
    <div class="col-xs-12">
        <div class="alert alert-info" >
            <form class="form-inline" role="form" id="grid-search-form" onsubmit="return false;">
                <div class="form-group">
                    <label for="search-iframe-10" class="sr-only">ID</label>                
                    <input type="text" id="search-id" name="params[id]" class="form-control" title="ID" placeholder="请输入ID">
                </div>
                <div class="form-group">
                    <label for="search-iframe-10" class="sr-only">名称</label>                
                    <input type="text" id="search-name" name="params[name]" class="form-control" title="名称" placeholder="请输入名称">             
                </div> 
                <button class="btn btn-info btn-sm"><i class="ace-icon fa fa-search"></i>搜索</button>
            </form>
        </div>
    </div>
    <div class="col-xs-12">
        <p class="pull-right" id="btns-type-one" >
            <button class="btn btn-white btn-info btn-bold" data-type="showFrom" >
                <i class="ace-icon glyphicon glyphicon-plus bigger-120"></i>添加
            </button>
            <button class="btn btn-white btn-success btn-bold" data-type="refresh">
                <i class="ace-icon fa fa-undo bigger-120" ></i>刷新
            </button>
        </p>
    </div>
</div>
<div class="widget-box widget-color-blue2">
    <div class="widget-header"><h4 class="widget-title lighter smaller">菜单列表</h4></div>
    <div class="widget-body">
        <div id="orderinfo" style="width:100%;"></div>
    </div>
</div>

<div id="dialog-message" class="hide" >
    <form class="form-horizontal" role="form" id="menu-form">
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right"> 父级菜单 </label>
        <div class="col-sm-9">
            <div class="widget-box collapsed">
                <div class="widget-header">
                    <h4 class="widget-title" id="menu-parent">请选择父菜单</h4>
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
<script src="/jquery-easyui/easyloader.js"></script>
<script>
easyloader.load('datagrid', function(){ // 加载指定模块 
    $("#orderinfo").datagrid({
        url: "{{route('b_menus_getmenulist')}}",
        method:'get',
        loadMsg: '正在载入数据,请耐心等待...',
        columns: [[//表头标题栏
            {field: 'id', title: 'ID', width: 10, align: 'center',checkbox:true},
            {field: 'parent_id', title: '父级菜单', align: 'center'},
            {field: 'name', title: '菜单名', align: 'center'},
            {field: 'url', title: '菜单地址', align: 'center'},
            {field: 'icon', title: '图标',align: 'center'},
            {field: 'type', title: '类型', align: 'center',formatter: function (value, row, index) {
                if(value == 1){
                    return '<span  class="btn btn-white btn-yellow btn-sm">目录菜单</span>';
                }else{
                    return '<span  class="btn btn-white btn-pink btn-sm">地址菜单</span>';
                }
            }},
            
            {field: 'status', title: '当前状态', align: 'center',formatter: function (value, row, index) {
                if(value == 1){
                    return '<span class="label label-success" >启用</span>';
                }else{
                    return '<span class="label label-danger" >禁用</span>';
                }
            }},
            {field: 'created_at', title: '创建时间', align: 'center',sortable:true}
        ]],
        
        pagination: true,
        pageSize: 10,
        pageList: [10, 20, 30, 50],
        singleSelect: false,
        onLoadSuccess: function (data) {
            if (data.rows.length === 0) {
                var body = $(this).data().datagrid.dc.body2;
                body.find('table tbody').append('<tr><td width="' + body.width() + '" style="height: 100px; text-align: center;font-weight:bold;color:red;" colspan="4">数据库中暂无数据...</td></tr>');
            }
        }
    });

    $('#grid-search-form').on('submit',function(){
        objClass.refresh();
    });

    var objClass = {
        add:function(){
            var parent = $('#menu-parent').text();
            var id     = $("input[name='menu-id']").val();
            var name   = $("input[name='menu-name']").val();
            var url    = $("input[name='menu-url']").val();
            var icon   = $("input[name='menu-icon']").val();
            var type   = $("input[name='menu-type']:checked").val();
            var status = $("input[name='menu-status']:checked").val();
            return false;
        },
        clrarFrom:function(){
            $('#menu-parent').text('请选择父菜单');
            $("input[name='menu-id']").val(0);
            $("input[name='menu-name']").val('');
            $("input[name='menu-url']").val('');
            $("input[name='menu-icon']").val('');
            $("input[name='menu-type']:checked").val('');
            $("input[name='menu-status']:checked").val('');
        },
        download:function(){
            alert('download');
        },
        delete:function(){
            alert('delete');
        },
        refresh:function(){
            $("#orderinfo").datagrid('load',{
                keywords: 'asdf',
                start_time: 'ssssssssssss',
                end_time: 'asdfasd'
            });
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
                            if(_this.add()){
                                $( this ).dialog( "close" );
                            }
                        } 
                    }
                ]
            }).parent().css('top','10px');
        }
    };
    
    $('#btns-type-one > button').on('click',function(){
        objClass[$(this).data('type')]();
    });
});
</script>
<script type="text/javascript">
    $(function(){
	var sampleData = initiateDemoData();
	$('#tree2').ace_tree({  
		dataSource: sampleData['dataSource2'] ,
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
				else $data = {}//no data
			}
			if($data != null)
                        setTimeout(function(){callback({ data: $data });} , parseInt(Math.random() * 500) + 200);
		}
		return { 'dataSource2' : dataSource2}
	}
});
</script>
@endpush