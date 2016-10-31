@extends('layouts.master')
@section('title', 'Create A New Post')

@section('content')
<div class="container" style="height:150px;"></div>
	<div class="container-fluid">
		<div class="row page-title-row">
			<div class="col-md-8 col-md-offset-2">
				<h3>Stewards <small>» Add New Steward</small></h3>
			</div>
		</div>

		<div class="row">	
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="padding:10px">New Steward Form</h3>
					</div>
					<div class="panel-body">
						
						@include('backend.partials.errors')
       
						<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.steward.store') }}" >
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							@include('backend.steward._form')

							
							<div class="form-group">
						  		<div class="col-md-10 col-md-offset-2">
						    		<button type="submit" class="btn btn-primary btn-lg">
						      			<i class="fa fa-disk-o"></i> Save
						    		</button>
						  		</div>
							</div>
							

						</form>

					</div>
				</div>	
			</div>
		</div>
	</div>
@endsection
