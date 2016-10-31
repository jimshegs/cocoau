@extends('layouts.master')

@section('title', 'All Roles')

@section('content')
<div class="container" style="height:150px;"></div>
	<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2> All roles </h2>
			</div>
			
			@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			@endif

			@if ($roles->isEmpty())
				<p> There is no role.</p>
			@else
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Display Name</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						@foreach($roles as $role)
							<tr>
								<td>{!! $role->name !!}</td>
								<td>{!! $role->display_name !!}</td>
								<td>{!! $role->description !!}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@endif	
			</div>
		</div>
	</div>
	</div>
<div class="container" style="height:150px;"></div>
@endsection