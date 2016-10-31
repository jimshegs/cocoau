<?php $__env->startSection('title', 'Stewards'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>
<div class="container">
	<?php foreach($stewards as $steward): ?>
		
			<div class="col-md-3 text-center">
				
					<img src="<?php echo e(page_image($steward->profile_photo)); ?>" style="width:250px; height:250px; border-style: solid; border-width: 5px; border-radius:5%;">
					<h3><a href="/steward/<?php echo e($steward->name); ?>"><?php echo e($steward->name); ?></a></h3>
					<h4><?php echo e($steward->office); ?></h4>
					
				
			</div>
		
	<?php endforeach; ?>
</div>
<div class="container" style="height:50px;"></div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>