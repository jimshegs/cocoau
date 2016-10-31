<p>
  You have received a new message from your website contact form.
</p>
<p>
  Here are the details:
</p>
<ul>
  <li>Name: <strong><?php echo e($name); ?></strong></li>
  <li>Email: <strong><?php echo e($email); ?></strong></li>
  <li>Phone: <strong><?php echo e($phone); ?></strong></li>
</ul>
<hr>
<p>
  <?php foreach($messageLines as $messageLine): ?>
    <?php echo e($messageLine); ?><br>
  <?php endforeach; ?>
</p>
<hr>