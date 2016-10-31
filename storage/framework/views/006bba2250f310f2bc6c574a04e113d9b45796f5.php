<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo e($meta_description); ?>">
  <meta name="author" content="<?php echo e(config('blog.author')); ?>">

  <title><?php echo e(isset($title) ? $title : config('blog.title')); ?></title>

  <link rel="shortcut icon" href="/images/logo.png">

<link href="/assets/css/blog.css" rel="stylesheet">
   <?php echo $__env->yieldContent('styles'); ?>

  <!-- Worthy core CSS file -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <?php /* Styles */ ?>
  
 

  <?php /* HTML5 Shim and Respond.js for IE8 support */ ?>
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="no-trans">
<?php echo $__env->make('blog.partials.page-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('page-header'); ?>
<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('blog.partials.page-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php /* Scripts */ ?>
<!-- Jquery and Bootstap core js files -->
    <script type="text/javascript" src="/plugins/jquery.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>

    <!-- Modernizr javascript -->
    <script type="text/javascript" src="/plugins/modernizr.js"></script>

    <!-- Isotope javascript -->
    <script type="text/javascript" src="/plugins/isotope/isotope.pkgd.min.js"></script>

    <!-- <script type="text/javascript" src="/js/jquery.fancybox.js"></script> -->
    
    <!-- Backstretch javascript -->
    <script type="text/javascript" src="/plugins/jquery.backstretch.min.js"></script>

    <!-- Appear javascript -->
    <script type="text/javascript" src="/plugins/jquery.appear.js"></script>

    <!-- Initialization of Plugins -->
    <script type="text/javascript" src="/js/template.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="/js/custom.js"></script>
<script src="/assets/js/blog.js"></script>

<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>