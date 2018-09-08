@extends('layouts.body')
@section('content')
	<link rel="stylesheet" href="/ima_up/css/amazeui.min.css">
    <link rel="stylesheet" href="/ima_up/css/amazeui.cropper.css">
    <link rel="stylesheet" href="/ima_up/css/custom_up_img.css">
	<style type="text/css">
 		.up-img-cover {width: 100px;height: 100px;}
 		.up-img-cover img{width: 100%;}
 		.up-img-txt label{font-weight: 100;margin-top: 50px;}
    </style>
	<div class="page-header">
		<h1>
		个人中心
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			我的信息
		</small>
		</h1>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="clearfix">
				<div class="pull-right">
					<span class="green middle bolder">选择：&nbsp;</span>

					<div class="btn-toolbar inline middle no-margin">
						<div data-toggle="buttons" class="btn-group no-margin">
							<label class="btn btn-sm btn-yellow active">
								<span class="bigger-110">个人简介</span>

								<input type="radio" value="1" />
							</label>



							<label class="btn btn-sm btn-yellow">
								<span class="bigger-110">个人设置</span>

								<input type="radio" value="2" />
							</label>
						</div>
					</div>
				</div>
			</div>

			<div class="hr dotted"></div>

			<div>
				<div id="user-profile-1" class="user-profile row">
					<div class="col-xs-12 col-sm-3 center">
						<div>
							<span class="profile-picture">
								<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="{{asset($admin_info->profile_pic)}}" />
							</span>

							<div class="space-4"></div>

							<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
								<div class="inline position-relative">
									<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
										<i class="ace-icon fa fa-circle light-green"></i>
										&nbsp;
										<span class="white">{{$admin_info->name}}</span>
									</a>

									
								</div>
							</div>
						</div>

						<div class="space-6"></div>

						<div class="profile-contact-info">
							<div class="profile-contact-links align-left">
								<a href="#" class="btn btn-link">
									<i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
									添加朋友
								</a>

								<a href="#" class="btn btn-link">
									<i class="ace-icon fa fa-envelope bigger-120 pink"></i>
									我的消息
								</a>

								<a href="#" class="btn btn-link">
									<i class="ace-icon fa fa-globe bigger-125 blue"></i>
									118.24.1.228
								</a>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-9">
						<div class="space-12"></div>

						<div class="profile-user-info profile-user-info-striped">
							<div class="profile-info-row">
								<div class="profile-info-name"> 邮箱地址 </div>
								<div class="profile-info-value">
									<span class="editable" >{{$admin_info->email}}</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> 昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称 </div>
								<div class="profile-info-value">
									<span class="editable" >{{$admin_info->name}}</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> 联系方式 </div>

								<div class="profile-info-value">
									<span class="editable" >{{$admin_info->telephone}}</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> 注册时间 </div>
								<div class="profile-info-value">
									<span class="editable" >{{$admin_info->created_at}}</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> 性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别 </div>
								<div class="profile-info-value">
									<span class="editable" >@if($admin_info->sex == 1) 男 @else 女  @endif</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> 密码期限 </div>
								<div class="profile-info-value">
									<span class="editable" >{{$admin_info->expiry_time}}</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name"> 关于我的 </div>
								<div class="profile-info-value">
									<span class="editable" >所有的深情，原来是由许多细碎的时光一一串成的，就像一串亮着迷蒙微光的小灯泡，静静地俯伏在脚边，照亮着我们彼此相依相伴的身影。</span>
								</div>
							</div>
						</div>

						<div class="space-20"></div>

						<div class="widget-box transparent">
							<div class="widget-header widget-header-small">
								<h4 class="widget-title blue smaller">
									<i class="ace-icon fa fa-rss orange"></i>
									最近的操作记录
								</h4>

								<div class="widget-toolbar action-buttons">
									<a href="#" data-action="reload">
										<i class="ace-icon fa fa-refresh blue"></i>
									</a>
								</div>
							</div>

							<div class="widget-body">
								<div class="widget-main padding-8">
									<div id="profile-feed-1" class="profile-feed">
										@if(count($actionLogList) > 0)
											@foreach($actionLogList as $v)
												<div class="profile-activity clearfix">
													<div>
														<img class="pull-left" alt="{{$v['name']}}的头像" @if($v['profile_pic'] != '') src="{{asset($v['profile_pic'])}}"  @else src="/ace-asstes/images/avatars/avatar5.png" @endif />
														<a class="user" href="#"> {{$v['name']}} </a>
														{{$v['content']}}
														<div class="time">
															<i class="ace-icon fa fa-clock-o bigger-110"></i>
															{{$v['created_at']}}
														</div>
													</div>
												</div>
											@endforeach
										@endif										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="hide">
				<div id="user-profile-2" class="user-profile row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="well well-sm">
							<div class="inline middle blue bigger-110"> 你的个人资料已完成70％ </div>
							&nbsp; &nbsp; &nbsp;
							<div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active pos-rel">
								<div class="progress-bar progress-bar-success" style="width:70%"></div>
							</div>
						</div><!-- /.well -->

						<div class="space"></div>

						<form class="form-horizontal" onsubmit='return false;'>
							<div class="tabbable">
								<ul class="nav nav-tabs padding-16">
									<li class="active">
										<a data-toggle="tab" href="#edit-basic">
											<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
											基本信息
										</a>
									</li>

									<li>
										<a data-toggle="tab" href="#edit-settings">
											<i class="purple ace-icon fa fa-cog bigger-125"></i>
											我的设置(预留)
										</a>
									</li>
								</ul>

								<div class="tab-content profile-edit-tab-content">
									<div id="edit-basic" class="tab-pane in active">
										<h4 class="header blue bolder smaller">通用</h4>

										<div class="row">
											<div class="col-xs-12 col-sm-4">
												<div class="up-img-cover"  id="up-img-touch" >
										    		<img class="am-circle" alt="点击图片上传" src="{{asset($admin_info->profile_pic)}}" data-am-popover="{content: '点击上传', trigger: 'hover focus'}" >
										    	</div>
											</div>

											<div class="vspace-12-sm"></div>

											<div class="col-xs-12 col-sm-8">
												<div class="form-group">
													<label class="col-sm-4 control-label no-padding-right" for="fr-field-nickname">昵称</label>

													<div class="col-sm-8">
														<input class="col-xs-12 col-sm-10" type="text" id="fr-field-nickname" placeholder="昵称" value="{{$admin_info->name}}" />
													</div>
												</div>

												<div class="space-4"></div>

												<div class="form-group">
													<label class="col-sm-4 control-label no-padding-right" for="form-field-first">性别</label>

													<div class="col-sm-8" style='margin-top: 7px;'>
														<label class="inline">
															<input name="fr-field-sex" type="radio" class="ace" @if($admin_info->sex == 1) checked @endif  value='1' />
															<span class="lbl middle"> 男</span>
														</label>

														&nbsp; &nbsp; &nbsp;
														<label class="inline">
															<input name="fr-field-sex" type="radio" class="ace" @if($admin_info->sex == 2) checked @endif value='2' />
															<span class="lbl middle"> 女</span>
														</label>
													</div>
												</div>
											</div>
										</div>

						

										<div class="space-4"></div>


										<div class="space"></div>
										<h4 class="header blue bolder smaller">联系</h4>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-email">电子邮箱</label>

											<div class="col-sm-9">
												<span class="input-icon input-icon-right">
													<input type="email" id="fr-field-email" value="{{$admin_info->email}}" readonly />
													<i class="ace-icon fa fa-envelope"></i>
												</span>
											</div>
										</div>

										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">电话</label>

											<div class="col-sm-9">
												<span class="input-icon input-icon-right">
													<input class="input-medium input-mask-phone" type="text" id="fr-field-phone" value="{{$admin_info->telephone}}" />
													<i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
												</span>
											</div>
										</div>

										<div class="space"></div>
										<h4 class="header bolder "></h4>
										<h4 ><button class="btn btn-sm btn-primary" onclick="objClass.saveInfo()"><i class="ace-icon fa fa-check" ></i> 保存</button></h4>
									</div>

									<div id="edit-settings" class="tab-pane">
										<div class="space-10"></div>

										<div>
											<label class="inline">
												<input type="checkbox" name="form-task-notice-checkbox" class="ace" />
												<span class="lbl blue">&nbsp;&nbsp;&nbsp;&nbsp;<i class="ace-icon fa fa-bell-o bigger-110 purple"></i>&nbsp;开启委派任务通知消息提示</span>
											</label>
										</div>

										<div class="space-8"></div>

										<div>
											<label class="inline">
												<input type="checkbox" name="form-login-notice-checkbox" class="ace" />
												<span class="lbl blue">&nbsp;&nbsp;&nbsp;&nbsp;<i class="ace-icon fa fa-bell-o bigger-110 purple"></i>&nbsp;开启用户登录消息提示</span>
											</label>
										</div>

										<div class="space-8"></div>

										<div>
											<label class="inline">
												<input type="checkbox" name="form-login-notice-checkbox" class="ace" />
												<span class="lbl blue">&nbsp;&nbsp;&nbsp;&nbsp;<i class="ace-icon fa fa-bell-o bigger-110 purple"></i>&nbsp;开启站内信消息提示</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div><!-- /.span -->
				</div><!-- /.user-profile -->
			</div>

			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->

	<!--图片上传框-->
    	<div class="am-modal am-modal-no-btn up-modal-frame" tabindex="-1" id="up-modal-frame">
		  <div class="am-modal-dialog up-frame-parent up-frame-radius">
		    <div class="am-modal-hd up-frame-header">
		       <label>修改头像</label>
		      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
		    </div>
		    <div class="am-modal-bd  up-frame-body">
		      <div class="am-g am-fl">
		      	
		      	<div class="am-form-group am-form-file">
			      <div class="am-fl">
			        <button type="button" class="am-btn am-btn-default am-btn-sm">
			          <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
			      </div>
			      <input type="file" class="up-img-file">
			   	</div>
		      </div>
		      <div class="am-g am-fl">
		      	<div class="up-pre-before up-frame-radius">
		      		<img alt="" src="" class="up-img-show" id="up-img-show" >
		      	</div>
		      	<div class="up-pre-after up-frame-radius">
		      	</div>
		      </div>
		      <div class="am-g am-fl">
   				<div class="up-control-btns">
    				<span class="am-icon-rotate-left"   id="up-btn-left"></span>
    				<span class="am-icon-rotate-right"  id="up-btn-right"></span>
    				<span class="am-icon-check up-btn-ok" url="{{route('b_admin_uploadportrait')}}"
    					parameter="{width:'100',height:'100'}">
    				</span>
   				</div>
	    	  </div>
		      
		    </div>
		  </div>
		</div>
    	
    	<!--加载框-->
    	<div class="am-modal am-modal-loading am-modal-no-btn" tabindex="-1" id="up-modal-loading">
		  <div class="am-modal-dialog">
		    <div class="am-modal-hd">正在上传...</div>
		    <div class="am-modal-bd">
		      <span class="am-icon-spinner am-icon-spin"></span>
		    </div>
		  </div>
		</div>
		
		<!--警告框-->
		<div class="am-modal am-modal-alert" tabindex="-1" id="up-modal-alert">
		  <div class="am-modal-dialog">
		    <div class="am-modal-hd">信息</div>
		    <div class="am-modal-bd"  id="alert_content">
		              成功了
		    </div>
		    <div class="am-modal-footer">
		      <span class="am-modal-btn">确定</span>
		    </div>
		  </div>
		</div>
@endsection

@push('scripts')
    <script src="/ima_up/js/amazeui.min.js" charset="utf-8"></script>
    <script src="/ima_up/js/cropper.min.js" charset="utf-8"></script>
    <script src="/ima_up/js/custom_up_img.js" charset="utf-8"></script>

	<script type="text/javascript">
		$('#profile-feed-1').ace_scroll({
			height: '350px',
			mouseWheelLock: true,
			alwaysVisible : true
		});
	
		$('[data-toggle="buttons"] .btn').on('click', function(e){
			var target = $(this).find('input[type=radio]');
			var which = parseInt(target.val());
			$('.user-profile').parent().addClass('hide');
			$('#user-profile-'+which).parent().removeClass('hide');
		});

	    var objClass = {
	    	isSaveloading:false,
	    	//保存用户个人信息
	    	saveInfo:function(){
	    		var nickname = $.trim($('#fr-field-nickname').val());
	    		var phone = $.trim($('#fr-field-phone').val());
	    		var sex = $("input[name='fr-field-sex']:checked").val();

	    		if(nickname == ''){
	    			layer.msg('昵称不能为空');
	    			return false;
	    		}

	    		if(phone != '' && !checkMobile($('#fr-field-phone').val())){
					layer.msg('手机号格式错误');
	    			return false;
	    		}

	    		if(this.isSaveloading == false){
	    			this.isSaveloading = true;
					$.ajax({
	                    url:"{{route('b_admin_changeprofile')}}",
	                    type:'post',
	                    data:{nickname:nickname,phone:phone,sex:sex},
	                    dataType:'json',
	                    complete:function(){
	                        objClass.isSaveloading = false;
	                    },
	                    success:function(res){
	                        if(res.code == 200){
	                            layer.msg(res.message, {icon: 1});
	                        }else{
	                            layer.msg(res.message, {icon: 5});
	                        }
	                    },
	                    error: throwError,
	                });
	    		}
	    		
	    	},
	    };
	</script>
@endpush