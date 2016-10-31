@extends('layouts.master')
@section('title', 'All Messages')

@section('content')
<div class="container" style="height:150px;"></div>
	<div class="container-fluid">	
		<div class="row page-title-row">
			<div class="col-md-6">
				<h3>Messages <small>» Listing</small></h3>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				@include('backend.partials.errors')
            	@include('backend.partials.success')

				<table id="messages-table" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Received</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th data-sortable="false">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($contacts as $contact)
							<tr>
								<td data-order="{{ $contact->created_at->timestamp }}">
				                  {{ $contact->created_at->format('j-M-y g:ia') }}
				                </td>
				                <td>{{ $contact->name }}</td>
				                <td>{{ $contact->email }}</td>
				                <td>{{ $contact->phone }}</td>
				                <td>
				                	<a href="/admin/message/{{ $contact->id }}/"
				                     class="btn btn-xs btn-info">
				                    	<i class="fa fa-edit"></i> Reply
				                	</a>
				                  	<a href="/admin/message/{{ $contact->id }}/viewmessage" class="btn btn-xs btn-warning">
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
	<div class="container" style="height:50px;"></div>
@endsection

@section('scripts')
  <script>
    $(function() {
      $("#messages-table").DataTable({
        order: [[0, "desc"]]
      });
    });
  </script>
@stop
