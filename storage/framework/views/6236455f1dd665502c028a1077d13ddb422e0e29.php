<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="col-md-8 col-md-offset-2">

		<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2> All Users </h2>
			</div>
			<?php if(session('status')): ?>
				<div class="alert alert-success">
					<?php echo e(session('status')); ?>

				</div>
			<?php endif; ?>
			<?php if($users->isEmpty()): ?>
				<p>There is no user</p>
			<?php else: ?>
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Joined at</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($users as $user): ?>
							<tr>
								<td><?php echo $user->id; ?></td>
								<td>
									<a href="#"><?php echo $user->name; ?></a>
								</td>
								<td><?php echo $user->email; ?></td>
								<td><?php echo $user->created_at; ?></td>
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