@extends('layouts.body')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="alert alert-info">
            <form class="form-inline" role="form" id="grid-search-form" onsubmit="return false;">
                <div class="form-group">
                    <label >操作类型：</label>
                    <select class="form-control" id="search-action-status" style="width: 100px;">
                            <option value="">全 部</option>
                            @foreach($data as $k=>$v)
								<option value="{{$k}}">{{$v}}</option>
                            @endforeach;
                    </select>
                </div> 
                <div class="form-group">
                    <input type="text" id="search-action-content"  class="form-control" title="ID" placeholder="输入详情...">
                </div>
                <button class="btn btn-info btn-sm"><i class="ace-icon fa fa-search"></i>搜索</button>
            </form>
        </div>
        <p class="pull-right" id="btns-type-one" >
            <button class="btn btn-white btn-success btn-bold" data-type="refresh" >
                <i class="ace-icon fa fa-undo bigger-120" ></i>刷新
            </button>
        </p>
    </div>
    <div class="col-xs-12">
        <div class="clearfix"><div class="pull-right tableTools-container"></div></div>
        <div class="table-header">管理员操作日志</div>
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover" style="width:100%;"></table>
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
        scrollX: true,
        columns: [
            {data:null,checkbox:true,width:10,orderable:false,class:'table-checkbox',
                render:function(data){
                    return '<label class="pos-rel"><input type="checkbox" class="ace table-checkbox-l" value="' + data["id"] + '" /><span class="lbl"></span></label>';
                }
            },
            {title: '操作人员',data: 'name',name:'name',orderable:false,width: 20},
            {title: '操作类型',data: 'type',name:'type',orderable:false,width: 20},
            {title: '操作IP',data: 'ip',name:'ip',orderable:false,width: 50},
            {title: '详情',data: 'content',name:'content',orderable:false,width: 500},
            {title: '操作时间',data: 'created_at',width: 10}
        ],
    };
    
    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_system_getrecordlist')}}");
    myTable.init();
    
    $('#grid-search-form').on('submit',function(){
        objClass.refresh();
    });

    var objClass = {
        
        refresh:function(){
            var data = {
                content:$.trim($('#search-action-content').val()),
                status:$('#search-action-status').val()
            };
            myTable.setSearchParams(data);
            myTable.refresh();
        }
    };

    $('#btns-type-one > button').on('click',function(){
        objClass[$(this).data('type')]();
    });
</script>
@endpush