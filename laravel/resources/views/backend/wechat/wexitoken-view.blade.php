@extends('layouts.body')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="alert alert-info">
            <form class="form-inline" role="form" id="grid-search-form" onsubmit="return false;">
                <div class="form-group">
                    <input type="text" id="search-token-name"  class="form-control" placeholder="公众号AppId">
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
        <div class="table-header">微信 Access Token 授权列表</div>
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
            {data:null,title:'<label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label>',width:50,orderable:false,class:'table-checkbox',
                render:function(data){
                    return '<label class="pos-rel"><input type="checkbox" class="ace" value="' + data["id"] + '" /><span class="lbl"></span></label>';
                }
            },
            {title: '公众号AppId',data: 'app_id',name:'app_id',orderable:false,width: 200},
            {title: '授权 Access Token ',data: 'access_token',name:'access_token',orderable:false,width: 200},
            {title: '添加时间',data: 'created_at',width: 150},
            {title: '过期时间',data: 'expiry_time',name:'expiry_time',width: 100,orderable:false},
        ],
    };
    
    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_wechat_wexitokendata')}}");
    myTable.init();
    
    $('#grid-search-form').on('submit',function(){
        objClass.refresh();
    });

    var objClass = {
        refresh:function(){
            var data = {
                appid:$.trim($('#search-token-name').val()),
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