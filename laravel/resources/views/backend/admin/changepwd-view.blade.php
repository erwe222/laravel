@extends('layouts.body')
@section('content')


<div class="page-header">
<h1>
个人中心
<small>
	<i class="ace-icon fa fa-angle-double-right"></i>
	修改我的登录密码
</small>
</h1>
</div>

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" role="form" onsubmit="return false;" id='fr-admin'>

			<div class="form-group has-info">
				<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 登录邮箱 </label>
				<div class="col-sm-9">
					<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="{{$admin_email}}">
				</div>
			</div>

			<div class="form-group has-info">
				<label class="col-sm-3 control-label no-padding-right" for="fr-admin-oldpwd"> 原始密码 </label>

				<div class="col-sm-9">
					<input type="password" id="fr-admin-oldpwd" placeholder="输入原始密码..." class="col-xs-10 col-sm-5">
				</div>
			</div>

			<div class="form-group has-info">
				<label class="col-sm-3 control-label no-padding-right" for="fr-admin-pwd"> 新密码 </label>

				<div class="col-sm-9">
					<input type="password" id="fr-admin-pwd" placeholder="输入新的密码..." class="col-xs-10 col-sm-5">
					<span class="help-inline col-xs-12 col-sm-7">
						<span class="middle help-block"><i class="ace-icon fa fa-info-circle"></i> 必须为字母加数字且长度不小于8位</span>
					</span>
				</div>
			</div>

			<div class="space-4"></div>

			<div class="form-group has-info">
				<label class="col-sm-3 control-label no-padding-right" for="fr-admin-pwd2"> 重复密码 </label>

				<div class="col-sm-9">
					<input type="password" id="fr-admin-pwd2" placeholder="请再次输入密码.." class="col-xs-10 col-sm-5">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" ></label>

				<div class="col-sm-9">
					<p style='height:20px;width:100%;' id='fr-tip'>
						
					</p>
				</div>
			</div>

			<div class="space-4"></div>

			<div class="clearfix ">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info btn-sm" type="button" onclick='objClass.submit()'>
						<i class="ace-icon fa fa-check bigger-110"></i>
						提交
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn btn-sm" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						清空
					</button>
				</div>
			</div>
		</form>
	</div>
</div>


@endsection

@push('scripts')
<script>

	var objClass = {
		isSubmitLoading:false,
		checkInput:function(){
			$('#fr-tip').html("");

			if($.trim($('#fr-admin-oldpwd').val()) == ''){
				$('#fr-tip').html("<span class='red'><i class='ace-icon fa fa-exclamation-triangle bigger-120'></i> 请输入您的原始密码...</span>");
				return false;
			}

			var new_pwd = $.trim($('#fr-admin-pwd').val());
			if(new_pwd == ''){
				$('#fr-tip').html("<span class='red'><i class='ace-icon fa fa-exclamation-triangle bigger-120'></i> 请输入您的新密码...</span>");
				return false;
			}

			if(!checkPassWord($('#fr-admin-pwd').val())){
				$('#fr-tip').html("<span class='red'><i class='ace-icon fa fa-exclamation-triangle bigger-120'></i> 新密码格式错误...</span>");
				return false;
			}


			if($('#fr-admin-oldpwd').val() == $('#fr-admin-pwd').val()){
				$('#fr-tip').html("<span class='red'><i class='ace-icon fa fa-exclamation-triangle bigger-120'></i> 新密码不能与原始密码一致...</span>");
				return false;
			}


			if($('#fr-admin-pwd').val() != $('#fr-admin-pwd2').val()){
				$('#fr-tip').html("<span class='red'><i class='ace-icon fa fa-exclamation-triangle bigger-120'></i> 重复密码输入错误...</span>");
				return false;
			}


			$('#fr-tip').html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-120"></i>&nbsp; <span class="green">数据提交中，请稍等...</span>');
			return true;
		},
		submit:function(){
			if(this.checkInput() && objClass.isSubmitLoading == false){
				objClass.isSubmitLoading = true;
				var old_pwd = $('#fr-admin-oldpwd').val();
				var new_pwd = $('#fr-admin-pwd').val();

				$.ajax({
                    url:"{{route('b_admin_changepwd')}}",
                    type:'post',
                    data:{old_pwd:old_pwd,new_pwd:new_pwd},
                    dataType:'json',
                    complete:function(res){
                        objClass.isSubmitLoading = false;
                        if(res.status != 200){
							$('#fr-tip').html('');
                        }
                    },
                    success:function(res){
                        if(res.code == 200){
                        	document.getElementById("fr-admin").reset();
                            $('#fr-tip').html("<span class='green'><i class='ace-icon glyphicon glyphicon-ok bigger-120'></i> "+res.message+"</span>");
                        }else{
                        	$('#fr-tip').html("<span class='red'><i class='ace-icon fa fa-exclamation-triangle bigger-120'></i> "+res.message+"</span>");
                        }
                    },
                    error: throwError,
                });
			}
		}
	};
</script>
@endpush