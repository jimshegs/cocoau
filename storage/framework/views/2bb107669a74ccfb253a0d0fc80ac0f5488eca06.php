<?php $__env->startSection('title', 'Reply Message'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:150px;"></div>
<div class="container" style="padding-bottom: 50px;">
    <h2 class="title text-center" id="reply">Reply Message</h2>
    <div class="row">
        <div class="well well-md col-md-8 col-md-offset-2">
            <div class="form" style="margin:40px">
                <?php echo $__env->make('backend.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('backend.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <form action="/admin/message/<?php echo e($contact->id); ?>" method="post" role="form" id="reply-form">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group has-feedback">
                        <label class="sr-only" for="name">Subject</label>
                        <input type="text" class="form-control" id="subject" value="<?php echo e(old('subject')); ?>" placeholder="Subject" name="subject" required>
                        <i class="fa fa-subject form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="sr-only" for="email">Recipient</label>
                        <input type="email" class="form-control" id="email" value="<?php echo e($contact->email); ?>" placeholder="Recipient's Email Address" name="email" required>
                        <i class="fa fa-envelope form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="sr-only" for="message">Message</label>
                        <textarea class="form-control" rows="8" id="message" value="<?php echo e(old('message')); ?>" placeholder="Message" name="message" required></textarea>
                        <i class="fa fa-pencil form-control-feedback"></i>
                    </div>
                    <input type="submit" value="Send" class="btn btn-default">
                </form>
            </div>
        </div>
    
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>