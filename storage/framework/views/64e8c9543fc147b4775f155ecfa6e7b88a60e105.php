<?php $__env->startSection('title', 'All posts'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>
	<div class="container-fluid">	
		<div class="row page-title-row">
			<div class="col-md-6">
				<h3>Stewards <small>» Listing</small></h3>
			</div>
			<div class="col-md-6 text-right">
				<a href="/admin/steward/create" class="btn btn-success btn-md">
					<i class="fa fa-plus-circle"></i> New Steward
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<?php echo $__env->make('backend.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            	<?php echo $__env->make('backend.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				<table id="stewards-table" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Office</th>
							<th>Department</th>
							<th data-sortable="false">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($stewards as $steward): ?>
							<tr>
				                <td><?php echo e($steward->name); ?></td>
				                <td><?php echo e($steward->office); ?></td>
				                <td><?php echo e($steward->department); ?></td>
				                <td>
				                	<a href="/admin/steward/<?php echo e($steward->id); ?>/edit"
				                     class="btn btn-xs btn-info">
				                    	<i class="fa fa-edit"></i> Edit
				                	</a>
				                  	<a href="/steward/<?php echo e($steward->name); ?>" class="btn btn-xs btn-warning">
				                    	<i class="fa fa-eye"></i> View
				                  	</a>
				                </td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
	<div class="container" style="height:150px;"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script>
    $(function() {
      $("#stewards-table").DataTable({
        order: [[0, "desc"]]
      });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>