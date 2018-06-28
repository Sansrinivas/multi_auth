<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Login Details</title>

	<!-- Bootstrap Core CSS -->
	<link href="{{ URL::asset('assets/sbadmin2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="{{ URL::asset('assets/sbadmin2/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{ URL::asset('assets/sbadmin2/dist/css/sb-admin-2.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('assets/sbadmin2/dist/css/usistrackr.css') }}" rel="stylesheet" />

	<!-- Custom Fonts -->
	<link href="{{ URL::asset('assets/sbadmin2/bower_components/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

	 <!-- DataTables CSS -->
	<link href="{{ URL::asset('assets/sbadmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="{{ URL::asset('assets/sbadmin2/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">

	<!-- jQuery UI Calendar -->
	<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	
	<!-- jQuery -->
    <script src="{{ URL::asset('assets/sbadmin2/bower_components/jquery/dist/jquery.min.js') }}"></script>


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
                </button>
				<a class="navbar-brand">Dashboard</a>
			</div>
			<!-- /.navbar-header -->

			<ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">

						<li>
							
								<div>
									<strong>Welcome <?php //echo $viewname['name1']; ?></strong>
								  
								</div>
							   
							
						</li>
				   <!-- /.dropdown-messages -->
				</li>
			   
				
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">


						<li>
							<a href="<?php echo site_url('login/change_password')?>"><i class="fa fa-wrench fa-fw"></i>Change Password</a>
						</li>

								
						<li><a href="<?php echo site_url('login/logout')?>"><i class="fa fa-user fa-fw"></i> Logout</a>
						</li>
					   
					</ul>
					<!-- /.dropdown-user -->
				</li>
				<!-- /.dropdown -->
			</ul>
			<!-- /.navbar-top-links -->

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu"> 
					   
						<li>
							<a href="<?php echo site_url('getdetail')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
						</li>
						<li>
							<a href="<?php echo site_url('login/change_password')?>"><i class="fa fa-wrench fa-fw"></i>Change Password</a>
						</li>
						<li>
							<a href="<?php echo site_url('login/logout')?>"><i class="fa fa-user fa-fw"></i> Logout</a>
						</li>
	
						
							
							</li>	   
						
					<!--	<li>
							<a href="<?php //echo site_url('checkstatus/index')?>"><i class="fa fa-table fa-fw"></i> Check Status </a>
						</li>
						<li>
							<a href="<?php //echo site_url('new_donor/index')?>"><i class="fa fa-table fa-fw"></i> New Donor </a>
						</li>
						<li>
							<a href="<?php //echo site_url('updatedonor/index')?>"><i class="fa fa-table fa-fw"></i> Update Donor </a>
						</li>
						-->
							</ul>
							<!-- /.nav-second-level -->
							</li>
						
					   
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>

