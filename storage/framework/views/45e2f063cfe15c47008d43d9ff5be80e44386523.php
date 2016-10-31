<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>

	<div class="container-fluid">
		<div class="row page-title-row">
			<div class="col-md-12">
				<h3 class="text-center">Tags <small>» Create New Tag</small></h3>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
			    		<h3 class="panel-title" style="padding:10px">New Tag Form</h3>
			  		</div>
			  		
			  		<div class="panel-body">

						<?php echo $__env->make('backend.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				
			    		<form class="form-horizontal" role="form" method="POST" action="/admin/tag">
			      			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

			      			<div class="form-group">
			        			<label for="tag" class="col-md-3 control-label">Tag</label>
			        			<div class="col-md-3">
			          				<input type="text" class="form-control" name="tag" id="tag" value="<?php echo e($tag); ?>" autofocus>
			        			</div>
			      			</div>

			      			<?php echo $__env->make('backend.tag._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			      			<div class="form-group">
			        			<div class="col-md-7 col-md-offset-3">
			          				<button type="submit" class="btn btn-primary btn-md">
				            			<i class="fa fa-plus-circle"></i>
				              			Add New Tag
			          				</button>
			        			</div>
			      			</div>

			    		</form>

			  		</div>
				</div>
			</div>
		</div>
	</div>

<div class="container" style="height:150px;"></div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>