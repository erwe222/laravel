@extends('layouts.body')
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
            <button class="btn btn-white btn-info btn-bold" data-type="add" >
                <i class="ace-icon glyphicon glyphicon-plus bigger-120"></i>添加
            </button>
            <button class="btn btn-white btn-info btn-bold" data-type="download">
                <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>下载
            </button>
            <button class="btn btn-white btn-warning btn-bold" data-type="delete">
                <i class="ace-icon fa fa-trash-o bigger-120 orange"></i>删除
            </button>
            <button class="btn btn-white btn-success btn-bold" data-type="refresh">
                <i class="ace-icon fa fa-undo bigger-120" ></i>刷新
            </button>
        </p>
    </div>
</div>

<div id="orderinfo" style="width: 100%;"></div>

<div id="dialog-message" class="hide" >
<form class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-select-3"> 父级菜单 </label>
        <div class="col-sm-9">
            <!--<input type="text" id="form-field-1-1" placeholder="请填写菜单名..." class="form-control" disabled="" />-->
            <select placeholder="请填写菜单名..." class="form-control" ></select>
            <div class="widget-box widget-color-blue2" style="height:200px;overflow-y:auto;margin-top:0;">
                <div class="widget-body">
                    <div class="widget-main padding-8"><ul id="tree2"></ul></div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> 菜单名 </label>
        <div class="col-sm-9">
                <input type="text" id="form-field-1-1" placeholder="请填写菜单名..." class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-2"> 地址链接 </label>
        <div class="col-sm-9">
                <input type="text" id="form-field-1-2" placeholder="请填写地址链接..." class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-5"> 菜单图标 </label>
        <div class="col-sm-9">
                <input type="text" id="form-field-1-5" placeholder="请填写菜单图标..." class="form-control" />
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-3"> 菜单类型 </label>
        <div class="col-sm-9">
            <div class="radio">
                <label>
                    <input name="form-field-radio" type="radio" class="ace" checked="" />
                    <span class="lbl">目录菜单</span>
                </label>
                <label>
                    <input name="form-field-radio" type="radio" class="ace" />
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
                    <input name="form-field-radio" type="radio" class="ace" checked="" />
                    <span class="lbl">启用</span>
                </label>
                <label>
                    <input name="form-field-radio" type="radio" class="ace" />
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
<script>
easyloader.load('datagrid', function(){ // 加载指定模块 
    $("#orderinfo").datagrid({
        url: '/admin/getmenuslistdata',
        loadMsg: '正在载入数据,请耐心等待...',
        columns: [[//表头标题栏
            {field: 'id', title: 'ID', width: 10, align: 'center',checkbox:true},
            {field: 'parent_id', title: '父ID', align: 'center',width: 50},
            {field: 'name', title: '菜单名', align: 'center',width: 100},
            {field: 'url', title: '菜单地址', align: 'center',width: 120},
            {field: 'type', title: '菜单类型', align: 'center'},
            {field: 'icon', title: '菜单图标', width: 100},
            {field: 'status', title: '菜单状态', align: 'center',width: 100},
            {field: 'created_time', title: '菜单添加时间', align: 'center',width: 120,sortable:true},
            {field: 'updated_time', title: '菜单修改时间', align: 'center',sortable:true}
        ]],
        fit: false,
        pagination: true,
        pageSize: 10,
        pageList: [10, 20, 30, 50],
        rownumbers : false,//行号
        singleSelect: false,
        method:'get',
        onDblClickRow: function (index, row) {

        },
        queryParams:{testname:1111111111},
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
            
            $( "#dialog-message" ).removeClass('hide').dialog({
                modal: true,
                title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon glyphicon glyphicon-plus'></i> 添加菜单</h4></div>",
                title_html: true,
                width:600,
                buttons: [{
                        text: "取消",
                        class : "btn btn-minier",
                        click: function() {$( this ).dialog( "close" ); } 
                    },{
                        text: "确定",
                        class: "btn btn-primary btn-minier",
                        click: function() {
                                $( this ).dialog( "close" ); 
                        } 
                    }
                ]
            }).parent().css('top','10px');
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
            console.log(e);
	});
	
	function initiateDemoData(){
		var tree_data = [];
                $.ajax({
                    url:'/admin/getmenutreelist',
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