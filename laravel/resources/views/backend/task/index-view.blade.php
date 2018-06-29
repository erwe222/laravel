@extends('layouts.body')
@section('content')
<div class="page-header">
    <h1>消息通知 <small><i class="ace-icon fa fa-angle-double-right"></i> 我的任务管理</small></h1>
</div>
<div class="row">
	<p class="pull-right" id="btns-type-one" >
            <button class="btn btn-white btn-info btn-bold" data-type="addTask" >
                <i class="ace-icon glyphicon glyphicon-plus bigger-120"></i>创建任务
            </button>
        </p>
    <div class="col-xs-12">
    	<div class="tabbable">
			<ul class="nav nav-tabs" id="myTab">
				<li class="active" data-tablename='creditcard1' >
					<a data-toggle="tab" href="#creditcard1" aria-expanded="true">
						<i class="green ace-icon fa fa-credit-card bigger-120 "></i>
						我的计划
					</a>
				</li>

				<li data-tablename='creditcard2' >
					<a data-toggle="tab" href="#creditcard2" aria-expanded="false" >
						<i class="green ace-icon fa fa-credit-card bigger-120 "></i>
						委派他人
					</a>
				</li>
				<li data-tablename='creditcard3' >
					<a data-toggle="tab" href="#creditcard3" aria-expanded="false">
						<i class="green ace-icon fa fa-credit-card bigger-120 "></i>
						他人委派
					</a>
				</li>
			</ul>

			<div class="tab-content">
				<div id="creditcard1" class="tab-pane fade active in" style='min-height:500px;'>
			        <table id="dynamic-table1" class="table table-striped table-bordered table-hover" style="width:100%;"></table>
				</div>

				<div id="creditcard2" class="tab-pane fade " style='min-height:500px;' >
			        <table id="dynamic-table2" class="table table-striped table-bordered table-hover" style="width:100%;"></table>
				</div>

				<div id="creditcard3" class="tab-pane fade " style='min-height:500px;'>
					<table id="dynamic-table3" class="table table-striped table-bordered table-hover" style="width:100%;"></table>
				</div>
			</div>
		</div>
    </div>
</div>
@endsection



@push('scripts')
<script src="/ace-asstes/js/jquery.dataTables.min.js"></script>
<script src="/ace-asstes/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="/js/myTable.js"></script>
<script>
    var obj = {
    	autowidth:true,
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
    
    var myTable1 = new MyTable('#dynamic-table1',obj,"{{route('b_role_getroleslist')}}");
    
	myTable1.init();

    var myTable2 = new MyTable('#dynamic-table2',obj,"{{route('b_role_getroleslist')}}");
	myTable2.init();

	var myTable3 = new MyTable('#dynamic-table3',obj,"{{route('b_role_getroleslist')}}");
	myTable3.init();


    $('#btns-type-one > button').on('click',function(){
        objClass[$(this).data('type')]();
    });


    $('#myTab li').on('click',function(){
    	var name = $(this).data('tablename');
    	if(name == 'creditcard1'){
			setTimeout(function(){myTable1.refresh();},100);
    	}else if(name == 'creditcard2'){
			setTimeout(function(){myTable2.refresh();},100);
    	}else if(name == 'creditcard3'){
			setTimeout(function(){myTable3.refresh();},100);
    	}
    });


    var objClass = {
    	addTask:function(){
    		var index = layer.open({
		      type: 2,
		      title: '<span class="blue"><i class="ace-icon glyphicon glyphicon-plus "></i> 创建任务</span>',
		      shadeClose: true,
		      shade: false,
		      maxmin: true, 
		      area: ['900px', '600px'],
		      content: "{{route('b_task_createtaskbox')}}"
		    });
		    layer.full(index);
    	}
    };
</script>
<script>



</script>

@endpush