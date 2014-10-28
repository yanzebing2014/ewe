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
								内容管理
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
									<div class="col-xs-9">
										<div class="col-xs-12">
											<div class="form-group">
												<label class="col-xs-1 control-label no-padding-left" for="form-field-1">标题</label>
												<div class="col-xs-11">
													<input type="text" name="title" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-xs-1 control-label no-padding-left" for="form-field-1">栏目</label>
												<div class="col-xs-11">
													<input type="text" name="author" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-xs-1 control-label no-padding-left" for="form-field-1">作者</label>
												<div class="col-xs-11">
													<input type="text" name="author" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-xs-1 control-label no-padding-left" for="form-field-1">描述</label>
												<div class="col-xs-11">
													<input type="text" name="describe" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-xs-1 control-label no-padding-left" for="form-field-1">内容</label>
												<div class="col-xs-11">
													<textarea class="col-xs-12" name="content" id="editor" style="height: 300px;"></textarea>
												</div>
											</div>
										</div>
									</div>
								</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
			</div><!-- /.main-container-inner -->
		</div><!-- /.main-container -->
		<?php include 'foot.php';?>
		<script charset="utf-8" src="<?php echo base_url();?>assets/admin/kindeditor/kindeditor-min.js"></script>
		<script charset="utf-8" src="<?php echo base_url();?>assets/admin/kindeditor/lang/zh_CN.js"></script>
		<script>
        KindEditor.ready(function(K) {
            window.editor = K.create('#editor');
        });
</script>
</body>
</html>

