<!DOCTYPE html>
<html>
  <head> 
   <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
     
   <style>
    label
     {
        display:inline-block;
        width:200px;
        color:white;
     }

     .div_deg
     {
        padding:10px;
     }
    </style>
  </head>
  <body>

    <?php echo $__env->make('admin.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <form action="<?php echo e(url('upload_food')); ?>" method="post" enctype="multipart/form-data">

          <?php echo csrf_field(); ?> 

              <div class="div_deg">

              <label for="">Food title</label>
              <input type="text" name="title" required>

              </div>

              <div class="div_deg">

              <label for="">Food details</label>
              <textarea name="details" cols="50" rows="5" required></textarea>

              </div>

              <div class="div_deg">

              <label for="">Price</label>
              <input type="text" name="price" required>

              </div>

              <div class="div_deg">

              <label for="">Image</label>
              <input type="file" name="img" required>

              </div>

              <div class="div_deg">
              <input type="submit" value="Add Food" class="btn btn-warning">

              </div>
          </form>

              </div>
      </div>
    </div>
   <?php echo $__env->make('admin.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\lakma\Desktop\laravel_project\resources\views/admin/add_food.blade.php ENDPATH**/ ?>