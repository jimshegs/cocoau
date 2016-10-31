<?php $__env->startSection('title', $steward->name); ?>

<?php $__env->startSection('style'); ?>
  <link href="/assets/css/blog.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
  <header class="intro-header"
          style="background-image: url('<?php echo e(page_image($steward->page_image)); ?>')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="post-heading">
            <img src="<?php echo e(page_image($steward->profile_photo)); ?>" style="width:250px; height:250px; float:left; border-style: solid; border-width: 5px; border-radius:50%; margin-right:25px;">
            <h2 style="color:white"><?php echo e($steward->name); ?></h2>
            <h2 class="subheading" style="color:white"><?php echo e($steward->office); ?></h2>
          </div>
        </div>
      </div>
    </div>
  </header>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <?php /* The Steward */ ?>
  <article>
    <div class="container">
      <div class="well col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="row">
          <div class="col-md-3" style="font-size: 20px; padding-top:10px">
            <label for="department" class="control-label">
              Department:
            </label>
          </div>
          <div class="col-md-9 col-md-offset" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-6">
                    <?php echo $steward->department; ?>

                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3" style="font-size: 20px; padding-top:10px">
            <label for="level" class="control-label">
              Level:
            </label>
          </div>
          <div class="col-md-9" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-6">
                    <?php echo $steward->level; ?>

                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3" style="font-size: 20px;">
            <label for="bible_character" class="control-label">
              Favorite Bible Character:
            </label>
          </div>
          <div class="col-md-9" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-6">
                    <?php echo $steward->bible_character; ?>

                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3" style="font-size: 20px;">
            <label for="bible_passage" class="control-label">
              Favorite Bible Passage:
            </label>
          </div>
          <div class="col-md-9" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-12">
                    <?php echo $steward->bible_passage; ?>

                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 col-md-offset-3">
            <ul class="social-links list-inline">
                <li class="facebook"><a href="https://facebook.com/<?php echo $steward->facebook; ?>/"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="https://twitter.com/<?php echo $steward->twitter; ?>/"><i class="fa fa-twitter"></i></a></li>
                <li class="instagram"><a href="https://instagram.com/<?php echo $steward->instagram; ?>/"><i class="fa fa-instagram"></i></a></li>
              </ul>
          </div>
        </div>




      </div>
    </div>
  </article>

  <?php /* The Pager */ ?>
  <div class="container">
    <div class="row">
      <ul class="pager">
        <?php if($steward->previousSteward()): ?>
            <li class="previous">
              <a href="<?php echo $steward->previousSteward()->url(); ?>">
                <i class="fa fa-long-arrow-left fa-lg"></i>
                Previous Steward
              </a>
            </li>
        <?php endif; ?>
        <?php if($steward->nextSteward()): ?>
            <li class="next">
              <a href="<?php echo $steward->nextSteward()->url(); ?>">
                Next Steward
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>