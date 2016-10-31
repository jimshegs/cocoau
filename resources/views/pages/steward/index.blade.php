@extends('layouts.master')
@section('title', 'Stewards')

@section('content')
<div class="container" style="height:150px;"></div>
<div class="container">
	@foreach($stewards as $steward)
		
			<div class="col-md-3 text-center">
				
					<img src="{{ page_image($steward->profile_photo) }}" style="width:250px; height:250px; border-style: solid; border-width: 5px; border-radius:5%;">
					<h3><a href="/steward/{{ $steward->name }}">{{ $steward->name }}</a></h3>
					<h4>{{ $steward->office }}</h4>
					
				
			</div>
		
	@endforeach
</div>
<div class="container" style="height:50px;"></div>

@endsection