<?php $__env->startSection('title', 'Gallery'); ?>

<?php $__env->startSection('style'); ?>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php echo e(asset('/css/styles.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
								<?php foreach($categories as $category): ?>
								<li><a href="#" data-filter=".<?php echo e($category->name); ?>"><?php echo e($category->name); ?></a></li>
								<?php endforeach; ?>
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
          		<?php foreach($uploads as $upload): ?>
	            <div class="col-sm-3 isotopeSelector <?php foreach($upload->categories as $category): ?> <?php echo e($category->name); ?> <?php endforeach; ?>">
	                <article class="">
	                    <figure>
	                        <img src="<?php echo e(page_image($upload->name)); ?>" alt="">
	                        <div class="layover-background">
	                            <div class="inner"></div>
	                        </div>
	                        <div class="layover">
	                            <div class="inner-layover">
	                                <div class="inner-layover-content with-icons">
	                                    <a class="fancybox-pop" rel="portfolio-1" href="<?php echo e(page_image($upload->name)); ?>"><i class="fa fa-search"></i></a>
	                                    <a href="#"><i class="fa fa-link"></i></a>
	                                </div>
	                            </div>
	                        </div>
	                    </figure>
	                    <div class="article-title"><a href="#"><?php echo e($upload->image_name); ?></a></div>
	                </article>
	            </div>
	            <?php endforeach; ?>
	            
            </div>
            
        </div>
    </div>

    <?php /* The Pager */ ?>
  <div class="container">
    <div class="row">
      <ul class="pager" style="font-size:30px;">
        <?php if($uploads->currentPage() > 1): ?>
          <li class="previous">
            <a href="<?php echo $uploads->url($uploads->currentPage() - 1); ?>">
              <i class="fa fa-long-arrow-left fa-lg"></i>
              Previous
            </a>
          </li>
        <?php endif; ?>
        <?php if($uploads->hasMorePages()): ?>
          <li class="next">
            <a href="<?php echo $uploads->nextPageUrl(); ?>">
              Next
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
    
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="/js/isotope.min.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/main.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>