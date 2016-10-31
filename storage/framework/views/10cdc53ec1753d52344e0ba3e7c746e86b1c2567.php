<?php $__env->startSection('title', 'View a post | COCOAU'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>
	<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
		<div class="well well bs-component">
			<div class="content">
				<h2 class="header"><?php echo $post->title; ?></h2>
				<p> <?php echo $post->content; ?> </p>
			</div>
			<div class="clearfix"></div>
		</div>
		<?php foreach($comments as $comment): ?>
			<div class="well well bs-component">
				<div class="content">
					<?php echo $comment->content; ?>

				</div>
			</div>
		<?php endforeach; ?>
		<div class="well well bs-component">
			<form class="form-horizontal" method="post" action="/comment">
				<?php foreach($errors->all() as $error): ?>
					<p class="alert alert-danger"><?php echo e($error); ?></p>
				<?php endforeach; ?>
				<?php if(session('status')): ?>
					<div class="alert alert-success">
						<?php echo e(session('status')); ?>

					</div>
				<?php endif; ?>
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
				<fieldset>
					<legend>Comment</legend>

					<div class="form-group">
						<div class="col-lg-12">
							<textarea class="form-control" rows="3" id="content" name="content"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button type="reset" class="btn btn-default">Cancel</button>
							<button type="submit" class="btn btn-primary">Post</button>
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