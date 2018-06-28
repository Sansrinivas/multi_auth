@extends('layouts.master1')
@section('content')

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">

			<h3 class="page-header">Admin
			@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			@endif
					You are logged in!</h3> 
			<h3 class="page-header">User Details</h3>
						<div class="row">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example1">
									<thead>
										<tr>
											<th width="1px">
											<a data-token="{{ csrf_token() }}" class="btn multidelete_user"><i style="font-size:2em;" class="fa fa-trash fa-5x"></i></a>
											</th>
											<th>S.no</th>
											<th>Name</th>
											<th>Email ID</th> 
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<?php $i = 1; ?>
									@foreach($cus as $user)
									   
										<tr>
											<td>
											   {{ Form::checkbox('checked[]', ($user->id)) }}
											</td>
											<td>{{$i}}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
										   
											<td>
												<a href="#" class="btn btn-primary"> Edit </a>
												<a id="{{$user->id}}" data-token="{{ csrf_token() }}" class="btn btn-danger delete_user">Delete</a>
											</td>
										</tr>
											<?php $i++ ; ?>
											@endforeach
										</tbody>    
									</table>
								</div>
							</div>
					 </div>
				</div>
					<div class="pagination"> {{$cus->render()}}  </div> 
			</div> 
@endsection
