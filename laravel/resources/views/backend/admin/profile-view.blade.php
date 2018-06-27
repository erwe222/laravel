@extends('layouts.body')
@section('content')
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
					<span class="green middle bolder">选择简介：&nbsp;</span>

					<div class="btn-toolbar inline middle no-margin">
						<div data-toggle="buttons" class="btn-group no-margin">
							<label class="btn btn-sm btn-yellow active">
								<span class="bigger-110">1</span>

								<input type="radio" value="1" />
							</label>

							<label class="btn btn-sm btn-yellow">
								<span class="bigger-110">2</span>

								<input type="radio" value="2" />
							</label>

							<label class="btn btn-sm btn-yellow">
								<span class="bigger-110">3</span>

								<input type="radio" value="3" />
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
								<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="/ace-asstes/images/avatars/profile-pic.jpg" />
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
														<img class="pull-left" alt="{{$v['name']}}的头像" @if($v['profile_pic'] != '') src="{{$v['profile_pic']}}"  @else src="/ace-asstes/images/avatars/avatar5.png" @endif />
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
				<div id="user-profile-2" class="user-profile">
					<div class="tabbable">
						<ul class="nav nav-tabs padding-18">
							<li class="active">
								<a data-toggle="tab" href="#friends">
									<i class="blue ace-icon fa fa-users bigger-120"></i>
									朋友
								</a>
							</li>

							<li>
								<a data-toggle="tab" href="#pictures">
									<i class="pink ace-icon fa fa-picture-o bigger-120"></i>
									图片
								</a>
							</li>
						</ul>

						<div class="tab-content no-border padding-24">

							
							<div id="friends" class="tab-pane in active">
								<div class="profile-users clearfix">
									<div class="itemdiv memberdiv">
										<div class="inline pos-rel">
											<div class="user">
												<a href="#">
													<img src="/ace-asstes/images/avatars/avatar4.png" alt="Bob Doe's avatar" />
												</a>
											</div>

											<div class="body">
												<div class="name">
													<a href="#">
														<span class="user-status status-online"></span>
														鲍勃
													</a>
												</div>
											</div>

											<div class="popover">
												<div class="arrow"></div>

												<div class="popover-content">
													<div class="bolder">内容编辑器</div>

													<div class="time">
														<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
														<span class="green"> 20分钟前 </span>
													</div>

													<div class="hr dotted hr-8"></div>

													<div class="tools action-buttons">
														<a href="#">
															<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
														</a>

														<a href="#">
															<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
														</a>

														<a href="#">
															<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>			
								</div>

								<div class="hr hr10 hr-double"></div>

								<ul class="pager pull-right">
									<li class="previous disabled">
										<a href="#">&larr; 向前</a>
									</li>

									<li class="next">
										<a href="#">向后 &rarr;</a>
									</li>
								</ul>
							</div>

							<div id="pictures" class="tab-pane">
								<ul class="ace-thumbnails">
									<li>
										<a href="#" data-rel="colorbox">
											<img alt="150x150" src="/ace-asstes/images/gallery/thumb-1.jpg" />
											<div class="text">
												<div class="inner">悬停的示例标题</div>
											</div>
										</a>

										<div class="tools tools-bottom">
											<a href="#">
												<i class="ace-icon fa fa-link"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-paperclip"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-pencil"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-times red"></i>
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="hide">
				<div id="user-profile-3" class="user-profile row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="well well-sm">
							<div class="inline middle blue bigger-110"> 你的个人资料已完成70％ </div>
							&nbsp; &nbsp; &nbsp;
							<div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active pos-rel">
								<div class="progress-bar progress-bar-success" style="width:70%"></div>
							</div>
						</div><!-- /.well -->

						<div class="space"></div>

						<form class="form-horizontal">
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
											设置
										</a>
									</li>
								</ul>

								<div class="tab-content profile-edit-tab-content">
									<div id="edit-basic" class="tab-pane in active">
										<h4 class="header blue bolder smaller">通用</h4>

										<div class="row">
											<div class="col-xs-12 col-sm-4">
												<input type="file" />
											</div>

											<div class="vspace-12-sm"></div>

											<div class="col-xs-12 col-sm-8">
												<div class="form-group">
													<label class="col-sm-4 control-label no-padding-right" for="form-field-username">昵称</label>

													<div class="col-sm-8">
														<input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="昵称" value="dongyun" />
													</div>
												</div>

												<div class="space-4"></div>

												<div class="form-group">
													<label class="col-sm-4 control-label no-padding-right" for="form-field-first">性别</label>

													<div class="col-sm-8" style='margin-top: 7px;'>
														<label class="inline">
															<input name="form-field-radio" type="radio" class="ace" @if($admin_info->sex == 1) 男 checked='' @endif />
															<span class="lbl middle"> 男</span>
														</label>

														&nbsp; &nbsp; &nbsp;
														<label class="inline">
															<input name="form-field-radio" type="radio" class="ace" @if($admin_info->sex == 1) 男 checked='' @endif />
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
													<input type="email" id="form-field-email" value="{{$admin_info->email}}" readonly />
													<i class="ace-icon fa fa-envelope"></i>
												</span>
											</div>
										</div>

										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">电话</label>

											<div class="col-sm-9">
												<span class="input-icon input-icon-right">
													<input class="input-medium input-mask-phone" type="text" id="form-field-phone" value="{{$admin_info->telephone}}" />
													<i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
												</span>
											</div>
										</div>

										<div class="space"></div>
										<h4 class="header blue bolder smaller">社交</h4>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>

											<div class="col-sm-9">
												<span class="input-icon">
													<input type="text" value="facebook_alexdoe" id="form-field-facebook" />
													<i class="ace-icon fa fa-facebook blue"></i>
												</span>
											</div>
										</div>

										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>

											<div class="col-sm-9">
												<span class="input-icon">
													<input type="text" value="twitter_alexdoe" id="form-field-twitter" />
													<i class="ace-icon fa fa-twitter light-blue"></i>
												</span>
											</div>
										</div>

										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>

											<div class="col-sm-9">
												<span class="input-icon">
													<input type="text" value="google_alexdoe" id="form-field-gplus" />
													<i class="ace-icon fa fa-google-plus red"></i>
												</span>
											</div>
										</div>
									</div>

									<div id="edit-settings" class="tab-pane">
										<div class="space-10"></div>

										<div>
											<label class="inline">
												<input type="checkbox" name="form-field-checkbox" class="ace" />
												<span class="lbl">公开我的个人资料</span>
											</label>
										</div>

										<div class="space-8"></div>

										<div>
											<label class="inline">
												<input type="checkbox" name="form-field-checkbox" class="ace" />
												<span class="lbl">给我发送更新</span>
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
@endsection

@push('scripts')


		<script type="text/javascript">
			$(function($) {

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
			});
		</script>
@endpush