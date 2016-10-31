@extends('layouts.master')

@section('title', 'Church of Christ | Obafemi Awolowo University')

@section('content')
<div class="container" style="height:150px;"></div>
<div class="container" style="width:100%; height:550px;">
  	<div id="myCarousel" class="carousel slide" style="position: absolute; left: 0; top: 0; right: 0;">
    	<!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li class="item1 active"></li>
	      <li class="item2"></li>
	      <li class="item3"></li>
	      <li class="item4"></li>
          <li class="item5"></li>
	    </ol>

    	<!-- Wrapper for slides -->
    	<div class="carousel-inner" role="listbox">

	      	<div class="item active">
		        <img src="/images/slider.jpg" alt="slider">
		        <div class="carousel-caption">
		          	<h3>Our Services</h3>
		        </div>
	      	</div>

	      	<div class="item">
		        <img src="/images/slider1.jpg" alt="slider">
		        <div class="carousel-caption">
		          	<h3>Majesty</h3>
		        </div>
	      	</div>
	    
      		<div class="item">
		        <img src="/images/slider2.jpg" alt="slider">
		        <div class="carousel-caption">
		        	<h3>Growth</h3>
		        </div>
      		</div>

		    <div class="item">
		        <img src="/images/slider3.jpg" alt="slider">
		        <div class="carousel-caption">
		          	<h3>Fellowship</h3>
		        </div>
		    </div>

            <div class="item">
                <img src="/images/slider4.jpg" alt="slider">
                <div class="carousel-caption">
                    <h3>Salvation</h3>
                </div>
            </div>
  		</div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" role="button">
	      	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      	<span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" role="button">
	      	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      	<span class="sr-only">Next</span>
	    </a>
  	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>





    	<!--<div id="banner" class="banner">
            <div class="banner-image"></div>
            <div class="banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
                            <h1 class="text-center">We are <span>Worthy</span></h1>
                            <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos debitis provident nulla illum minus enim praesentium repellendus ullam cupiditate reiciendis optio voluptatem, recusandae nobis quis aperiam, sapiente libero ut at.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- banner end -->

        <!-- section start -->
        <!-- ================ -->
        <div class="section clearfix object-non-visible" data-animation-effect="fadeIn" style="margin-top:100px">
            <div class="row">
            <div class="container col-md-12">

                    <div class="panel panel-primary col-md-7 col-md-offset-1" style="margin-right: 5px; padding-left:0px; padding-right: 0px; font-size:17px">
                    	<div class="panel-heading" style="padding:0px;">
                        	<h2 id="about" class="title text-center" style="padding-top:10px">Welcome To The <span style="color: white;">Church of Christ, OAU</span></h2>
                        </div>
                        <div class="panel-body">
                            <div class="space"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/images/laolu.jpg" alt="" style="border-style: solid; border-width: 5px; border-radius: 5px; border-color: #e6e6e6;">
                                    <div class="space"></div>
                                </div>
                                <div class="col-md-6">
                                    <p>Hi.</p>
                                    <p>
                                        We are Young Christians, Separated for God's Service, Committed to Righteous Living according to God's laid-down Principles in the Scriptures, United in Love, and Charged with the Desire to Spread the Good News!
                                    </p>
                                    <p>
                                        Our faith is the foundation for every relationship and all the events of everyday life. 
                                    </p>
                                    <p>
                                        We are glad you are here, and look forward to connecting with you. 
                                    </p>
                                    <p>
                                        God Bless You!
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-md-3" style="margin-left: 5px;">
                        <div class="panel panel-info col-md-12">
                            <h3 class="panel-heading">RECENT POSTS</h3>
                            @foreach($posts as $post)
                            <hr align="center" width="100%">
                            <p><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></p>
                            <p>{{ $post->publish_date }} {{ $post->publish_time }}</p>
                            @endforeach
                        </div>
                    </div>

                    
                </div>
            </div>

        </div>
        <!-- section end -->
        <!--section start -->
        <div class="section" style="padding-top:0px">
        	<div class="row" style="padding-right:55px; padding-left:55px;">
                @foreach($uploads as $upload)
    	            <div class="container col-md-3">
    	            	<img class="well" src="{{ page_image($upload->name) }}" style="border-radius: 15px;">
    	            </div>
                @endforeach
            </div>
        </div>

        <!--section end-->

        <!--Load the JavaScript after all text-->
        <script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>

@endsection
