<?php $__env->startSection('title', 'Edit Post'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>
	<div class="container-fluid">
		<div class="row page-title-row">
			<div class="col-md-8 col-md-offset-2">
				<h3>Stewards <small>» Edit Steward</small></h3>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="padding:10px">Steward Edit Form</h3>
					</div>
					<div class="panel-body">
						<?php echo $__env->make('backend.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            			<?php echo $__env->make('backend.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="<?php echo e(route('admin.steward.update', $id)); ?>">
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<input type="hidden" name="_method" value="PUT">

							<?php echo $__env->make('backend.steward._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

								<div class="form-group">
							  		<div class="col-md-10 col-md-offset-2">
							    	
										<button type="submit" class="btn btn-primary btn-md">
											<i class="fa fa-save"></i> Save Changes
										</button>
										<button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#modal-delete">
											<i class="fa fa-times-circle"></i> Delete
										</button>
								
							  		</div>
								</div>

						</form>

					</div>
				</div>	
			</div>
		</div>

		<?php /* Confirm Delete */ ?>
		<div class="modal fade" id="modal-delete" tabIndex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							×
						</button>
						<h4 class="modal-title">Please Confirm</h4>
					</div>
					<div class="modal-body">
						<p class="lead">
							<i class="fa fa-question-circle fa-lg"></i>  
							Are you sure you want to delete this steward?
						</p>
					</div>
					<div class="modal-footer">
						<form method="POST" action="<?php echo e(route('admin.steward.destroy', $id)); ?>">
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<input type="hidden" name="_method" value="DELETE">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-danger">
								<i class="fa fa-times-circle"></i> Yes
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>