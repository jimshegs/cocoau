<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="name" class="col-md-2 control-label">
        Name
      </label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="name" autofocus
               id="name" value="<?php echo e($name); ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="office" class="col-md-2 control-label">
        Office
      </label>
      <div class="col-md-4">
        <input type="text" class="form-control" name="office"
               id="office" value="<?php echo e($office); ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="page_image" class="col-md-2 control-label">
        Page Image
      </label>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-8">
            <input type="text" class="form-control" name="page_image"
                   id="page_image" onchange="handle_image_change()"
                   alt="Image thumbnail" value="<?php echo e($page_image); ?>">
          </div>
          <script>
            function handle_image_change() {
              $("#page-image-preview").attr("src", function () {
                var value = $("#page_image").val();
                if ( ! value) {
                  value = <?php echo json_encode(config('blog.page_image')); ?>;
                  if (value == null) {
                    value = '';
                  }
                }
                if (value.substr(0, 4) != 'http' &&
                    value.substr(0, 1) != '/') {
                  value = <?php echo json_encode(config('blog.uploads.webpath')); ?>

                        + '/' + value;
                }
                return value;
              });
            }
          </script>
          <div class="visible-sm space-10"></div>
          <div class="col-md-4 text-right">
            <img src="<?php echo e(page_image($page_image)); ?>" class="img img_responsive"
                 id="page-image-preview" style="max-height:40px">
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="file" class="col-md-2 control-label">
        Add Profile Photo
      </label>
      <div class="col-md-6">
        <input type="file" id="file" name="file">
      </div>
    </div>
    <div class="form-group">
      <label for="department" class="col-md-2 control-label">
        Department
      </label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="department"
               id="department" value="<?php echo e($department); ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="level" class="col-md-2 control-label">
        Level
      </label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="level"
               id="level" value="<?php echo e($level); ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="bible_passage" class="col-md-2 control-label">
        Favourite Bible Passage
      </label>
      <div class="col-md-6">
        <textarea class="form-control" name="bible_passage" rows="5"
                  id="bible_passage"><?php echo e($bible_passage); ?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="bible_character" class="col-md-2 control-label">
        Favourite Bible Character
      </label>
      <div class="col-md-4">
        <input type="text" class="form-control" name="bible_character"
               id="bible_character" value="<?php echo e($bible_character); ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="twitter" class="col-md-2 control-label">
        Twitter
      </label>
      <div class="col-md-4">
        <input type="text" class="form-control" name="twitter"
               id="twitter" value="<?php echo e($twitter); ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="facebook" class="col-md-2 control-label">
        Facebook
      </label>
      <div class="col-md-4">
        <input type="text" class="form-control" name="facebook"
               id="facebook" value="<?php echo e($facebook); ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="instagram" class="col-md-2 control-label">
        Instagram
      </label>
      <div class="col-md-4">
        <input type="text" class="form-control" name="instagram"
               id="instagram" value="<?php echo e($instagram); ?>">
      </div>
    </div>
  </div>
</div>
