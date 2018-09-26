<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Top Menu Style - Ace Admin</title>

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?= base_url()?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?= base_url()?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?= base_url()?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?= base_url()?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?= base_url()?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?= base_url()?>assets/js/html5shiv.min.js"></script>
		<script src="<?= base_url()?>assets/js/respond.min.js"></script>
		<![endif]-->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?= base_url()?>assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url()?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>

		<!-- datatables dan button -->
		<script src="<?= base_url()?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?= base_url()?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?= base_url()?>assets/js/dataTables.buttons.min.js"></script>
		<script src="<?= base_url()?>assets/js/buttons.flash.min.js"></script>
		<script src="<?= base_url()?>assets/js/buttons.html5.min.js"></script>
		<script src="<?= base_url()?>assets/js/buttons.print.min.js"></script>
		<script src="<?= base_url()?>assets/js/buttons.colVis.min.js"></script>
		<script src="<?= base_url()?>assets/js/dataTables.select.min.js"></script>
		
		<!-- ace scripts -->
		<script src="<?= base_url()?>assets/js/ace-elements.min.js"></script>
		<script src="<?= base_url()?>assets/js/ace.min.js"></script>
	</head>

	<body class="no-skin">
		<!--Navbar Start-->
			<?php $this->load->view('demo/navbar')?>
		<!--Navbar End-->
		<div class="main-container ace-save-state" id="main-container">
			<!--Sidebar Start-->
				<?php $this->load->view('demo/sidebar')?>
			<!--Sidebar End-->

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="page-header">
							<h1>
								Top Menu Style
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									top menu &amp; navigation
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<?php $this->load->view('demo/form')?>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		
	
		
	</body>
</html>
