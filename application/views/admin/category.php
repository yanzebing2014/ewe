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
								栏目管理
								<small>
									<i class="icon-double-angle-right fa fa-angle-double-right"></i>
									查看
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<div class="row">
										<div class="col-xs-12">
											<a href="<?php echo base_url();?>index.php/admin/category/add" class="btn btn-primary">
												<i class="fa fa-plus"></i>
												新增
											</a>
										</div>
									</div>
									<div class="space-12"></div>
									<div class="row">
										<div class="col-xs-12">
										<div class="dd" id="nestable">
											<ol class="dd-list">
												<li class="dd-item" data-id="1">
													<div class="dd-handle">
														一级栏目
														<div class="pull-right action-buttons">
															<a class="blue" href="#">
																<i class="icon-pencil fa fa-pencil bigger-130"></i>
															</a>
															<a class="red" href="#">
																<i class="icon-trash fa fa-trash bigger-130"></i>
															</a>
														</div>
													</div>
												</li>
												<li class="dd-item" data-id="2">
													<div class="dd-handle">
														一级栏目
														<div class="pull-right action-buttons">
															<a class="blue" href="#">
																<i class="icon-pencil fa fa-pencil bigger-130"></i>
															</a>
															<a class="red" href="#">
																<i class="icon-trash fa fa-trash bigger-130"></i>
															</a>
														</div>
													</div>
													<ol class="dd-list">
														<li class="dd-item" data-id="3">
															<div class="dd-handle">
																二级栏目
																<div class="pull-right action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil fa fa-pencil bigger-130"></i>
																	</a>
																	<a class="red" href="#">
																		<i class="icon-trash fa fa-trash bigger-130"></i>
																	</a>
																</div>
															</div>
														</li>
														<li class="dd-item" data-id="4">
															<div class="dd-handle">
																二级栏目
																<div class="pull-right action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil fa fa-pencil bigger-130"></i>
																	</a>
																	<a class="red" href="#">
																		<i class="icon-trash fa fa-trash bigger-130"></i>
																	</a>
																</div>
															</div>
														</li>
													</ol>
												</li>
												<li class="dd-item" data-id="11">
													<div class="dd-handle">
														一级栏目
														<div class="pull-right action-buttons">
															<a class="blue" href="#">
																<i class="icon-pencil fa fa-pencil bigger-130"></i>
															</a>
															<a class="red" href="#">
																<i class="icon-trash fa fa-trash bigger-130"></i>
															</a>
														</div>
													</div>
												</li>
												<li class="dd-item" data-id="12">
													<div class="dd-handle">
														一级栏目
														<div class="pull-right action-buttons">
															<a class="blue" href="#">
																<i class="icon-pencil fa fa-pencil bigger-130"></i>
															</a>
															<a class="red" href="#">
																<i class="icon-trash fa fa-trash bigger-130"></i>
															</a>
														</div>
													</div>
												</li>
											</ol>
										</div>
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
</body>
</html>

