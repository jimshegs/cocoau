@extends('layouts.master')
@section('title', 'Gallery')

@section('style')
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
@endsection

@section('content')
<div class="container" style="height:150px;"></div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
            
            	<h1 class="text-center title" id="portfolio">Gallery</h1>
				<div class="separator"></div>
				
           
                <!-- isotope filters start -->
                <div class="row">
                	<div class="col-md-3 col-sm-3"></div>

                	<div class="col-md-6 col-sm-6">
                		<p class="lead text-center">Pictures remind us of the great times we shared together</p>
						<div class="filter-container isotopeFilters">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">ALL</a></li>
								@foreach($categories as $category)
								<li><a href="#" data-filter=".{{ $category->name }}">{{ $category->name }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-sm-3"></div>
				</div>
				<!-- isotope filters end -->
                
            </div>
        </div>
    </div>
</section>


<section class="portfolio-section port-col">
    <div class="container">
        <div class="row">
            <div class="isotopeContainer">
          		@foreach($uploads as $upload)
	            <div class="col-sm-3 isotopeSelector @foreach($upload->categories as $category) {{ $category->name }} @endforeach">
	                <article class="">
	                    <figure>
	                        <img src="{{ page_image($upload->name) }}" alt="">
	                        <div class="layover-background">
	                            <div class="inner"></div>
	                        </div>
	                        <div class="layover">
	                            <div class="inner-layover">
	                                <div class="inner-layover-content with-icons">
	                                    <a class="fancybox-pop" rel="portfolio-1" href="{{ page_image($upload->name) }}"><i class="fa fa-search"></i></a>
	                                    <a href="#"><i class="fa fa-link"></i></a>
	                                </div>
	                            </div>
	                        </div>
	                    </figure>
	                    <div class="article-title"><a href="#">{{ $upload->image_name }}</a></div>
	                </article>
	            </div>
	            @endforeach
	            
            </div>
            
        </div>
    </div>

    {{-- The Pager --}}
  <div class="container">
    <div class="row">
      <ul class="pager" style="font-size:30px;">
        @if ($uploads->currentPage() > 1)
          <li class="previous">
            <a href="{!! $uploads->url($uploads->currentPage() - 1) !!}">
              <i class="fa fa-long-arrow-left fa-lg"></i>
              Previous
            </a>
          </li>
        @endif
        @if ($uploads->hasMorePages())
          <li class="next">
            <a href="{!! $uploads->nextPageUrl() !!}">
              Next
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </li>
        @endif
      </ul>
    </div>
  </div>
    
</section>

@endsection

@section('scripts')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="/js/isotope.min.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/main.js"></script>
@stop