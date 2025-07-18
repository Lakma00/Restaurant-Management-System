<!DOCTYPE html>
<html>
  <head> 

  <base href="/public">

   <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

   <style>
    .div_deg 
    {
        padding:10px;
    }

    label 
    {
        display:inline-block;
        width:200px;
    }
   </style>
  </head>
  <body>

    <?php echo $__env->make('admin.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h1>Update Food</h1>

         <form action="<?php echo e(url('edit_food',$food->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

            <div class="div_deg">
                <label for="">Food Title</label>
                <input type="text" name="title" value="<?php echo e($food->title); ?>">

            </div>

            <div class="div_deg">
                <label for="">Details</label>
                <textarea name="details" id=""><?php echo e($food->details); ?></textarea>
            </div>

            <div class="div_deg">
                <label for="">Price</label>
                <input type="text" name="price" value="<?php echo e($food->price); ?>">

            </div>

            <div class="div_deg">
                <label for="">Current Image</label>
                <img width="150" src="food_img/<?php echo e($food->image); ?>" alt="">
              

            </div>

            <div class="div_deg">
                <label for="">Change Image</label>
                <input type="file" name="image">
              
            </div>

             <div class="div_deg">
                
                <input class= "btn btn-warning" type="submit" value="Update Food">
              
            </div>




         </form>

         
              </div>
      </div>
    </div>
   <?php echo $__env->make('admin.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\lakma\Desktop\laravel_project\resources\views/admin/update_food.blade.php ENDPATH**/ ?>