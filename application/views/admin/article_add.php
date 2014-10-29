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
													<select name="catid" id="">
														<option value="">&nbsp;</option>
														<option value="1">栏目一</option>
														<option value="2">栏目二</option>
													</select>
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
									<div class="col-xs-3">
										<span class="profile-picture">
											<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="<?php echo base_url();?>assets/admin/avatars/profile-pic.jpg"></img>
										</span>
									</div>
									<div class="col-xs-12">
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
		<script src="<?php echo base_url();?>assets/admin/js/jquery.gritter.min.js"></script>	
		<script src="<?php echo base_url();?>assets/admin/js/x-editable/bootstrap-editable.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/x-editable/ace-editable.min.js"></script>
		<script>
        KindEditor.ready(function(K) {
            window.editor = K.create('#editor');
        });
		</script>
		<script type="text/javascript">
			jQuery(function($) {
			
				//editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner fa fa-spinner icon-spin fa-spin'></i></div>";
			    $.fn.editableform.buttons = '<button class="btn btn-info editable-submit"><i class="icon-ok fa fa-check icon-white"></i></button>'+
			                                '<button type="button" class="btn editable-cancel"><i class="icon-remove fa fa-remove"></i></button>';    				
				// *** editable avatar *** //
				try {//ie8 throws some harmless exception, so let's catch it
			
					//it seems that editable plugin calls appendChild, and as Image doesn't have it, it causes errors on IE at unpredicted points
					//so let's have a fake appendChild for it!
					if( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ) Image.prototype.appendChild = function(el){}
					var last_gritter
					$('#avatar').editable({
						type: 'image',
						name: 'avatar',
						value: null,
						image: {
							//specify ace file input plugin's options here
							btn_choose: 'Change Avatar',
							droppable: true,
							/**
							//this will override the default before_change that only accepts image files
							before_change: function(files, dropped) {
								return true;
							},
							*/
			
							//and a few extra ones here
							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
							max_size: 110000,//~100Kb
							on_error : function(code) {//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(code == 1) {//file format error
									last_gritter = $.gritter.add({
										title: 'File is not an image!',
										text: 'Please choose a jpg|gif|png image!',
										class_name: 'gritter-error gritter-center'
									});
								} else if(code == 2) {//file size rror
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
							//You can replace the contents of this function with examples/profile-avatar-update.js for actual upload
			
			
							var deferred = new $.Deferred
			
							//if value is empty, means no valid files were selected
							//but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
							//so we return just here to prevent problems
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
						},
						
						success: function(response, newValue) {
						}
					})
				}catch(e) {}
			});
		</script>
</body>
</html>

