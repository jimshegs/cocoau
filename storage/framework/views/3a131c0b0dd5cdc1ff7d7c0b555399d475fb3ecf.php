<?php $__env->startSection('title', 'View Message'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="height:100px;"></div>
  <div class="row page-title-row">
    <div class="col-md-12">
      <h2 style="text-align:center">View Message</h2>
    </div>
  </div>
  <?php /* The Message */ ?>
  <article>
    <div class="container">
      <div class="well col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="row">
          <div class="col-md-3" style="font-size: 20px; padding-top:10px">
            <label for="name" class="control-label">
              Name:
            </label>
          </div>
          <div class="col-md-9 col-md-offset" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-6">
                    <?php echo $contact->name; ?>

                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3" style="font-size: 20px; padding-top:10px">
            <label for="email" class="control-label">
              Email:
            </label>
          </div>
          <div class="col-md-9" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-6">
                    <?php echo $contact->email; ?>

                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3" style="font-size: 20px;">
            <label for="phone" class="control-label">
              Phone Number:
            </label>
          </div>
          <div class="col-md-9" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-6">
                    <?php echo $contact->phone; ?>

                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3" style="font-size: 20px;">
            <label for="message" class="control-label">
              Message:
            </label>
          </div>
          <div class="col-md-9" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-12">
                    <?php echo $contact->message; ?>

                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9 col-md-offset-3">
            <a href="/admin/message/<?php echo e($contact->id); ?>/" class="btn btn-xs btn-info">
              <i class="fa fa-edit"></i> Reply
            </a>
          </div>  
        </div>

      </div>
    </div>
  </article>

  <div class="container" style="height:50px;"></div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>