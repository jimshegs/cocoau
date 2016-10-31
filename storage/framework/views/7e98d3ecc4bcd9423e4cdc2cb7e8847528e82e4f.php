<?php $__env->startSection('title', 'All Roles'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>
	<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2> All roles </h2>
			</div>
			
			<?php if(session('status')): ?>
				<div class="alert alert-success">
					<?php echo e(session('status')); ?>

				</div>
			<?php endif; ?>

			<?php if($roles->isEmpty()): ?>
				<p> There is no role.</p>
			<?php else: ?>
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Display Name</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($roles as $role): ?>
							<tr>
								<td><?php echo $role->name; ?></td>
								<td><?php echo $role->display_name; ?></td>
								<td><?php echo $role->description; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php endif; ?>	
			</div>
		</div>
	</div>
	</div>
<div class="container" style="height:150px;"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>