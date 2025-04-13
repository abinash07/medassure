<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Dashboard</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="icon" href="<?= base_url(); ?>admin_assets/img/favicon.png" sizes="32x32" />
		
		<link rel="stylesheet" href="<?= base_url('admin_assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('admin_assets/fontawesome/css/all.min.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('admin_assets/css/styles.css'); ?>">

		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css" />
		

		<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" rel="stylesheet" />
		<link href="//cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?= base_url('admin_assets/css/multiselect.css'); ?>">
		
		<link rel="stylesheet" href="<?= base_url('admin_assets/css/sweetalert.css'); ?>">

        <script src="<?php echo base_url('admin_assets/js/jquery-3.6.0.js'); ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.js"></script>
		<script src="<?php echo base_url( ); ?>admin_assets/js/main.js" type="text/javascript"></script>
		<link rel="stylesheet" href="<?php echo base_url('admin_assets/css/multidate.css'); ?>">
		<script src="<?php echo base_url( ); ?>admin_assets/js/moment.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	</head>
	
	<div class="page-loader" style="display: none;">
		<div class="spinner"></div>
	</div>

	
	<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
		<div class="wrapper">
			<!-- Main Header -->
			<header class="main-header">
				<a href="/admin" class="logo">
					<span class="logo-mini"><img src="<?php echo base_url('admin_assets/img/small-logo.png'); ?>" alt="Small Dots" /></span>
					<span class="logo-lg"><img src="<?php echo base_url('admin_assets/img/logo.png'); ?>" alt="TMI Logo" class="img-fluid" /></span>
				</a>
				<!-- Header Navbar -->
				<nav class="navbar navbar-static-top custom-nav" role="navigation">
					<a href="#" id="leftSideBar" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					    <span class="sr-only">Toggle navigation</span>
					</a>
					<h4>Dashboard</h4>
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown">
							  	<a class="" id="menu1" href="" data-toggle="dropdown" aria-expanded="false">
									<small >You are logged in as</small>
									<span style="text-transform: capitalize;"><?php echo $_SESSION['name']; ?></span>
									<span class="caret"></span>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
				<?php require_once('sidebar.php');?>

