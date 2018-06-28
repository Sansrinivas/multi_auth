<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Sample</title>

	<!-- Bootstrap Core CSS -->
	<script src="{{ URL::asset('assets/sbadmin2/bower_components/jquery/dist/jquery.min.js') }}"></script>

	<link href="{{ URL::asset('assets/sbadmin2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />

	<!-- MetisMenu CSS -->
	<link href="{{ URL::asset('assets/sbadmin2/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet" />

	<!-- Custom CSS -->
	<link href="{{ URL::asset('assets/sbadmin2/dist/css/sb-admin-2.css') }}" rel="stylesheet" />

	<!-- Custom Fonts -->
	<link href="{{ URL::asset('assets/sbadmin2/bower_components/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

	 <!-- DataTables CSS -->
	<link href="{{ URL::asset('assets/sbadmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="{{ URL::asset('assets/sbadmin2/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">

</head>

			 

@yield('content')

			

@section('dom_links')
    <!-- jQuery UI for Calendar -->
    <script type='text/javascript' src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="{{ URL::asset('assets/sbadmin2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>	

	<!-- Metis Menu Plugin JavaScript -->
	<script src="{{ URL::asset('assets/sbadmin2/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

	<script src="{{ URL::asset('assets/sbadmin2/js/jquery.validate.min.js') }}" type="text/javascript"></script>

	<!-- DataTables JavaScript -->
	<script src="{{ URL::asset('assets/sbadmin2/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>

	<script src="{{ URL::asset('assets/sbadmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>

	<!-- Custom Theme JavaScript -->
	<script src="{{ URL::asset('assets/sbadmin2/dist/js/sb-admin-2.js') }}"></script>
@show
	


</body>

</html>