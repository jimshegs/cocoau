<?php $__env->startSection('title', 'Create Role'); ?>

<?php $__env->startSection('content'); ?>
	<div class="container" style="height:150px;"></div>
	<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
		<div class="well well bs-component">

			<form class="form-horizontal" method="post">
	
				<?php foreach($errors->all() as $error): ?>
					<p class="alert alert-danger"><?php echo e($error); ?></p>
				<?php endforeach; ?>

				<?php if(session('status')): ?>
					<div class="alert alert-success">
						<?php echo e(session('status')); ?>

					</div>
				<?php endif; ?>

				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

				<fieldset>
					<legend>Create a new role</legend>
					<div class="form-group">
						<label for="name" class="col-lg-2 control-label">Name</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="name" name="name">
						</div>
					</div>

					<div class="form-group">
						<label for="display_name" class="col-lg-2 control-label">Display Name</label>
						<div class="col-lg-10">
							<input type="display_name" class="form-control" id="display_name" name="display_name">
						</div>
					</div>

					<div class="form-group">
						<label for="description" class="col-lg-2 control-label">Description</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="3" id="description" name="description"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button type="reset" class="btn btn-default">Cancel</button>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		</div>
	</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>