<?php $__env->startSection('title', 'All Messages'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>
	<div class="container-fluid">	
		<div class="row page-title-row">
			<div class="col-md-6">
				<h3>Messages <small>» Listing</small></h3>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<?php echo $__env->make('backend.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            	<?php echo $__env->make('backend.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				<table id="messages-table" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Received</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th data-sortable="false">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($contacts as $contact): ?>
							<tr>
								<td data-order="<?php echo e($contact->created_at->timestamp); ?>">
				                  <?php echo e($contact->created_at->format('j-M-y g:ia')); ?>

				                </td>
				                <td><?php echo e($contact->name); ?></td>
				                <td><?php echo e($contact->email); ?></td>
				                <td><?php echo e($contact->phone); ?></td>
				                <td>
				                	<a href="/admin/message/<?php echo e($contact->id); ?>/"
				                     class="btn btn-xs btn-info">
				                    	<i class="fa fa-edit"></i> Reply
				                	</a>
				                  	<a href="/admin/message/<?php echo e($contact->id); ?>/viewmessage" class="btn btn-xs btn-warning">
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
	<div class="container" style="height:50px;"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script>
    $(function() {
      $("#messages-table").DataTable({
        order: [[0, "desc"]]
      });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>