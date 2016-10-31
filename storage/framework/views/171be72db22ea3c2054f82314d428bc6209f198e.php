<?php $__env->startSection('title', 'Blog | COCOAU'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>
	<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
			<?php if(session('status')): ?>
				<div class="alert alert-success">
					<?php echo e(session('status')); ?>

				</div>
			<?php endif; ?>

			<?php if($posts->isEmpty()): ?>
				<p> There is no post.</p>
			<?php else: ?>
				<?php foreach($posts as $post): ?>
					<div class="panel panel-default">
						<div class="panel-heading"><a href="<?php echo action('BlogController@show', $post->slug); ?>"><?php echo $post->title; ?></a></div>
						<div class="panel-body">
							<?php echo mb_substr($post->content,0,500); ?>

						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>