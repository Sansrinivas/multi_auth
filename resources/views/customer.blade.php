@extends('layouts.master1')
@section('content')

<div class="success" style="padding: 10px; border: 1px solid #FFC; background: #eaeaea; float: right; width: 80%; display: none;">Success</div>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-md-6">
				<h3 class="page-header">Admin
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
				You are logged in!</h3> 
			</div>
		</div>
		  
					   
	<div class="panel-header"><h4>Add Customer</h4></div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Basic Form Elements
						</div>
						<div class="panel-body">

							{{  Form::open([
								'route' => 'customer.store',
								'class'=> 'form-horizontal validateform'
							]) }}

							{{ csrf_field() }}
							<div class="row">
								<div class="col-lg-6">
									<form role="form">
										<div class="form-group">
											<label for="name" class="control-label">Name</label>
											<input id="name" type="text" class="form-control" name="name" >
										</div>
										  
										<div class="form-group">
											<label for="email" class="control-label">Email</label>
											<input id="email" type="text" class="form-control" name="email" >
										</div>

										<div class="form-group">
											<label for="phno" class="control-label">Phno</label>
											<input id="phno" type="text" class="form-control" name="phno" > 
										</div>
										
										<button type="button" class="btn btn-default submit">Submit Button</button>
										<button type="reset" class="btn btn-default">Reset Button</button>
									</form>
								</div>
							</div>                           
						</div>                        
					</div>                   
				</div>               
			</div>           
	</div>
			  
	<div class="pagination"></div>   
				
		   
@endsection
@section('domlinks')
@parent

<script>
	$(document).ready(function() {

		$(".submit").on('click',function(e) {

			e.preventDefault();
				var name= $("#name").val();
				var email= $("#email").val();
				var phno= $("#phno").val();

				$.ajax({
					type: "post",
					url: "{{ route('customer.store') }}",
					data: {
						_token: '{{ csrf_token() }}',
						name: name,
						email: email,
						phno : phno

					},
					success: function(data) {
						$('.success').fadeIn('fast');

						setTimeout(function() {
							$('.success').fadeOut('slow');
						}, 5000);

						location.href("route('customer.view')");
					}
				});
			});

 });
/*  $('.validateform').validate({
			errorElement: 'span', //default input error message container
			errorClass: 'help-block', // default input error message class
			focusInvalid: false, // do not focus the last invalid input
			rules: {
				name: {
					required: true
				},
				email: {
					required: true
				}
			},

			messages: {
				name: {
					required: "Name is required."
				},
				email: {
					required: "Email is required."
				}
			},

			invalidHandler: function(event, validator) 
			{ 
				//display error alert on form submit   
				$('.alert-danger', $('.login-form')).show();
			},

			highlight: function(element) 
			{ // hightlight error inputs
				$(element).closest('.form-group').addClass('has-error'); // set error class to the control group
			},

			success: function(label) {
				label.closest('.form-group').removeClass('has-error');
				label.remove();
			},

			errorPlacement: function(error, element) {
				error.insertAfter(element.closest('.input-group'));
			},

			submitHandler: function(form) {
				form.submit(); // form validation success, call ajax form submit
			}
		});*/
</script>

@stop