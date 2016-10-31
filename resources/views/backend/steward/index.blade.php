@extends('layouts.master')
@section('title', 'All posts')

@section('content')
<div class="container" style="height:150px;"></div>
	<div class="container-fluid">	
		<div class="row page-title-row">
			<div class="col-md-6">
				<h3>Stewards <small>» Listing</small></h3>
			</div>
			<div class="col-md-6 text-right">
				<a href="/admin/steward/create" class="btn btn-success btn-md">
					<i class="fa fa-plus-circle"></i> New Steward
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				@include('backend.partials.errors')
            	@include('backend.partials.success')

				<table id="stewards-table" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Office</th>
							<th>Department</th>
							<th data-sortable="false">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($stewards as $steward)
							<tr>
				                <td>{{ $steward->name }}</td>
				                <td>{{ $steward->office }}</td>
				                <td>{{ $steward->department }}</td>
				                <td>
				                	<a href="/admin/steward/{{ $steward->id }}/edit"
				                     class="btn btn-xs btn-info">
				                    	<i class="fa fa-edit"></i> Edit
				                	</a>
				                  	<a href="/steward/{{ $steward->name }}" class="btn btn-xs btn-warning">
				                    	<i class="fa fa-eye"></i> View
				                  	</a>
				                </td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
	<div class="container" style="height:150px;"></div>
@endsection

@section('scripts')
  <script>
    $(function() {
      $("#stewards-table").DataTable({
        order: [[0, "desc"]]
      });
    });
  </script>
@stop
