<!DOCTYPE html>
<html>
  <head> 
   <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

   <style>
       table 
       {
        border:1px solid skyblue;
        margin:auto;
        width:800px;
       } 

       th 
       {
        background:skyblue;
        color:white;
        padding:10px;
        margin:10px;
       }

       td 
       {
        color:white;
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

          <h1>All Foods</h1>

          <div>
            <table>

               <tr>
                      <th>Food Title</th>
                      <th>Details</th>
                       <th>price</th>
                      <th>Image</th>
                      <th>Delete</th>
                      <th>Update</th>
                 </tr>

                 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                 <tr>
                    <td><?php echo e($data->title); ?></td>
                    <td><?php echo e($data->detail); ?></td>
                    <td><?php echo e($data->price); ?></td>
                    <td>
                        <img width="150" src="food_img/<?php echo e($data->image); ?>" alt="">
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this')" href="<?php echo e(url('delete_food',$data->id)); ?>">Delete</a>
                    </td>

                    <td>
                      <a class="btn btn-warning" href="<?php echo e(url('update_food',$data->id)); ?>">Update</a>
                    </td>
                 </tr>

                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

           </table>


          </div>
              </div>
      </div>
    </div>
   <?php echo $__env->make('admin.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\lakma\Desktop\laravel_project\resources\views/admin/show_food.blade.php ENDPATH**/ ?>