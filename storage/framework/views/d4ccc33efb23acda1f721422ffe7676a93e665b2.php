<?php if(count($errors) > 0): ?>
  <div class="alert alert-danger">
    <strong>Whoops!</strong>
    There were some problems with your input.<br><br>
    <ul>
      <?php foreach($errors->all() as $error): ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>