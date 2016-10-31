<?php $__env->startSection('title', 'All categories'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>
	<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2> All categories </h2>
			</div>
			<?php if(session('status')): ?>
				<div class="alert alert-success">
					<?php echo e(session('status')); ?>

				</div>
			<?php endif; ?>
			<?php if($categories->isEmpty()): ?>
				<p> There is no category.</p>
			<?php else: ?>
				<table class="table">
					<tbody>
						<?php foreach($categories as $category): ?>
							<tr>
								<td><?php echo $category->name; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php endif; ?>
		</div>
		</div>
	</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>