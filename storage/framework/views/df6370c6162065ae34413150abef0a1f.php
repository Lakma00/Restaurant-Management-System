<!DOCTYPE html>
<html>
  <head> 
   <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </head>
  <body>

    <?php echo $__env->make('admin.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <?php echo $__env->make('admin.body', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
              </div>
      </div>
    </div>
   <?php echo $__env->make('admin.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\lakma\Desktop\laravel_project\resources\views/admin/index.blade.php ENDPATH**/ ?>