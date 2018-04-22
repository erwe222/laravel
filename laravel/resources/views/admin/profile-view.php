<link rel="stylesheet" href="/ace-asstes/css/bootstrap.min.css" />
<link rel="stylesheet" href="/ace-asstes/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="/ace-asstes/css/jquery-ui.custom.min.css" />
<link rel="stylesheet" href="/ace-asstes/css/jquery.gritter.min.css" />
<link rel="stylesheet" href="/ace-asstes/css/select2.min.css" />
<link rel="stylesheet" href="/ace-asstes/css/bootstrap-datepicker3.min.css" />
<link rel="stylesheet" href="/ace-asstes/css/bootstrap-editable.min.css" />
<link rel="stylesheet" href="/ace-asstes/googlefonts/fonts.googleapis.com.css" />
<link rel="stylesheet" href="/ace-asstes/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
<link rel="stylesheet" href="/ace-asstes/css/ace-skins.min.css" />
<link rel="stylesheet" href="/ace-asstes/css/ace-rtl.min.css" />
<script src="/ace-asstes/js/ace-extra.min.js"></script>
<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; 选择皮肤</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> 固定导航</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑导航</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> 切换到左边</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											切换窄屏
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> 子菜单悬停</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact">紧凑侧边栏</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> 活动项高亮</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								用户资料页面
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									内联可编辑功能的3种样式
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="clearfix">
									<div class="pull-left alert alert-success no-margin alert-dismissable">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>

										<i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
										点击下面的图片或个人资料字段来编辑它们...
									</div>

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
															<span class="white">东云网</span>
														</a>

														<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
															<li class="dropdown-header"> 更改状态 </li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle green"></i>
&nbsp;
																	<span class="green">在线</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle red"></i>
&nbsp;
																	<span class="red">忙碌</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle grey"></i>
&nbsp;
																	<span class="grey">隐身</span>
																</a>
															</li>
														</ul>
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
														发送消息
													</a>

													<a href="#" class="btn btn-link">
														<i class="ace-icon fa fa-globe bigger-125 blue"></i>
														www.pydyun.com
													</a>
												</div>

												<div class="space-6"></div>

												<div class="profile-social-links align-center">
													<a href="#" class="tooltip-info" title="" data-original-title="访问我的Facebook">
														<i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
													</a>

													<a href="#" class="tooltip-info" title="" data-original-title="访问我的Twitter">
														<i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
													</a>

													<a href="#" class="tooltip-error" title="" data-original-title="访问我的Pinterest">
														<i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
													</a>
												</div>
											</div>

											<div class="hr hr12 dotted"></div>

											<div class="clearfix">
												<div class="grid2">
													<span class="bigger-175 blue">25</span>

													<br />
													关注
												</div>

												<div class="grid2">
													<span class="bigger-175 blue">12</span>

													<br />
													粉丝
												</div>
											</div>

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">
											<div class="center">
												<span class="btn btn-app btn-sm btn-light no-hover">
													<span class="line-height-1 bigger-170 blue"> 1,411 </span>

													<br />
													<span class="line-height-1 smaller-90"> 查看 </span>
												</span>

												<span class="btn btn-app btn-sm btn-yellow no-hover">
													<span class="line-height-1 bigger-170"> 32 </span>

													<br />
													<span class="line-height-1 smaller-90"> 关注 </span>
												</span>

												<span class="btn btn-app btn-sm btn-pink no-hover">
													<span class="line-height-1 bigger-170"> 4 </span>

													<br />
													<span class="line-height-1 smaller-90"> 项目 </span>
												</span>

												<span class="btn btn-app btn-sm btn-grey no-hover">
													<span class="line-height-1 bigger-170"> 23 </span>

													<br />
													<span class="line-height-1 smaller-90"> 评论 </span>
												</span>

												<span class="btn btn-app btn-sm btn-success no-hover">
													<span class="line-height-1 bigger-170"> 7 </span>

													<br />
													<span class="line-height-1 smaller-90"> 相册 </span>
												</span>

												<span class="btn btn-app btn-sm btn-primary no-hover">
													<span class="line-height-1 bigger-170"> 55 </span>

													<br />
													<span class="line-height-1 smaller-90"> 联系人 </span>
												</span>
											</div>

											<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> 用户名 </div>

													<div class="profile-info-value">
														<span class="editable" id="username">东云网</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 住址 </div>

													<div class="profile-info-value">
														<i class="fa fa-map-marker light-orange bigger-110"></i>
														<span class="editable" id="country">中国</span>
														<span class="editable" id="city">北京市</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 年龄 </div>

													<div class="profile-info-value">
														<span class="editable" id="age">23</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 加入时间 </div>

													<div class="profile-info-value">
														<span class="editable" id="signup">2018/01/10</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 最近在线 </div>

													<div class="profile-info-value">
														<span class="editable" id="login">3小时前</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">关于我</div>

													<div class="profile-info-value">
														<span class="editable" id="about">即时编辑</span>
													</div>
												</div>
											</div>

											<div class="space-20"></div>

											<div class="widget-box transparent">
												<div class="widget-header widget-header-small">
													<h4 class="widget-title blue smaller">
														<i class="ace-icon fa fa-rss orange"></i>
														最近的活动
													</h4>

													<div class="widget-toolbar action-buttons">
														<a href="#" data-action="reload">
															<i class="ace-icon fa fa-refresh blue"></i>
														</a>
&nbsp;
														<a href="#" class="pink">
															<i class="ace-icon fa fa-trash-o"></i>
														</a>
													</div>
												</div>

												<div class="widget-body">
													<div class="widget-main padding-8">
														<div id="profile-feed-1" class="profile-feed">
															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="李东云的头像" src="/ace-asstes/images/avatars/avatar5.png" />
																	<a class="user" href="#"> 李东云 </a>
																	更改了他的个人照片。
																	<a href="#">查看</a>

																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		1小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="Susan Smith's avatar" src="/ace-asstes/images/avatars/avatar1.png" />
																	<a class="user" href="#"> 苏珊 </a>

																	和李东云成为了朋友。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		2小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>
																	加入了
																	<a href="#">流行音乐</a>

																	小组。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		5小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>
																	更新了照片。
																	<a href="#">查看</a>
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		5小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="David Palms's avatar" src="/ace-asstes/images/avatars/avatar4.png" />
																	<a class="user" href="#"> 张伟 </a>
																	给张乔留言。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		8小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>
																	发表了一篇新的博客文章。
																	<a href="#">阅读</a>

																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		11小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="李东云的头像" src="/ace-asstes/images/avatars/avatar5.png" />
																	<a class="user" href="#"> 李东云 </a>

																	升级了他的技能。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		12小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>

																	已登录。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		12小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>

																	已登出。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		16小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>

																	已登录。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		16小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="hr hr2 hr-double"></div>

											<div class="space-6"></div>

											<div class="center">
												<button type="button" class="btn btn-sm btn-primary btn-white btn-round">
													<i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
													<span class="bigger-110">查看更多活动</span>

													<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
												</button>
											</div>
										</div>
									</div>
								</div>

								<div class="hide">
									<div id="user-profile-2" class="user-profile">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-18">
												<li class="active">
													<a data-toggle="tab" href="#home">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														个人信息
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#feed">
														<i class="orange ace-icon fa fa-rss bigger-120"></i>
														活动Feed
													</a>
												</li>

												<li>
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
												<div id="home" class="tab-pane in active">
													<div class="row">
														<div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">
																<img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="/ace-asstes/images/avatars/profile-pic.jpg" />
															</span>

															<div class="space space-4"></div>

															<a href="#" class="btn btn-sm btn-block btn-success">
																<i class="ace-icon fa fa-plus-circle bigger-120"></i>
																<span class="bigger-110">添加朋友</span>
															</a>

															<a href="#" class="btn btn-sm btn-block btn-primary">
																<i class="ace-icon fa fa-envelope-o bigger-110"></i>
																<span class="bigger-110">发送消息</span>
															</a>
														</div><!-- /.col -->

														<div class="col-xs-12 col-sm-9">
															<h4 class="blue">
																<span class="middle">东云网</span>

																<span class="label label-purple arrowed-in-right">
																	<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
																	在线
																</span>
															</h4>

															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> 用户名 </div>

																	<div class="profile-info-value">
																		<span>东云网</span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> 住址 </div>

																	<div class="profile-info-value">
																		<i class="fa fa-map-marker light-orange bigger-110"></i>
																		<span>中国</span>
																		<span>北京市</span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> 年龄 </div>

																	<div class="profile-info-value">
																		<span>23</span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> 加入时间 </div>

																	<div class="profile-info-value">
																		<span>2018/01/10</span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> 最近登录 </div>

																	<div class="profile-info-value">
																		<span>3小时前</span>
																	</div>
																</div>
															</div>

															<div class="hr hr-8 dotted"></div>

															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> 网站 </div>

																	<div class="profile-info-value">
																		<a href="#" target="_blank">www.pydyun.com</a>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name">
																		<i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
																	</div>

																	<div class="profile-info-value">
																		<a href="#">在Facebook上找到我</a>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name">
																		<i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
																	</div>

																	<div class="profile-info-value">
																		<a href="#">在推特上关注我</a>
																	</div>
																</div>
															</div>
														</div><!-- /.col -->
													</div><!-- /.row -->

													<div class="space-20"></div>

													<div class="row">
														<div class="col-xs-12 col-sm-6">
															<div class="widget-box transparent">
																<div class="widget-header widget-header-small">
																	<h4 class="widget-title smaller">
																		<i class="ace-icon fa fa-check-square-o bigger-110"></i>
																		关于我
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		<p>
																		所有的深情，原来是由许多细碎的时光一一串成的，就像一串亮着迷蒙微光的小灯泡，静静地俯伏在脚边，照亮着我们彼此相依相伴的身影。
																		</p>
																		<p>
																			当时只道是寻常，直到一天，灯火已阑珊，我们才发现，那些寻常日子是多么美好的祝福。
																		</p>
																		<p>
																			我们应该相信：提供一架足够长的梯子，我们都可以到达宇宙。这可以是一种生存的信念，或者作为我们一生奋斗的动力，都好。至少我们相信了，我们去做了，在路上了，最后肯定可以收获我们想要的生活。
																		</p>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-xs-12 col-sm-6">
															<div class="widget-box transparent">
																<div class="widget-header widget-header-small header-color-blue2">
																	<h4 class="widget-title smaller">
																		<i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
																		我的技能
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main padding-16">
																		<div class="clearfix">
																			<div class="grid3 center">
																				<div class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952">
																					<span class="percent">45</span>%
																				</div>

																				<div class="space-2"></div>
																				平面设计
																			</div>

																			<div class="grid3 center">
																				<div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
																					<span class="percent">90</span>%
																				</div>

																				<div class="space-2"></div>
																				HTML5 & CSS3
																			</div>

																			<div class="grid3 center">
																				<div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
																					<span class="percent">80</span>%
																				</div>

																				<div class="space-2"></div>
																				Javascript/jQuery
																			</div>
																		</div>

																		<div class="hr hr-16"></div>

																		<div class="profile-skills">
																			<div class="progress">
																				<div class="progress-bar" style="width:80%">
																					<span class="pull-left">HTML5 & CSS3</span>
																					<span class="pull-right">80%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-success" style="width:72%">
																					<span class="pull-left">Javascript & jQuery</span>

																					<span class="pull-right">72%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-purple" style="width:70%">
																					<span class="pull-left">PHP & MySQL</span>

																					<span class="pull-right">70%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-warning" style="width:50%">
																					<span class="pull-left">Wordpress</span>

																					<span class="pull-right">50%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div class="progress-bar progress-bar-danger" style="width:38%">
																					<span class="pull-left">Photoshop</span>

																					<span class="pull-right">38%</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div><!-- /#home -->

												<div id="feed" class="tab-pane">
													<div class="profile-feed row">
														<div class="col-sm-6">
															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="李东云的头像" src="/ace-asstes/images/avatars/avatar5.png" />
																	<a class="user" href="#"> 李东云 </a>
																	更改了他的个人图片。
																	<a href="#">查看</a>

																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		1小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="Susan Smith's avatar" src="/ace-asstes/images/avatars/avatar1.png" />
																	<a class="user" href="#"> 苏珊 </a>

																	和李东云成为了朋友。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		2小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>
																	加入了
																	<a href="#">流行音乐</a>

																	小组。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		5小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>
																	更新了照片。
																	<a href="#">查看</a>

																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		5小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="David Palms's avatar" src="/ace-asstes/images/avatars/avatar4.png" />
																	<a class="user" href="#"> 张伟 </a>

																	 给张乔留言。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		8小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>
														</div><!-- /.col -->

														<div class="col-sm-6">
															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>
																	发表了一篇新的博客文章。
																	<a href="#">阅读</a>

																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		11小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img class="pull-left" alt="李东云的头像" src="/ace-asstes/images/avatars/avatar5.png" />
																	<a class="user" href="#"> 李东云 </a>

																	升级了他的技能。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		12小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>

																	已登录。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		12小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>

																	已登出。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		16小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
																	<a class="user" href="#"> 李东云 </a>

																	已登录。
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		 16小时前
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue">
																		<i class="ace-icon fa fa-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="ace-icon fa fa-times bigger-125"></i>
																	</a>
																</div>
															</div>
														</div><!-- /.col -->
													</div><!-- /.row -->

													<div class="space-12"></div>

													<div class="center">
														<button type="button" class="btn btn-sm btn-primary btn-white btn-round">
															<i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
															<span class="bigger-110">查看更多活动</span>

															<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
														</button>
													</div>
												</div><!-- /#feed -->

												<div id="friends" class="tab-pane">
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

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="/ace-asstes/images/avatars/avatar1.png" alt="Rose Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-offline"></span>
																			李婷
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">平面设计师</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
																			<span class="grey"> 30分钟前 </span>
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

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="/ace-asstes/images/avatars/avatar.png" alt="Jim Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-busy"></span>
																			吉米
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">SEO和广告</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 red"></i>
																			<span class="grey"> 1小时前 </span>
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

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="/ace-asstes/images/avatars/avatar5.png" alt="李东云的头像" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-idle"></span>
																			李东云
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">营销</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
																			<span class=""> 闲置40分钟 </span>
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

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="/ace-asstes/images/avatars/avatar2.png" alt="Phil Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-online"></span>
																			刘翔
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">公共关系</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
																			<span class="green"> 2小时前 </span>
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

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="/ace-asstes/images/avatars/avatar3.png" alt="Susan Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-online"></span>
																			苏珊
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">人力资源管理</div>

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

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="/ace-asstes/images/avatars/avatar1.png" alt="Jennifer Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-offline"></span>
																			孙杰
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">平面设计师</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
																			<span class="grey"> 2小时前 </span>
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

														<div class="itemdiv memberdiv">
															<div class="inline pos-rel">
																<div class="user">
																	<a href="#">
																		<img src="/ace-asstes/images/avatars/avatar3.png" alt="Alexa Doe's avatar" />
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-offline"></span>
																			周芳丽
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">会计</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
																			<span class="grey"> 4小时前 </span>
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
												</div><!-- /#friends -->

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

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="/ace-asstes/images/gallery/thumb-2.jpg" />
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

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="/ace-asstes/images/gallery/thumb-3.jpg" />
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

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="/ace-asstes/images/gallery/thumb-4.jpg" />
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

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="/ace-asstes/images/gallery/thumb-5.jpg" />
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

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="/ace-asstes/images/gallery/thumb-6.jpg" />
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

														<li>
															<a href="#" data-rel="colorbox">
																<img alt="150x150" src="/ace-asstes/images/gallery/thumb-2.jpg" />
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
												</div><!-- /#pictures -->
											</div>
										</div>
									</div>
								</div>

								<div class="hide">
									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
											<div class="well well-sm">
												<!-- -
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		&nbsp; -->
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

														<li>
															<a data-toggle="tab" href="#edit-password">
																<i class="blue ace-icon fa fa-key bigger-125"></i>
																密码
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
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">用户名</label>

																		<div class="col-sm-8">
																			<input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="用户名" value="dongyun" />
																		</div>
																	</div>

																	<div class="space-4"></div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-first">姓名</label>

																		<div class="col-sm-8">
																			<input class="input-small" type="text" id="form-field-first" placeholder="名" value="东云" />
																			<input class="input-small" type="text" id="form-field-last" placeholder="姓" value="庞" />
																		</div>
																	</div>
																</div>
															</div>

															<hr />
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-date">出生日期</label>

																<div class="col-sm-9">
																	<div class="input-medium">
																		<div class="input-group">
																			<input class="input-medium date-picker" id="form-field-date" type="text" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" />
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right">性别</label>

																<div class="col-sm-9">
																	<label class="inline">
																		<input name="form-field-radio" type="radio" class="ace" />
																		<span class="lbl middle"> 男</span>
																	</label>

																	&nbsp; &nbsp; &nbsp;
																	<label class="inline">
																		<input name="form-field-radio" type="radio" class="ace" />
																		<span class="lbl middle"> 女</span>
																	</label>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">评论</label>

																<div class="col-sm-9">
																	<textarea id="form-field-comment"></textarea>
																</div>
															</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">联系</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-email">电子邮箱</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="email" id="form-field-email" value="example@pydyun.com" />
																		<i class="ace-icon fa fa-envelope"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-website">网站</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="url" id="form-field-website" value="http://www.pydyun.com/" />
																		<i class="ace-icon fa fa-globe"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">电话</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input class="input-medium input-mask-phone" type="text" id="form-field-phone" />
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

															<div class="space-8"></div>

															<div>
																<label>
																	<input type="checkbox" name="form-field-checkbox" class="ace" />
																	<span class="lbl">保持我的谈话的历史</span>
																</label>

																<label>
																	<span class="space-2 block"></span>

																	共
																	<input type="text" class="input-mini" maxlength="3" />
																	天
																</label>
															</div>
														</div>

														<div id="edit-password" class="tab-pane">
															<div class="space-10"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">新密码</label>

																<div class="col-sm-9">
																	<input type="password" id="form-field-pass1" />
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">确认密码</label>

																<div class="col-sm-9">
																	<input type="password" id="form-field-pass2" />
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button class="btn btn-info" type="button">
															<i class="ace-icon fa fa-check bigger-110"></i>
															保存
														</button>

														&nbsp; &nbsp;
														<button class="btn" type="reset">
															<i class="ace-icon fa fa-undo bigger-110"></i>
															重置
														</button>
													</div>
												</div>
											</form>
										</div><!-- /.span -->
									</div><!-- /.user-profile -->
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->

<script src="/ace-asstes/js/jquery-2.1.4.min.js"></script>

<script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='/ace-asstes/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/ace-asstes/js/bootstrap.min.js"></script>
<script src="/ace-asstes/js/jquery-ui.custom.min.js"></script>
<script src="/ace-asstes/js/jquery.ui.touch-punch.min.js"></script>
<script src="/ace-asstes/js/jquery.gritter.min.js"></script>
<script src="/ace-asstes/js/bootbox.js"></script>
<script src="/ace-asstes/js/jquery.easypiechart.min.js"></script>
<script src="/ace-asstes/js/bootstrap-datepicker.min.js"></script>
<script src="/ace-asstes/js/jquery.hotkeys.index.min.js"></script>
<script src="/ace-asstes/js/bootstrap-wysiwyg.min.js"></script>
<script src="/ace-asstes/js/select2.min.js"></script>
<script src="/ace-asstes/js/spinbox.min.js"></script>
<script src="/ace-asstes/js/bootstrap-editable.min.js"></script>
<script src="/ace-asstes/js/ace-editable.min.js"></script>
<script src="/ace-asstes/js/jquery.maskedinput.min.js"></script>
<script src="/ace-asstes/js/ace-elements.min.js"></script>
<script src="/ace-asstes/js/ace.min.js"></script>
<script type="text/javascript">
        jQuery(function($) {

                //editables on first profile page
                $.fn.editable.defaults.mode = 'inline';
                $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
            $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
                                        '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    

                //editables 

                //text editable
            $('#username')
                .editable({
                        type: 'text',
                        name: 'username'		
            });



                //select2 editable
                var countries = [];
            $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
                countries.push({id: k, text: v});
            });

                var cities = [];
                cities["CA"] = [];
                $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
                        cities["CA"].push({id: v, text: v});
                });
                cities["IN"] = [];
                $.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
                        cities["IN"].push({id: v, text: v});
                });
                cities["NL"] = [];
                $.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
                        cities["NL"].push({id: v, text: v});
                });
                cities["TR"] = [];
                $.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
                        cities["TR"].push({id: v, text: v});
                });
                cities["US"] = [];
                $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
                        cities["US"].push({id: v, text: v});
                });

                var currentValue = "NL";
            $('#country').editable({
                        type: 'select2',
                        value : 'NL',
                        //onblur:'ignore',
                source: countries,
                        select2: {
                                'width': 140
                        },		
                        success: function(response, newValue) {
                                if(currentValue == newValue) return;
                                currentValue = newValue;

                                var new_source = (!newValue || newValue == "") ? [] : cities[newValue];

                                //the destroy method is causing errors in x-editable v1.4.6+
                                //it worked fine in v1.4.5
                                /**			
                                $('#city').editable('destroy').editable({
                                        type: 'select2',
                                        source: new_source
                                }).editable('setValue', null);
                                */

                                //so we remove it altogether and create a new element
                                var city = $('#city').removeAttr('id').get(0);
                                $(city).clone().attr('id', 'city').text('Select City').editable({
                                        type: 'select2',
                                        value : null,
                                        //onblur:'ignore',
                                        source: new_source,
                                        select2: {
                                                'width': 140
                                        }
                                }).insertAfter(city);//insert it after previous instance
                                $(city).remove();//remove previous instance

                        }
            });

                $('#city').editable({
                        type: 'select2',
                        value : 'Amsterdam',
                        //onblur:'ignore',
                source: cities[currentValue],
                        select2: {
                                'width': 140
                        }
            });



                //custom date editable
                $('#signup').editable({
                        type: 'adate',
                        date: {
                                //datepicker plugin options
                                    format: 'yyyy/mm/dd',
                                viewformat: 'yyyy/mm/dd',
                                 weekStart: 1

                                //,nativeUI: true//if true and browser support input[type=date], native browser control will be used
                                //,format: 'yyyy-mm-dd',
                                //viewformat: 'yyyy-mm-dd'
                        }
                })

            $('#age').editable({
                type: 'spinner',
                        name : 'age',
                        spinner : {
                                min : 16,
                                max : 99,
                                step: 1,
                                on_sides: true
                                //,nativeUI: true//if true and browser support input[type=number], native browser control will be used
                        }
                });


            $('#login').editable({
                type: 'slider',
                        name : 'login',

                        slider : {
                                 min : 1,
                                  max: 50,
                                width: 100
                                //,nativeUI: true//if true and browser support input[type=range], native browser control will be used
                        },
                        success: function(response, newValue) {
                                if(parseInt(newValue) == 1)
                                        $(this).html(newValue + " hour ago");
                                else $(this).html(newValue + " hours ago");
                        }
                });

                $('#about').editable({
                        mode: 'inline',
                type: 'wysiwyg',
                        name : 'about',

                        wysiwyg : {
                                //css : {'max-width':'300px'}
                        },
                        success: function(response, newValue) {
                        }
                });



                // *** editable avatar *** //
                try {//ie8 throws some harmless exceptions, so let's catch'em

                        //first let's add a fake appendChild method for Image element for browsers that have a problem with this
                        //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
                        try {
                                document.createElement('IMG').appendChild(document.createElement('B'));
                        } catch(e) {
                                Image.prototype.appendChild = function(el){}
                        }

                        var last_gritter
                        $('#avatar').editable({
                                type: 'image',
                                name: 'avatar',
                                value: null,
                                //onblur: 'ignore',  //don't reset or hide editable onblur?!
                                image: {
                                        //specify ace file input plugin's options here
                                        btn_choose: '更改头像',
                                        droppable: true,
                                        maxSize: 110000,//~100Kb

                                        //and a few extra ones here
                                        name: 'avatar',//put the field name here as well, will be used inside the custom plugin
                                        on_error : function(error_type) {//on_error function will be called when the selected file has a problem
                                                if(last_gritter) $.gritter.remove(last_gritter);
                                                if(error_type == 1) {//file format error
                                                        last_gritter = $.gritter.add({
                                                                title: 'File is not an image!',
                                                                text: 'Please choose a jpg|gif|png image!',
                                                                class_name: 'gritter-error gritter-center'
                                                        });
                                                } else if(error_type == 2) {//file size rror
                                                        last_gritter = $.gritter.add({
                                                                title: 'File too big!',
                                                                text: 'Image size should not exceed 100Kb!',
                                                                class_name: 'gritter-error gritter-center'
                                                        });
                                                }
                                                else {//other error
                                                }
                                        },
                                        on_success : function() {
                                                $.gritter.removeAll();
                                        }
                                },
                            url: function(params) {
                                        // ***UPDATE AVATAR HERE*** //
                                        //for a working upload example you can replace the contents of this function with 
                                        //examples/profile-avatar-update.js

                                        var deferred = new $.Deferred

                                        var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                                        if(!value || value.length == 0) {
                                                deferred.resolve();
                                                return deferred.promise();
                                        }


                                        //dummy upload
                                        setTimeout(function(){
                                                if("FileReader" in window) {
                                                        //for browsers that have a thumbnail of selected image
                                                        var thumb = $('#avatar').next().find('img').data('thumb');
                                                        if(thumb) $('#avatar').get(0).src = thumb;
                                                }

                                                deferred.resolve({'status':'OK'});

                                                if(last_gritter) $.gritter.remove(last_gritter);
                                                last_gritter = $.gritter.add({
                                                        title: 'Avatar Updated!',
                                                        text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                                                        class_name: 'gritter-info gritter-center'
                                                });

                                         } , parseInt(Math.random() * 800 + 800))

                                        return deferred.promise();

                                        // ***END OF UPDATE AVATAR HERE*** //
                                },

                                success: function(response, newValue) {
                                }
                        })
                }catch(e) {}

                /**
                //let's display edit mode by default?
                var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
                if(blank_image) {
                        $('#avatar').editable('show').on('hidden', function(e, reason) {
                                if(reason == 'onblur') {
                                        $('#avatar').editable('show');
                                        return;
                                }
                                $('#avatar').off('hidden');
                        })
                }
                */

                //another option is using modals
                $('#avatar2').on('click', function(){
                        var modal = 
                        '<div class="modal fade">\
                          <div class="modal-dialog">\
                           <div class="modal-content">\
                                <div class="modal-header">\
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>\
                                        <h4 class="blue">更改头像</h4>\
                                </div>\
                                \
                                <form class="no-margin">\
                                 <div class="modal-body">\
                                        <div class="space-4"></div>\
                                        <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                                 </div>\
                                \
                                 <div class="modal-footer center">\
                                        <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i>提交</button>\
                                        <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i>取消</button>\
                                 </div>\
                                </form>\
                          </div>\
                         </div>\
                        </div>';


                        var modal = $(modal);
                        modal.modal("show").on("hidden", function(){
                                modal.remove();
                        });

                        var working = false;

                        var form = modal.find('form:eq(0)');
                        var file = form.find('input[type=file]').eq(0);
                        file.ace_file_input({
                                style:'well',
                                btn_choose:'点击选择新的头像',
                                btn_change:null,
                                no_icon:'ace-icon fa fa-picture-o',
                                thumbnail:'small',
                                before_remove: function() {
                                        //don't remove/reset files while being uploaded
                                        return !working;
                                },
                                allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                                allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                        });

                        form.on('submit', function(){
                                if(!file.data('ace_input_files')) return false;

                                file.ace_file_input('disable');
                                form.find('button').attr('disabled', 'disabled');
                                form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

                                var deferred = new $.Deferred;
                                working = true;
                                deferred.done(function() {
                                        form.find('button').removeAttr('disabled');
                                        form.find('input[type=file]').ace_file_input('enable');
                                        form.find('.modal-body > :last-child').remove();

                                        modal.modal("hide");

                                        var thumb = file.next().find('img').data('thumb');
                                        if(thumb) $('#avatar2').get(0).src = thumb;

                                        working = false;
                                });


                                setTimeout(function(){
                                        deferred.resolve();
                                } , parseInt(Math.random() * 800 + 800));

                                return false;
                        });

                });



                //////////////////////////////
                $('#profile-feed-1').ace_scroll({
                        height: '250px',
                        mouseWheelLock: true,
                        alwaysVisible : true
                });

                $('a[ data-original-title]').tooltip();

                $('.easy-pie-chart.percentage').each(function(){
                var barColor = $(this).data('color') || '#555';
                var trackColor = '#E2E2E2';
                var size = parseInt($(this).data('size')) || 72;
                $(this).easyPieChart({
                        barColor: barColor,
                        trackColor: trackColor,
                        scaleColor: false,
                        lineCap: 'butt',
                        lineWidth: parseInt(size/10),
                        animate:false,
                        size: size
                }).css('color', barColor);
                });

                ///////////////////////////////////////////

                //right & left position
                //show the user info on right or left depending on its position
                $('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
                        var $this = $(this);
                        var $parent = $this.closest('.tab-pane');

                        var off1 = $parent.offset();
                        var w1 = $parent.width();

                        var off2 = $this.offset();
                        var w2 = $this.width();

                        var place = 'left';
                        if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';

                        $this.find('.popover').removeClass('right left').addClass(place);
                }).on('click', function(e) {
                        e.preventDefault();
                });


                ///////////////////////////////////////////
                $('#user-profile-3')
                .find('input[type=file]').ace_file_input({
                        style:'well',
                        btn_choose:'Change avatar',
                        btn_change:null,
                        no_icon:'ace-icon fa fa-picture-o',
                        thumbnail:'large',
                        droppable:true,

                        allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                        allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                })
                .end().find('button[type=reset]').on(ace.click_event, function(){
                        $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
                })
                .end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
                        $(this).prev().focus();
                })
                $('.input-mask-phone').mask('(999) 999-9999');

                $('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);


                ////////////////////
                //change profile
                $('[data-toggle="buttons"] .btn').on('click', function(e){
                        var target = $(this).find('input[type=radio]');
                        var which = parseInt(target.val());
                        $('.user-profile').parent().addClass('hide');
                        $('#user-profile-'+which).parent().removeClass('hide');
                });



                /////////////////////////////////////
                $(document).one('ajaxloadstart.page', function(e) {
                        //in ajax mode, remove remaining elements before leaving page
                        try {
                                $('.editable').editable('destroy');
                        } catch(e) {}
                        $('[class*=select2]').remove();
                });
        });
</script>