@extends('layouts.master')

@section('title', 'All Users')

@section('content')
<div class="container" style="height:150px;">
</div>
<div class="container">
	<div class="container col-md-8 col-md-offset-2">
		@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif
		<div class="panel panel-primary">

			<div class="panel-heading">
				<h3> All Users </h3>
			</div>
			
			<div class="panel-body"> 
				@if ($users->isEmpty())
					<p>There is no user</p>
				@else
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Joined at</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
								<tr>
									<td>{!! $user->id !!}</td>
									<td>
										<a href="{!! action('Admin\UsersController@edit', $user->id) !!}">{!! $user->name !!}</a>
									</td>
									<td>{!! $user->email !!}</td>
									<td>{!! $user->created_at !!}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
			</div>

		</div>			
	</div>
</div>
@endsection
