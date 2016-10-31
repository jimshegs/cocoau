<?php $__env->startSection('title', 'Uploads'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>
	<div class="container-fluid">

		<?php /* Top Bar */ ?>
		<div class="row page-title-row">
			<div class="col-md-6">
				<h3 class="pull-left">Uploads</h3>
				<div class="pull-left">
					<ul class="breadcrumb">
						<?php foreach($breadcrumbs as $path => $disp): ?>
							<li><a href="/admin/upload?folder=<?php echo e($path); ?>"><?php echo e($disp); ?></a></li>
						<?php endforeach; ?>
						<li class="active"><?php echo e($folderName); ?></li>
					</ul>

				</div>
			</div>

			<div class="col-md-6 text-right">
				<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#modal-folder-create">
					<i class="fa fa-plus-circle"></i>New Folder
				</button>
				<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modal-file-upload">
					<i class="fa fa-upload"></i>Upload
				</button>
				
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<?php echo $__env->make('backend.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            	<?php echo $__env->make('backend.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			        <table id="uploads-table" class="table table-striped table-bordered">
			          <thead>
			            <tr>
			              <th>Name</th>
			              <th>Type</th>
			              <th>Date</th>
			              <th>Size</th>
			              <th data-sortable="false">Actions</th>
			            </tr>
			          </thead>
			          <tbody>

						<?php /* The Subfolders */ ?>
						<?php foreach($subfolders as $path => $name): ?>
						  <tr>
						    <td>
						      <a href="/admin/upload?folder=<?php echo e($path); ?>">
						        <i class="fa fa-folder fa-lg fa-fw"></i>
						        <?php echo e($name); ?>

						      </a>
						    </td>
						    <td>Folder</td>
						    <td>-</td>
						    <td>-</td>
						    <td>
						      <button type="button" class="btn btn-xs btn-danger"
						              onclick="delete_folder('<?php echo e($name); ?>')">
						        <i class="fa fa-times-circle fa-lg"></i>
						        Delete
						      </button>
						    </td>
						  </tr>
						<?php endforeach; ?>

						<?php /* The Files */ ?>
						<?php foreach($files as $file): ?>
						  <tr>
						    <td>
						      <a href="<?php echo e($file['webPath']); ?>">
						        <?php if(is_image($file['mimeType'])): ?>
						          <i class="fa fa-file-image-o fa-lg fa-fw"></i>
						        <?php else: ?>
						          <i class="fa fa-file-o fa-lg fa-fw"></i>
						        <?php endif; ?>
						        <?php echo e($file['name']); ?>

						      </a>
						    </td>
						    <td><?php echo e(isset($file['mimeType']) ? $file['mimeType'] : 'Unknown'); ?></td>
						    <td><?php echo e($file['modified']->format('j-M-y g:ia')); ?></td>
						    <td><?php echo e(human_filesize($file['size'])); ?></td>
						    <td>
						      <button type="button" class="btn btn-xs btn-danger"
						              onclick="delete_file('<?php echo e($file['name']); ?>')">
						        <i class="fa fa-times-circle fa-lg"></i>
						        Delete
						      </button>
						      <?php if(is_image($file['mimeType'])): ?>
						        <button type="button" class="btn btn-xs btn-success"
						                onclick="preview_image('<?php echo e($file['webPath']); ?>')">
						          <i class="fa fa-eye fa-lg"></i>
						          Preview
						        </button>
						      <?php endif; ?>
						    </td>
						  </tr>
						<?php endforeach; ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>

	<?php echo $__env->make('backend.upload._modals', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container" style="height:150px;"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script>

    // Confirm file delete
    function delete_file(name) {
      $("#delete-file-name1").html(name);
      $("#delete-file-name2").val(name);
      $("#modal-file-delete").modal("show");
    }

    // Confirm folder delete
    function delete_folder(name) {
      $("#delete-folder-name1").html(name);
      $("#delete-folder-name2").val(name);
      $("#modal-folder-delete").modal("show");
    }

    // Preview image
    function preview_image(path) {
      $("#preview-image").attr("src", path);
      $("#modal-image-view").modal("show");
    }

    // Startup code
    $(function() {
      $("#uploads-table").DataTable();
    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>