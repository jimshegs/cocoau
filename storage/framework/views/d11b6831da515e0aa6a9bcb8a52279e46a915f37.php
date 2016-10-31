<?php $__env->startSection('title', 'Sermons | COCOAU'); ?>

<?php $__env->startSection('content'); ?>
	<div class="container" style="height:150px;"></div>

<div class="container" style="padding-bottom: 100px">
	
	<div class="filter-container isotopeFilters2">
	    <ul class="list-inline filter">
	        <li class="active"><a href="#" data-filter="*">All </a><span>/</span></li>
	        <li><a href="#" data-filter=".illustrations">Illustrations</a><span>/</span></li>
	        <li><a href="#" data-filter=".photography">Photography</a><span>/</span></li>
	        <li><a href="#" data-filter=".websites">Websites</a><span>/</span></li>
	        <li><a href="#" data-filter=".art">Art</a></li>
	    </ul>
	</div>



	<div class="col-sm-4 isotopeSelector art">
    <article class="">
        <figure>
            <img src="/images/portfolio-1.jpg" alt="">
            <div class="overlay-background">
                <div class="inner"></div>
            </div>
            <div class="overlay">
                <div class="inner-overlay">
                    <div class="inner-overlay-content with-icons">
                        <a title="First Image" class="fancybox-pop" rel="portfolio-1" href="/images/portfolio-1.jpg"><i class="fa fa-search"></i></a>
						<a title="Second Image"  class="fancybox-pop" href="/images/portfolio-1.jpg" rel="portfolio-1"><i class="fa fa-search"></i></a>
						<a title="Third Image"  class="fancybox-pop" href="/images/portfolio-1.jpg" rel="portfolio-1"></a>
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
        </figure>
        <div class="article-title"><a href="#">Nipperkin run</a></div>
    </article>
	</div>
</div>

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>