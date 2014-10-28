		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="<?php echo base_url();?>assets/admin/js/jquery-2.0.3.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
			<script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.min.js"></script>
		<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/admin/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/admin/js/jquery-1.10.2.min.js'>"+"<"+"script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>assets/admin/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
			<script src="<?php echo base_url();?>assets/admin/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo base_url();?>assets/admin/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/bootbox.min.js"></script>
		<!-- ace scripts -->

		<script src="<?php echo base_url();?>assets/admin/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/ace.min.js"></script>
		<script>
			$('.nav-list').find('a').each(function(){
				if (this.href == document.location.href || document.location.href.search(this.href) >= 0) {
					if (!$(this).parents("li").eq(1)) {
						$(this).parents("li").addClass('active');
					}
					else if (!$(this).parents("li").eq(2)){
						$(this).parents("li").eq(1).addClass("open active");
						$(this).parents("li").eq(0).addClass("active");
					}else{
						$(this).parents("li").eq(1).addClass("active open");
						$(this).parents("li").eq(0).addClass("active");
						$(this).parents("li").eq(2).addClass("active open");
					}
				}
			});
		</script>