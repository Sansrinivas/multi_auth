<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title> Add Customer</title>

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
	

	
</head>

<body>


		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">User's Dashboard</a>
			</div>
		
		
			<ul class="nav navbar-top-links navbar-right">

						@guest('admin')
                            <li><a href="{{ route('admin.login') }}">Login</a></li>
                        @endguest  
                        @auth('admin')
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('admin.logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth
			</ul>	
		

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">	
						<li>
							<a href="{{ route('admin.dashboard') }}"></i>List</a>
						</li>
						<li>
							<a href="#"></i>Insert</a>
						</li>
						<li>
							<a href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout</a>
						</li>
						<li>
							<a href="#">Customers<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="{{ route('customer.create') }}">Add Customer</a>
								</li>
								<li>
									<a href="{{ route('customer.view') }}">Customers</a>
								</li>
							</ul>
						</li>
					</ul>
						 
				</div>
					
			</div>
		
		</nav>

			@yield('content')

			@section('domlinks')

	<!-- jQuery -->
    <script src="{{ URL::asset('assets/sbadmin2/bower_components/jquery/dist/jquery.min.js') }}"></script>


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


	<!-- Bootstrap Core JavaScript -->
	<script src="{{ URL::asset('assets/sbadmin2/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="{{ URL::asset('assets/sbadmin2/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

	<!-- Morris Charts JavaScript -->
	<script src="{{ URL::asset('assets/sbadmin2/bower_components/raphael/raphael-min.js')}}"></script>

	<!-- table design -->
	<script src="{{ URL::asset('assets/sbadmin2/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>

	<script src="{{ URL::asset('assets/sbadmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>


	<!-- Custom Theme JavaScript -->
	<script src="{{ URL::asset('assets/sbadmin2/dist/js/sb-admin-2.js')}}"></script>

	<script type="text/javascript" src="{{ URL::asset('assetsmedia/js/jquery.validate.min.js')}}"></script>
	
	@show



</body>
</html>		

