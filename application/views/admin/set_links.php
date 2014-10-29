<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>控制台 - 我们网后台管理</title>
		<?php include 'head.php';?>
	</head>
	<body>
		<?php include 'headnav.php';?>
		<div class="main-container" id="main-container">
			<div class="main-container-inner">
				<?php include 'sidebar.php';?>
				<div class="main-content">
					<div class="page-content">
						<div class="page-header">
							<h1>
								设置
								<small>
									<i class="icon-double-angle-right fa fa-angle-double-right"></i>
									友情链接
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<div class="row">
										<div class="col-xs-12">
											<btn class="btn btn-primary">
												<i class="fa fa-plus"></i>
												新增
											</btn>
										</div>
									</div>
									<div class="space-12"></div>
									<div class="row">
										<div class="col-xs-12">
											<div class="table-responsive">
												<table id="sample-table-1" class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th class="center">
																<label>
																	<input type="checkbox" class="ace" />
																	<span class="lbl"></span>
																</label>
															</th>
															<th class="center">网站名称</th>
															<th class="center">链接</th>
															<th class="center">状态</th>
															<th class="center">操作</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td class="center">
																<label>
																	<input type="checkbox" class="ace" />
																	<span class="lbl"></span>
																</label>
															</td>
															<td class="center">
																我们网
															</td>
															<td class="center">
																<a href="www.ewe.com.cn" target="_blank">www.ewe.com.cn</a>
															</td>
															<td class="center">
																<label>
																	<input name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox" checked>
																	<span class="lbl"></span>
																</label>
															</td>
															<td class="center">
																<a href="#" class="btn btn-xs btn-info">
																	<i class="icon-edit fa fa-edit bigger-120"></i>
																</a>

																<button class="btn btn-xs btn-danger del_links">
																	<i class="icon-trash fa fa-trash bigger-120"></i>
																</button>
															</td>
														</tr>
													</tbody>
												</table>
											</div><!-- /.table-responsive -->
										</div><!-- /span -->
									</div><!-- /row -->
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
			</div><!-- /.main-container-inner -->
		</div><!-- /.main-container -->
		<?php include 'foot.php';?>
		<script>
		$(".del_links").click(function(event) {
			bootbox.dialog({
				message: "确定删除此友情链接？",
				title: '<i class="icon-warning-sign fa fa-warning red"></i>警告',
				buttons: {
					danger: {
						label: "取消",
						className: "btn-danger"
					},
					success: {
						label: "确定",
						className: "btn-success",
						callback: function() {
							// ajax提交删除操作
						}
					}
				}
			});
		});
		</script>
</body>
</html>

