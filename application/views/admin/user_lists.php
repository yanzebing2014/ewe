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
								管理员
								<small>
									<i class="icon-double-angle-right fa fa-angle-double-right"></i>
									管理员管理
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<div class="row">
										<div class="col-xs-12">
											<a href="<?php echo base_url();?>index.php/admin/article/add" class="btn btn-primary">
												<i class="fa fa-plus"></i>
												新增
											</a>
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
															<th class="center">用户名</th>
															<th class="center">姓名</th>
															<th class="center">角色</th>
															<th class="center">
																最近登录
															</th>
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
																Admin
															</td>
															<td class="center">
																Derek
															</td>
															<td class="center">
																超级管理员
															</td>
															<td class="center">
																2014-11-01 12:00
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

																<button class="btn btn-xs btn-danger del_user">
																	<i class="icon-trash fa fa-trash bigger-120"></i>
																</button>
															</td>
														</tr>
													</tbody>
												</table>
												<ul class="pagination pull-right no-margin">
														<li class="prev">
															<a href="#">
																<i class="icon-double-angle-left fa fa-angle-double-left"></i>
															</a>
														</li>
														<li class="active">
															<a href="#">1</a>
														</li>
														<li>
															<a href="#">2</a>
														</li>
														<li>
															<a href="#">3</a>
														</li>
														<li class="next">
															<a href="#">
																<i class="icon-double-angle-right fa fa-angle-double-right"></i>
															</a>
														</li>
													</ul>
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
		$(".del_user").click(function(event) {
			bootbox.dialog({
				message: "确定删除此管理员？",
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

