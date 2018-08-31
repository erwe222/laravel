
@extends('layouts.body')
@section('content')
<div class="page-header">
	<h1>
		电商模块
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			前台类目管理
		</small>
	</h1>
</div>
<style>
	.select-div{
		height: 370px;border: 1px solid #ccc;overflow-y: scroll;
	}

	.select-div p{
		width: 100%;
		padding: 5px;
		padding-left: 10px;
		height:30px;
		border-bottom: 1px solid #ccc;
		margin-bottom: 0px;
		color: #585858 !important;
		
	}

	.select-div p:hover{
		background: #EEE;
		cursor: pointer;
	}

	.select-div-s p:after{ 
		content:"▶";
		float: right;
		color: #6FB3E0 !important;
	}
</style>

<div class="row">
	<div class="col-xs-12">
		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
			<strong>注意：</strong>前台类目树管理，类目树一旦修改目录导航也会跟着变动......<br>
		</div>
		<form class="form-horizontal" role="form" autocomplete="off" >
			<div class="form-group">
				<div class="col-sm-11">
					<div > 
				 		<div class="col-md-4">  
							<input class="filter form-control" type="text" placeholder="一级类目筛选" style="text-align: center;" id="search-one">
							<div style="" class="select-div select-div-s" id="liemu-one">
								
							</div>
							<div style="margin-top: 3px;">
								<button type="button" class="btn btn-white btn-sm btn-primary" id="create-btn-one">添加一级类目</button>
							</div>
						</div>
					    <div class=" col-md-4">  
				          	<input class="filter form-control" type="text" placeholder="二级子类目筛选" id="search-two"  style="text-align: center;">  
				            <div style="" class="select-div select-div-s" id="liemu-two">

							</div>
							<div style="margin-top: 3px;">
								<button type="button" class="btn btn-white btn-sm btn-primary" id="create-btn-two">添加二级类目</button>
							</div>
				       </div>
				       <div class=" col-md-4">  
				          	<input class="filter form-control" type="text" placeholder="三级子类目筛选" id="search-three" style="text-align: center;"> 
				            <div style="" class="select-div" id="liemu-three">

							</div>
							<div style="margin-top: 3px;">
								<button type="button" class="btn btn-white btn-sm btn-primary" id="create-btn-three" >添加三级类目</button>
							</div>
				       </div>
				   </div>
				</div>
			</div>
		</form>
	</div>
</div>


<div id="dialog-message" class="hide" >
    <form class="form-horizontal" role="form" id="menu-form" autocomplete="off">
        <input type="hidden" id="fr-category-parentid"  value="0"  />
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="fr-category-type"> 类目级别 </label>
            <div class="col-sm-9">
                <input type="text" id="fr-category-type"  placeholder="一级类目" class="form-control" readonly value="一级类目" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="fr-category-name"> 类目名称 </label>
            <div class="col-sm-9">
                <input type="text" id="fr-category-name"  placeholder="请填写类目名称..." class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label no-padding-right" for="fr-category-description"> 类目描述 </label>
            <div class="col-sm-9">
                <input type="text" id="fr-category-description"  placeholder="选择性填写（可不填）" class="form-control" />
            </div>
        </div>
</form>
</div>
	

@endsection

@push('scripts')
<script type="text/javascript">

	var obj = {
		createLoading:false,
		select:{
			selectone:0,
			selecttwo:0,
		},
		showCreateCategoryBox(type,parent_id){
			var _this = this;

			if(type == 1){
				$('#fr-category-type').val('一级类目');
			}else if(type == 2){
				$('#fr-category-type').val('二级类目');
			}else {
				$('#fr-category-type').val('三级类目');
			}

			$('#fr-category-parentid').val(parent_id);
			$('#fr-category-name').val('');
			$('#fr-category-description').val('');


            $("#dialog-message" ).removeClass('hide').dialog({
                modal: true,
                title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon glyphicon glyphicon-plus'></i> 添加类目</h4></div>",
                title_html: true,
                width:600,
                buttons: [{
                        text: "取消",
                        class : "btn btn-minier",
                        click: function() {
                            $(this).dialog( "close" ); 
                        }
                    },{
                        text: "确定",
                        class: "btn btn-primary btn-minier",
                        click: function() {
                            _this.createCategory(type);
                        } 
                    }
                ]
            }).parent().css('top','10px');
		},
		//创建类目
		createCategory:function(type){
			var data = {
				pid  		: $('#fr-category-parentid').val(),
				name 		: $.trim($('#fr-category-name').val()),
				description : $.trim($('#fr-category-description').val())
			}

			if(data.name == ''){
				alert('类目名不能为空');
				return false;
			}

			if(this.createLoading == false){
				$.ajax({
                    url:"{{route('b_goods_createcategory')}}",
                    type:'post',
                    data:data,
                    dataType:'json',
                    beforeSend:function(){
                        obj.createLoading = true;
                    },
                    complete:function(){
                        obj.createLoading = false;
                    },
                    success:function(res){
                        if(res.code == 200){
                        	$("#dialog-message" ).dialog( "close" ); 
                            layer.msg(res.message, {icon: 1});
                            if(type == 1){
								$('#liemu-one').append('<p data-id="'+ res.data.id +'"> ' + res.data.name + '</p>');
                            }else if(type == 2){
								$('#liemu-two').append('<p data-id="'+ res.data.id +'"> ' + res.data.name + '</p>');
                            }else{
								$('#liemu-three').append('<p data-id="'+ res.data.id +'"> ' + res.data.name + '</p>');
                            }
                        }else{
                            layer.msg(res.message, {icon: 5});
                        }
                    },
                    error: throwError,
	            });
			}
		},
		search:function(type,val){
			var emptyHtml = '<div style="width:100%;height:100%;text-align:center;padding-top:20px;font-weight: blod !important;">子目录为空</div>';
			var pid = 0;
			if(type == 2){
				pid = obj.select.selectone;
			} else if(type == 3){
				pid = obj.select.selecttwo;
			}

			if(type != 1 && pid == 0){
				return false;
			}	

			$.ajax({
                url:"{{route('b_goods_searchcategory')}}",
                type:'get',
                data:{type:type,pid:pid,name:val},
                dataType:'json',
                success:function(res){
                	if(type == 1){
						$('#liemu-one').html('');
						$('#liemu-two').html('');
						$('#liemu-three').html('');
                	}else if(type == 2){
						$('#liemu-two').html('');
						$('#liemu-three').html('');
						$('#search-three').val('')
                	}else if(type == 3){
                		$('#liemu-three').html('');
                	}

                	if(res.data.datas.length > 0){
                		$.each(res.data.datas,function(k,v){
							if(type == 1){
								$('#liemu-one').append('<p data-id="'+ v.id +'"> ' + v.name + '</p>');
		                	}else if(type == 2){
								$('#liemu-two').append('<p data-id="'+ v.id +'"> ' + v.name + '</p>');
		                	}else if(type == 3){
		                		$('#liemu-three').append('<p data-id="'+ v.id +'"> ' + v.name + '</p>');
		                	}
						});
                	}else{
                		if(type == 1){
							$('#liemu-one').append(emptyHtml);
	                	}else if(type == 2){
							$('#liemu-two').append(emptyHtml);
	                	}else if(type == 3){
	                		$('#liemu-three').append(emptyHtml);
	                	}
                	}
                },
                error: throwError,
            });
		},

	}

	obj.search(1,'');

	$(document).on('click','#liemu-one p',function(){
		obj.select.selectone = $(this).data('id');
		obj.select.selecttwo = 0;

		$('#search-two').val('');
		$('#search-three').val('');

		obj.search(2,'');

		$(this).css('background','#EEE').siblings().css('background','none');
	});

	$(document).on('click','#liemu-two p',function(){
		obj.select.selecttwo = $(this).data('id');
		obj.search(3,'');

		$('#search-three').val('');

		$(this).css('background','#EEE').siblings().css('background','none');
	});



	$('#search-one').on('input',function(){
		obj.select.selectone = 0;
		obj.select.selecttwo = 0;
		obj.search(1,$(this).val());
	});

	$('#search-two').on('input',function(){
		obj.select.selecttwo = 0;
		obj.search(2,$(this).val());
	});

	$('#search-three').on('input',function(){
		obj.search(3,$(this).val());
	});


	$('#create-btn-one').on('click',function(){
		obj.showCreateCategoryBox('1',0);
	});

	$('#create-btn-two').on('click',function(){
		if(obj.select.selectone == 0){
			layer.msg('请选择需要<br/>添加子栏目的一级栏目名', {
			    time: 10000, //20s后自动关闭
			    btn: ['明白了', '知道了']
			  });
			return false;
		}

		obj.showCreateCategoryBox('2',obj.select.selectone);
	});

	$('#create-btn-three').on('click',function(){

		if(obj.select.selecttwo == 0){
			layer.msg('请选择需要<br/>添加子栏目的二级栏目名', {
			    time: 20000, //20s后自动关闭
			    btn: ['明白了', '知道了']
			  });
			return false;
		}

		obj.showCreateCategoryBox('3',obj.select.selecttwo);
	});


</script>

@endpush