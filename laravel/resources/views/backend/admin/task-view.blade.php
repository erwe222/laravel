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
                            <option value="10">启 用</option>
                            <option value="0">禁 用</option>
                    </select>
                </div> 
                <div class="form-group">
                    <input type="text" id="search-admin-nickname"  class="form-control"  placeholder="昵称">
                </div>
                <div class="form-group">
                    <input type="text" id="search-admin-email"  class="form-control"  placeholder="登录邮箱">
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
        <div class="table-header">角色列表</div>
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover" style="width:100%;"></table>
        </div>
    </div>
</div>

<div id="dialog-message" class="hide" >
    <form class="form-horizontal" role="form" id="add-admin-form">
        <input type="hidden" id="fr-role-id"  value="0"  />
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="menu-name"> 登录邮箱 </label>
            <div class="col-sm-9">
                <input type="text" id="fr-admin-email"  placeholder="请填写登录邮箱..." class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="menu-name"> 昵称 </label>
            <div class="col-sm-9">
                <input type="text" id="fr-admin-name"  placeholder="请填写角色名..." class="form-control" />
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right " for="menu-name"> 登录密码 </label>
            <div class="col-sm-9">
                <input type="password" id="fr-admin-pwd"  placeholder="请填写登录密码..." class="form-control "  />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right " for="menu-name"> 重复密码 </label>
            <div class="col-sm-9">
                <input type="password" id="fr-admin-pwd2"  placeholder="请重复填写登录密码..." class="form-control "  />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="form-field-1-4"> 状态 </label>
            <div class="col-sm-9">
                <div class="radio">
                    <label>
                        <input name="fr-role-status" type="radio"  class="ace" checked="" value="10" />
                        <span class="lbl">启用</span>
                    </label>
                    <label>
                        <input name="fr-role-status" type="radio"  class="ace" value="0" />
                        <span class="lbl">禁用</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" >  </label>
            <div class="col-sm-9">
                <p style='height:19px;color:red;' id='add-admin-error'></p>
            </div>
        </div>
</form>
</div>
@endsection

@push('scripts')
<script src="/ace-asstes/js/jquery.dataTables.min.js"></script>
<script src="/ace-asstes/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="/js/myTable.js"></script>
<script >
    var obj = {
        scrollX: true,
        columns: [
            {data:null,checkbox:true,width:10,orderable:false,class:'table-checkbox',
                render:function(data){
                    return '<label class="pos-rel"><input type="checkbox" class="ace table-checkbox-l" value="' + data["id"] + '" /><span class="lbl"></span></label>';
                }
            },
            {title: '登录邮箱',data: 'email',name:'email',orderable:false,width: 100},
            {title: '昵称',data: 'name',name:'name',orderable:false,width: 100},
            {title: '联系方式',data: 'telephone',name:'telephone',orderable:false,width: 100},
            {title: '性别',data: 'sex',name:'sex',orderable:false,width: 10,render: function ( data, type, row, meta ) {
                return (data == 1) ? '男': '女';
            }},
            {title: '状态',data: 'status',name:'status',orderable:false,width: 30,render: function ( data, type, row, meta ) {
                var checked = (data == 10) ? 'checked':'';
                return '<label><input  class="ace ace-switch ace-switch-2 editStatus" type="checkbox" '+checked+' data-id="'+row.id+'" data-status="'+data+'"><span class="lbl"></span></label>';
            }},
            {title: '所属角色',data: 'role_name',name:'role_name',orderable:false,width: 100},
            {title: '注册时间',data: 'created_at',width: 80},
            {title: '操 作',data: 'id',orderable:false,width: 20,render: function ( data, type, row, meta ) {
                var str ='';
                str += '<button class="btn btn-minier btn-success" onclick="objClass.change(\''+meta.row+'\')"><i class="ace-icon fa fa-pencil bigger-130"></i> 查看||分配角色</button>';
                return str;
            }}
        ],
    };
    
    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_admin_getadminListdata')}}");
    myTable.init();
    
    $('#grid-search-form').on('submit',function(){
        objClass.refresh(true);
    });

    var objClass = {
        isAddLoading:false,
        isUpdateStatusLoading:false,
        add:function(){
            this.showFrom();
        },
        showSubmitError:function(msg,type){
            if(type == 1){
                $('#add-admin-error').html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-120"></i>&nbsp; 数据提交中，请稍等...');
            }else{
                if(msg == '' || msg == undefined){
                    $('#add-admin-error').html('');
                }else{
                    $('#add-admin-error').html('<i class="ace-icon fa fa-exclamation-triangle bigger-120 red"></i>&nbsp;'+msg);
                }
            }
        },
        submit:function(){
            var email       = $.trim($('#fr-admin-email').val());
            var status      = $("input[name='fr-admin-status']:checked").val();
            var name        = $.trim($('#fr-admin-name').val());
            var pwd         = $.trim($('#fr-admin-pwd').val());
            var pwd2        = $.trim($('#fr-admin-pwd2').val());
            if(email == ''){
                this.showSubmitError('登录邮箱不能为空');return false;
            }else if(!isEmail(email)){
                this.showSubmitError('登录邮箱格式填写错误');return false;
            }else if(name == ''){
                this.showSubmitError('昵称不能为空');return false;
            }else if(pwd == ''){
                this.showSubmitError('请设置登录密码');return false;
            }else if(pwd.length < 8){
                this.showSubmitError('登录密码必须大于等于8位数字或字母');return false;
            }else if(pwd !== pwd2){
                this.showSubmitError('重复密码输入错误');return false;
            }
            this.showSubmitError('');
            if(this.isAddLoading == false){
                this.isAddLoading = true;
                this.showSubmitError('',1);
                $.ajax({
                    url:"{{route('b_admin_createadmin')}}",
                    type:'post',
                    data:{email:email,name:name,status:status,pwd:pwd},
                    dataType:'json',
                    complete:function(){
                        objClass.isAddLoading = false;
                        objClass.showSubmitError('');
                    },
                    success:function(res){
                        if(res.code == 200){
                            layer.msg(res.message, {icon: 1});
                            $( "#dialog-message" ).dialog( "close" );
                            $('#fr-admin-email').val('');
                            $('#fr-admin-name').val('');
                            $('#fr-admin-pwd').val('');
                            $('#fr-admin-pwd2').val('');
                            objClass.showSubmitError('');
                            objClass.refresh();
                        }else{
                            layer.msg(res.message, {icon: 5});
                        }
                    },
                    error: throwError,
                });
            }
        },
        refresh:function(flag){
            var t = true;
            if(flag != undefined){
                t = flag;
            }
            var data = {
                name:$.trim($('#search-admin-nickname').val()),
                email:$.trim($('#search-admin-email').val()),
                status:$('#search-role-status').val()
            };

            myTable.setSearchParams(data);
            myTable.refresh(t);
        },
        showFrom:function(){
            var _this = this;
            $( "#dialog-message" ).removeClass('hide').dialog({
                modal: true,
                title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon glyphicon glyphicon-plus'></i> 添加管理员</h4></div>",
                title_html: true,
                width:600,
                closeOnEscape:false,
                open:function(event,ui){$(".ui-dialog-titlebar-close").hide();},
                show: {
                effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "explode",
                    duration: 1000
                },
                buttons: [{
                        text: "取消",
                        class : "btn btn-minier",
                        click: function() {
                            if(objClass.isAddLoading == false){
                                $('#fr-admin-email').val('');
                                $('#fr-admin-name').val('');
                                $('#fr-admin-pwd').val('');
                                $('#fr-admin-pwd2').val('');
                                objClass.showSubmitError('');
                                $( this ).dialog( "close" );
                            }
                        } 
                    },{
                        text: "添加",
                        class: "btn btn-primary btn-minier",
                        click: function() {
                            _this.submit()
                        } 
                    }
                ]
            });
        },
        change:function(row_id){
            var data = myTable.getRowData(row_id);
            var url = "{{route('b_admin_adminpermissionsview')}}"+'?id='+data.id;
            var title = "【"+data.name+"】查看或分配角色";
            var data = {href:url,title:title,icon:'fa fa-pencil',index:data.id,lock:false};
            var edit_admin_role = parent.layer.open({
				type: 2,
				maxmin: true,
				area: ['700px', '450px'],
				title: title,
				content: url,
                end:function(){
                  objClass.refresh();
              }
			});
        }
    };

    $('#btns-type-one > button').on('click',function(){
        objClass[$(this).data('type')]();
    });
    $(document).on('click','.editStatus', function(){
        var _this = $(this);
        var id = $(this).data('id');
        var status = $(this).data('status');
        layer.confirm('您确定要修改该用户的用户状态吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            status = (status == 0)?10:0;
            var upload_index = layer.msg('修改中, 请稍等...', {icon: 16,shade: 0.01,time:0});
            $.ajax({
                url:"{{route('b_admin_updateadminstatus')}}",
                type:'post',
                data:{id:id,status},
                dataType:'json',
                complete:function(){
                    layer.close(upload_index);
                },
                success:function(res){
                    if(res.code == 200){
                        layer.msg(res.message, {icon: 1});
                        objClass.refresh(false);
                    }else{
                        layer.msg(res.message, {icon: 5});
                    }
                },
                error: throwError,
            });
        });
        return false;
    });
    
</script>
@endpush