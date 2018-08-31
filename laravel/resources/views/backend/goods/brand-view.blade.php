@extends('layouts.body')
@section('content')
<style type="text/css">
	.table > tbody > tr > td {
        vertical-align: middle;
    }
</style>
<div class="row">
    <div class="col-xs-12">
        <div class="alert alert-info">
            <form class="form-inline" role="form" id="grid-search-form" onsubmit="return false;">
                <div class="form-group">
                    <input type="text" id="search-role-name" name="params[id]" class="form-control" title="ID" placeholder="品牌名">
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
        <div class="table-header">品牌管理</div>
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover" style="width:100%;"></table>
        </div>
    </div>
</div>

<div id="dialog-message" class="hide" >

    <form class="form-horizontal" role="form" id="infoLogoForm" enctype='multipart/form-data' style="height: 200px;">
        <input type="hidden" id="fr-brand-id"  value="0"  />
        <input type="hidden" id="fr-brand-logourl"  value=""  />
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="menu-name"> 品牌名称* </label>
            <div class="col-sm-9">
                <input type="text" id="fr-brand-name"  placeholder="请填写品牌名..." class="form-control" />
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-2 control-label no-padding-right" for="menu-name"> 描述信息 </label>
            <div class="col-sm-9" >
                <input type="text" id="fr-brand-description"  placeholder="请填写描述信息..." class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="menu-name"> Logo图片* </label>
            <div class="col-sm-9">
                <div style="width: 153px;border: 1px solid rgb(213, 213, 213);cursor: pointer !important;">
                    <input type="file" id="fr-img-val"  name="file"  placeholder="请填写品牌名..." class="form-control"   style="width: 100px;opacity: 0;cursor: pointer !important;" onchange="objClass.uploadImg()" />
                    <div style="position: absolute;top: -10;top: 9px;left: 38px;cursor: pointer !important;z-index: -2;">
                        选择图片
                    </div>
                </div>
                <div style="width: 154px;height: 54px;margin-top: 0px;position: absolute;border: 2px solid rgb(204, 204, 204);display: none;top: 40px;" id="fr-img-box">
                	<img src="" id="test-file-src" width="150" height="50" />
                	<div style="position: absolute;right: 0px;font-size: 20px;cursor: pointer !important;color: red;top: 0px;z-index: 33;background: #fff;height: 15px;line-height: 15px;width: 12px;" onclick="objClass.clearImg()" title="删除">×</div>
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
        order: [[ 4, "desc"]], //初始化默认排序
        columns: [
            {data:null,checkbox:true,width:5,orderable:false,class:'table-checkbox',
                render:function(data){
                    return '<label class="pos-rel"><input type="checkbox" class="ace table-checkbox-l" value="' + data["id"] + '" /><span class="lbl"></span></label>';
                }
            },
            {title: '品牌Logo',data: 'logo_url',width: 160,orderable:false,width: 100,render: function ( data, type, row, meta ) {
                if(data.length <= 0){
                    return '';
                }
                return '<img src="'+ data +'"  width="75" height="25"  style="cursor:pointer;" onclick="objClass.catBigPicture(\''+ data +'\')" />';
            }},
            {title: '品牌名称',data: 'name',name:'name',orderable:false,width: 200},
            {title: '品牌描述',data: 'description',orderable:false},
            {title: '修改时间',data: 'updated_at',width: 150},
            {title: '操    作',data: 'id',orderable:false,width: 20,render: function ( data, type, row, meta ) {
                var str = '<i class="ace-icon fa fa-pencil bigger-130 green" onclick="objClass.edit(\''+meta.row+'\')" style="cursor:pointer;"></i>&nbsp;';
                return str;
            }}
        ],
    };
    
    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_goods_getbrandlist')}}");
    myTable.init();
    
    $('#grid-search-form').on('submit',function(){
        objClass.refresh();
    });

    var objClass = {
        addloading:false,
        add:function(){
            $('#fr-brand-id').val(0);
            $('#fr-brand-name').val('');
            $('#fr-brand-description').val('');
            $('#fr-brand-logourl').val('');
            $('#fr-img-box').hide();
            $('#fr-img-val').val('');
            $('#test-file-src').attr('src','');
            this.showFrom();
        },
        edit:function(row_id){
            var data = myTable.getRowData(row_id);

            $('#fr-brand-id').val(data.id);
            $('#fr-brand-name').val(data.name);
            $('#fr-brand-description').val(data.description);
            $('#fr-img-box').show();
            $('#test-file-src').attr('src',data.logo_url);
            $('#fr-brand-logourl').val(data.logo_url);

            this.showFrom();
        },
        refresh:function(){
            var data = {
                role_name:$.trim($('#search-role-name').val())
            };
            myTable.setSearchParams(data);
            myTable.refresh();
        },
        showFrom:function(){
            var _this = this;
            $( "#dialog-message" ).removeClass('hide').dialog({
                modal: true,
                title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon glyphicon glyphicon-plus'></i> 添加品牌信息</h4></div>",
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
                            _this.submit();
                        } 
                    }
                ]
            }).parent().css('top','10px');
        },
        clearImg:function(){
        	$('#fr-img-box').hide();
        	$('#fr-img-val').val('');
			$('#test-file-src').attr('src','');
            $('#fr-brand-logourl').val('');
        },
        uploadImg:function(){
        	$.ajax({
		      type: "POST",
		      url: "{{route('b_goods_uploadbrandlogo')}}",
		      data: new FormData($('#infoLogoForm')[0]),
		      processData: false,
		      contentType: false,
		      dataType:"json",
		      success: function (res) {
	        	console.log(res);
	        	if(res.code == 200){
	        		$('#test-file-src').attr('src',res.data.src);
                    $('#fr-brand-logourl').val(res.data.src);
	        		$('#fr-img-box').show();
	        	}else{
	        		layer.msg(res.message, {icon: 5});
	        	}
		      }

		  });
        },
        submit:function(){
            var id          = $('#fr-brand-id').val();
            var name        = $('#fr-brand-name').val();
            var description = $('#fr-brand-description').val();
            var logourl     = $('#fr-brand-logourl').val();
            if(name == ''){
                layer.msg('品牌名称不能为空');
                return false;
            }

            if(logourl == ''){
                layer.msg('品牌Logo 不能为空');
                return false;
            }

            if(id == 0){
                var postUrl = "{{route('b_goods_createbrand')}}";
            }else{
                var postUrl = "{{route('b_goods_updatebrand')}}";
            }

            if(this.addloading == false){
                var index = layer.load(2);
                $.ajax({
                    url:postUrl,
                    type:'post',
                    data:{id:id,name:name,description:description,logourl:logourl},
                    dataType:'json',
                    beforeSend:function(){
                        objClass.addloading = true;
                    },
                    complete:function(){
                        layer.close(index);
                        objClass.addloading = false;
                    },
                    success:function(res){
                        if(res.code == 200){
                            layer.msg(res.message, {icon: 1});
                            setTimeout(function(){
                                objClass.refresh();
                            },2000);

                            $("#dialog-message").dialog( "close" );
                        }else{
                            layer.msg(res.message, {icon: 5});
                        }
                    },
                    error: throwError,
                });
            }
        },
        catBigPicture:function(src){
            layer.open({
              type: 1,
              title: false,
              closeBtn: 0,
              area: '150px',
              skin: 'layui-layer-nobg', //没有背景色
              shadeClose: true,
              content: "<img src='"+ src +"'>"
            });
        }
    };

    $('#btns-type-one > button').on('click',function(){
        objClass[$(this).data('type')]();
    });
</script>
@endpush