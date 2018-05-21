<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>控制台-ACE后台管理系统</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/ace-asstes/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/ace-asstes/font-awesome/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="/ace-asstes/googlefonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/ace-asstes/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/ace-asstes/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="/ace-asstes/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/ace-asstes/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/ace-asstes/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="/ace-asstes/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/ace-asstes/js/html5shiv.min.js"></script>
		<script src="/ace-asstes/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div class="page-content">

						<div class="page-header">
							<h1>
								控制台
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									概述和统计数据
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<div class="alert alert-block alert-warning">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									<i class="ace-icon fa fa-bell orange"></i>
									通知：我们的正在开发中，采用轻量级的SSM+Shiro+Ace等框架，预计近期将在东云网上线，敬请期待！
								</div>

								<div class="row">
									<div class="space-6"></div>

									<div class="col-sm-7 infobox-container">
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">32</span>
												<div class="infobox-content">2个评论</div>
											</div>

											<div class="stat stat-success">8%</div>
										</div>

										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-twitter"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">11</span>
												<div class="infobox-content">新粉丝</div>
											</div>

											<div class="badge badge-success">
												+32%
												<i class="ace-icon fa fa-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-pink">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-shopping-cart"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">8</span>
												<div class="infobox-content">新订单</div>
											</div>
											<div class="stat stat-important">4%</div>
										</div>

										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-flask"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">7</span>
												<div class="infobox-content">调查</div>
											</div>
										</div>

										<div class="infobox infobox-orange2">
											<div class="infobox-chart">
												<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">6,251</span>
												<div class="infobox-content">页面查看次数</div>
											</div>

											<div class="badge badge-success">
												7.2%
												<i class="ace-icon fa fa-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-blue2">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="42" data-size="46">
													<span class="percent">42</span>%
												</div>
											</div>

											<div class="infobox-data">
												<span class="infobox-text">已用流量</span>

												<div class="infobox-content">
													<span class="bigger-110">~</span>
													剩余58GB
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="infobox infobox-green infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="61" data-size="39">
													<span class="percent">61</span>%
												</div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">任务</div>
												<div class="infobox-content">完成</div>
											</div>
										</div>

										<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-chart">
												<span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">收益</div>
												<div class="infobox-content">32,000元</div>
											</div>
										</div>

										<div class="infobox infobox-grey infobox-small infobox-dark">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-download"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">下载</div>
												<div class="infobox-content">1,205次</div>
											</div>
										</div>
									</div>

									<div class="vspace-12-sm"></div>

									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													流量来源
												</h5>

												<div class="widget-toolbar no-border">
													<div class="inline dropdown-hover">
														<button class="btn btn-minier btn-primary">
															本周
															<i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
														</button>

														<ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
															<li class="active">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
																	本周
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	上周
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	本月
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	上月
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div id="piechart-placeholder"></div>

													<div class="hr hr8 hr-double"></div>

													<div class="clearfix">
														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-qq fa-2x blue"></i>
																&nbsp; QQ
															</span>
															<h4 class="bigger pull-right">1,255</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-weixin fa-2x purple"></i>
																&nbsp; 微信
															</span>
															<h4 class="bigger pull-right">941</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-weibo fa-2x red"></i>
																&nbsp; 微博
															</span>
															<h4 class="bigger pull-right">1,050</h4>
														</div>
													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>

								<div class="row">
									<div class="col-sm-5">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-star orange"></i>
													热门域名
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>名称
																</th>

																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>价格
																</th>

																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>状态
																</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td>pydyun.com</td>

																<td>
																	<small>
																		<s class="red">$29.99</s>
																	</small>
																	<b class="green">$19.99</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-info arrowed-right arrowed-in">销售中</span>
																</td>
															</tr>

															<tr>
																<td>online.com</td>

																<td>
																	<b class="blue">$16.45</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-success arrowed-in arrowed-in-right">已核准</span>
																</td>
															</tr>

															<tr>
																<td>newnet.com</td>

																<td>
																	<b class="blue">$15.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-danger arrowed">待定</span>
																</td>
															</tr>

															<tr>
																<td>web.com</td>

																<td>
																	<small>
																		<s class="red">$24.99</s>
																	</small>
																	<b class="green">$19.95</b>
																</td>

																<td class="hidden-480">
																	<span class="label arrowed">
																		<s>无货</s>
																	</span>
																</td>
															</tr>

															<tr>
																<td>domain.com</td>

																<td>
																	<b class="blue">$12.00</b>
																</td>

																<td class="hidden-480">
																	<span class="label label-warning arrowed arrowed-right">已出售</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->

									<div class="col-sm-7">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-signal"></i>
													销售统计
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-4">
													<div id="sales-charts"></div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>

								<div class="row">
									<div class="col-sm-6">
										<div class="widget-box transparent" id="recent-box">
											<div class="widget-header">
												<h4 class="widget-title lighter smaller">
													<i class="ace-icon fa fa-rss orange"></i>最近
												</h4>

												<div class="widget-toolbar no-border">
													<ul class="nav nav-tabs" id="recent-tab">
														<li class="active">
															<a data-toggle="tab" href="#task-tab">任务</a>
														</li>

														<li>
															<a data-toggle="tab" href="#member-tab">成员</a>
														</li>

														<li>
															<a data-toggle="tab" href="#comment-tab">评论</a>
														</li>
													</ul>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-4">
													<div class="tab-content padding-8">
														<div id="task-tab" class="tab-pane active">
															<h4 class="smaller lighter green">
																<i class="ace-icon fa fa-list"></i>
																可拖拽列表
															</h4>

															<ul id="tasks" class="item-list">
																<li class="item-orange clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl">回答客户的问题</span>
																	</label>

																	<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
																		<span class="percent">42</span>%
																	</div>
																</li>

																<li class="item-red clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl">BUG修复</span>
																	</label>

																	<div class="pull-right action-buttons">
																		<a href="#" class="blue">
																			<i class="ace-icon fa fa-pencil bigger-130"></i>
																		</a>

																		<span class="vbar"></span>

																		<a href="#" class="red">
																			<i class="ace-icon fa fa-trash-o bigger-130"></i>
																		</a>

																		<span class="vbar"></span>

																		<a href="#" class="green">
																			<i class="ace-icon fa fa-flag bigger-130"></i>
																		</a>
																	</div>
																</li>

																<li class="item-default clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl">添加新功能</span>
																	</label>

																	<div class="pull-right pos-rel dropdown-hover">
																		<button class="btn btn-minier bigger btn-primary">
																			<i class="ace-icon fa fa-cog icon-only bigger-120"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">
																			<li>
																				<a href="#" class="tooltip-success" data-rel="tooltip" title="做&nbsp;标&nbsp;记">
																					<span class="green">
																						<i class="ace-icon fa fa-check bigger-110"></i>
																					</span>
																				</a>
																			</li>

																			<li>
																				<a href="#" class="tooltip-error" data-rel="tooltip" title="删除">
																					<span class="red">
																						<i class="ace-icon fa fa-trash-o bigger-110"></i>
																					</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>

																<li class="item-blue clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl">升级脚本中使用的模板</span>
																	</label>
																</li>

																<li class="item-grey clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl">添加新皮肤</span>
																	</label>
																</li>

																<li class="item-green clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl">更新服务器软件</span>
																	</label>
																</li>

																<li class="item-pink clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl">清理</span>
																	</label>
																</li>
															</ul>
														</div>

														<div id="member-tab" class="tab-pane">
															<div class="clearfix">
																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img alt="Bob Doe's avatar" src="/ace-asstes/images/avatars/user.jpg" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">赵东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="green">20分钟</span>
																		</div>

																		<div>
																			<span class="label label-warning label-sm">待定</span>

																			<div class="inline position-relative">
																				<button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
																					<i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
																				</button>

																				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																					<li>
																						<a href="#" class="tooltip-success" data-rel="tooltip" title="核&nbsp;准">
																							<span class="green">
																								<i class="ace-icon fa fa-check bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a href="#" class="tooltip-warning" data-rel="tooltip" title="拒&nbsp;绝">
																							<span class="orange">
																								<i class="ace-icon fa fa-times bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a href="#" class="tooltip-error" data-rel="tooltip" title="删&nbsp;除">
																							<span class="red">
																								<i class="ace-icon fa fa-trash-o bigger-110"></i>
																							</span>
																						</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img alt="Joe Doe's avatar" src="/ace-asstes/images/avatars/avatar2.png" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">钱东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="green">1小时</span>
																		</div>

																		<div>
																			<span class="label label-warning label-sm">待定</span>

																			<div class="inline position-relative">
																				<button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
																					<i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
																				</button>

																				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																					<li>
																						<a href="#" class="tooltip-success" data-rel="tooltip" title="核&nbsp;准">
																							<span class="green">
																								<i class="ace-icon fa fa-check bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a href="#" class="tooltip-warning" data-rel="tooltip" title="拒&nbsp;绝">
																							<span class="orange">
																								<i class="ace-icon fa fa-times bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a href="#" class="tooltip-error" data-rel="tooltip" title="删&nbsp;除">
																							<span class="red">
																								<i class="ace-icon fa fa-trash-o bigger-110"></i>
																							</span>
																						</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img alt="Jim Doe's avatar" src="/ace-asstes/images/avatars/avatar.png" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">孙东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="green">2小时</span>
																		</div>

																		<div>
																			<span class="label label-warning label-sm">待定</span>

																			<div class="inline position-relative">
																				<button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
																					<i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
																				</button>

																				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																					<li>
																						<a href="#" class="tooltip-success" data-rel="tooltip" title="核&nbsp;准">
																							<span class="green">
																								<i class="ace-icon fa fa-check bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a href="#" class="tooltip-warning" data-rel="tooltip" title="拒&nbsp;绝">
																							<span class="orange">
																								<i class="ace-icon fa fa-times bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a href="#" class="tooltip-error" data-rel="tooltip" title="删&nbsp;除">
																							<span class="red">
																								<i class="ace-icon fa fa-trash-o bigger-110"></i>
																							</span>
																						</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img alt="Alex Doe's avatar" src="/ace-asstes/images/avatars/avatar5.png" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">李东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="green">3小时</span>
																		</div>

																		<div>
																			<span class="label label-danger label-sm">锁定</span>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img alt="Bob Doe's avatar" src="/ace-asstes/images/avatars/avatar2.png" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">周东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="green">6小时</span>
																		</div>

																		<div>
																			<span class="label label-success label-sm arrowed-in">已核准</span>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img alt="Susan's avatar" src="/ace-asstes/images/avatars/avatar3.png" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">吴东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="green">昨天</span>
																		</div>

																		<div>
																			<span class="label label-success label-sm arrowed-in">已核准</span>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img alt="Phil Doe's avatar" src="/ace-asstes/images/avatars/avatar4.png" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">郑东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="green">2天前</span>
																		</div>

																		<div>
																			<span class="label label-info label-sm arrowed-in arrowed-in-right">在线</span>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img alt="Alexa Doe's avatar" src="/ace-asstes/images/avatars/avatar1.png" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">王东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="green">3天前</span>
																		</div>

																		<div>
																			<span class="label label-success label-sm arrowed-in">已核准</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="center">
																<i class="ace-icon fa fa-users fa-2x green middle"></i>

																&nbsp;
																<a href="#" class="btn btn-sm btn-white btn-info">
																	查看所有成员 &nbsp;
																	<i class="ace-icon fa fa-arrow-right"></i>
																</a>
															</div>

															<div class="hr hr-double hr8"></div>
														</div><!-- /.#member-tab -->

														<div id="comment-tab" class="tab-pane">
															<div class="comments">
																<div class="itemdiv commentdiv">
																	<div class="user">
																		<img alt="Bob Doe's Avatar" src="/ace-asstes/images/avatars/avatar.png" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">孙东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="green">6分钟</span>
																		</div>

																		<div class="text">
																			<i class="ace-icon fa fa-quote-left"></i>
																			这是一个富有创新性的模板 &hellip;
																		</div>
																	</div>

																	<div class="tools">
																		<div class="inline position-relative">
																			<button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
																				<i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
																			</button>

																			<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																				<li>
																					<a href="#" class="tooltip-success" data-rel="tooltip" title="核&nbsp;准">
																						<span class="green">
																							<i class="ace-icon fa fa-check bigger-110"></i>
																						</span>
																					</a>
																				</li>

																				<li>
																					<a href="#" class="tooltip-warning" data-rel="tooltip" title="拒&nbsp;绝">
																						<span class="orange">
																							<i class="ace-icon fa fa-times bigger-110"></i>
																						</span>
																					</a>
																				</li>

																				<li>
																					<a href="#" class="tooltip-error" data-rel="tooltip" title="删&nbsp;除">
																						<span class="red">
																							<i class="ace-icon fa fa-trash-o bigger-110"></i>
																						</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>

																<div class="itemdiv commentdiv">
																	<div class="user">
																		<img alt="Jennifer's Avatar" src="/ace-asstes/images/avatars/avatar1.png" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">王东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="blue">15分钟</span>
																		</div>

																		<div class="text">
																			<i class="ace-icon fa fa-quote-left"></i>
																			这是一个富有创新性的模板 &hellip;
																		</div>
																	</div>

																	<div class="tools">
																		<div class="action-buttons bigger-125">
																			<a href="#">
																				<i class="ace-icon fa fa-pencil blue"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-trash-o red"></i>
																			</a>
																		</div>
																	</div>
																</div>

																<div class="itemdiv commentdiv">
																	<div class="user">
																		<img alt="Joe's Avatar" src="/ace-asstes/images/avatars/avatar2.png" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">周东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="orange">22分钟</span>
																		</div>

																		<div class="text">
																			<i class="ace-icon fa fa-quote-left"></i>
																			这是一个富有创新性的模板 &hellip;
																		</div>
																	</div>

																	<div class="tools">
																		<div class="action-buttons bigger-125">
																			<a href="#">
																				<i class="ace-icon fa fa-pencil blue"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-trash-o red"></i>
																			</a>
																		</div>
																	</div>
																</div>

																<div class="itemdiv commentdiv">
																	<div class="user">
																		<img alt="Rita's Avatar" src="/ace-asstes/images/avatars/avatar3.png" />
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">吴东云</a>
																		</div>

																		<div class="time">
																			<i class="ace-icon fa fa-clock-o"></i>
																			<span class="red">50分钟</span>
																		</div>

																		<div class="text">
																			<i class="ace-icon fa fa-quote-left"></i>
																			这是一个富有创新性的模板 &hellip;
																		</div>
																	</div>

																	<div class="tools">
																		<div class="action-buttons bigger-125">
																			<a href="#">
																				<i class="ace-icon fa fa-pencil blue"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-trash-o red"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>

															<div class="hr hr8"></div>

															<div class="center">
																<i class="ace-icon fa fa-comments-o fa-2x green middle"></i>

																&nbsp;
																<a href="#" class="btn btn-sm btn-white btn-info">
																	查看所有评论&nbsp;
																	<i class="ace-icon fa fa-arrow-right"></i>
																</a>
															</div>

															<div class="hr hr-double hr8"></div>
														</div>
													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->

									<div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header">
												<h4 class="widget-title lighter smaller">
													<i class="ace-icon fa fa-comment blue"></i>
													会话
												</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<div class="dialogs">
														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="Alexa's Avatar" src="/ace-asstes/images/avatars/avatar1.png" />
															</div>

															<div class="body">
																<div class="time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span class="green">4秒前</span>
																</div>

																<div class="name">
																	<a href="#">王东云</a>
																</div>
																<div class="text">大家好呀，这是一个很不错的框架呢。</div>

																<div class="tools">
																	<a href="#" class="btn btn-minier btn-info">
																		<i class="icon-only ace-icon fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="John's Avatar" src="/ace-asstes/images/avatars/avatar.png" />
															</div>

															<div class="body">
																<div class="time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span class="blue">38秒前</span>
																</div>

																<div class="name">
																	<a href="#">周东云</a>
																</div>
																<div class="text">欢迎使用该模板。</div>

																<div class="tools">
																	<a href="#" class="btn btn-minier btn-info">
																		<i class="icon-only ace-icon fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="Bob's Avatar" src="/ace-asstes/images/avatars/user.jpg" />
															</div>

															<div class="body">
																<div class="time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span class="orange">2分钟前</span>
																</div>

																<div class="name">
																	<a href="#">庞东云</a>
																	<span class="label label-info arrowed arrowed-in-right">管理员</span>
																</div>
																<div class="text">最专业的东云网</div>

																<div class="tools">
																	<a href="#" class="btn btn-minier btn-info">
																		<i class="icon-only ace-icon fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="Jim's Avatar" src="/ace-asstes/images/avatars/avatar4.png" />
															</div>

															<div class="body">
																<div class="time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span class="grey">3分钟前</span>
																</div>

																<div class="name">
																	<a href="#">吴东云</a>
																</div>
																<div class="text">东云网呀，www.pydyun.com</div>

																<div class="tools">
																	<a href="#" class="btn btn-minier btn-info">
																		<i class="icon-only ace-icon fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="Alexa's Avatar" src="/ace-asstes/images/avatars/avatar1.png" />
															</div>

															<div class="body">
																<div class="time">
																	<i class="ace-icon fa fa-clock-o"></i>
																	<span class="green">4分钟前</span>
																</div>

																<div class="name">
																	<a href="#">冯东云</a>
																</div>
																<div class="text">这个模板去哪里下载呢？</div>

																<div class="tools">
																	<a href="#" class="btn btn-minier btn-info">
																		<i class="icon-only ace-icon fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>
													</div>

													<form>
														<div class="form-actions">
															<div class="input-group">
																<input placeholder="在这里输入您的消息..." type="text" class="form-control" name="message" />
																<span class="input-group-btn">
																	<button class="btn btn-sm btn-info no-radius" type="button">
																		<i class="ace-icon fa fa-share"></i>
																		发送
																	</button>
																</span>
															</div>
														</div>
													</form>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
								</div><!-- /.row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
		<!--[if !IE]> -->
		<script src="/ace-asstes/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="/ace-asstes/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/ace-asstes/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/ace-asstes/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/ace-asstes/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="/ace-asstes/js/jquery-ui.custom.min.js"></script>
		<script src="/ace-asstes/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/ace-asstes/js/jquery.easypiechart.min.js"></script>
		<script src="/ace-asstes/js/jquery.sparkline.index.min.js"></script>
		<script src="/ace-asstes/js/jquery.flot.min.js"></script>
		<script src="/ace-asstes/js/jquery.flot.pie.min.js"></script>
		<script src="/ace-asstes/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="/ace-asstes/js/ace-elements.min.js"></script>
		<script src="/ace-asstes/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "社交网络",  data: 38.7, color: "#68BC31"},
				{ label: "搜索引擎",  data: 24.5, color: "#2091CF"},
				{ label: "广告活动",  data: 8.2, color: "#AF4E96"},
				{ label: "直接流量",  data: 18.6, color: "#DA5430"},
				{ label: "其他",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "域名", data: d1 },
					{ label: "主机", data: d2 },
					{ label: "服务", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
	</body>
</html>
