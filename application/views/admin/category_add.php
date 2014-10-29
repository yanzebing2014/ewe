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
									新增
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-xs-1 control-label no-padding-left" for="form-field-1">栏目名称</label>
										<div class="col-xs-11">
											<input type="text" name="title" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-1 control-label no-padding-left" for="form-field-1">父级栏目</label>
										<div class="col-xs-11">
											<select name="catid" id="">
												<option value="">&nbsp;</option>
												<option value="1">栏目一</option>
												<option value="2">栏目二</option>
											</select>
										</div>
									</div>
									<div class="clearfix form-actions">
											<div class="col-md-offset-3 col-md-9">
												<button class="btn btn-info" type="button">
													<i class="icon-ok fa fa-check bigger-110"></i>
													Submit
												</button>
												<button class="btn" type="reset">
													<i class="icon-undo fa fa-undo bigger-110"></i>
													Reset
												</button>
											</div>
										</div>
								</form>
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

