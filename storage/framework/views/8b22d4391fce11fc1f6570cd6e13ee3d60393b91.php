<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>
	<div class="container">
	<div class="col-md-6 col-md-offset-3">
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
				<?php echo csrf_field(); ?>

			
				<fieldset>
					<legend>Edit user</legend>
					<div class="form-group">
						<label for="name" class="col-lg-2 control-label">Name</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?php echo e($user->name); ?>">
						</div>
					</div>
			
					<div class="form-group">
						<label for="email" class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo e($user->email); ?>">
						</div>
					</div>
			
					<div class="form-group">
						<label for="select" class="col-lg-2 control-label">Role</label>
						<div class="col-lg-10">
							<select class="form-control" id="role" name="role[]" multiple>
								<?php foreach($roles as $role): ?>
									<option value="<?php echo $role->id; ?>" <?php if(in_array($role->id, $selectedRoles)): ?> selected="selected" <?php endif; ?> ><?php echo $role->display_name; ?>

									</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-lg-2 control-label">Password</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="password">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-lg-2 control-label">Confirm password</label>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="password_confirmation">
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