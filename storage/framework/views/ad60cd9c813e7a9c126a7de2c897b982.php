<!DOCTYPE html>
<html>
  <head> 
   <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

   <style>
    table 
    {
        border: ipx solid skyblue;
        margin:auto;
        width:1000px;
    }

    th 
    {
        background-color:skyblue;
        padding:20px;
        text-align;center:
        color:white;
        font-size:18px;
    }

    td 
    {
        padding:20px;
        text-align;center:
        color:white;
        font-weight:bold;

    }
   </style>
  </head>
  <body>

    <?php echo $__env->make('admin.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <table>
            <tr>
                <th>Phone Number</th>
                <th>No. of Guest</th>
                <th>Date</th>
                <th>Time</th>
            </tr>

            <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($book->phone); ?></td>
                <td><?php echo e($book->guest); ?></td>
                <td><?php echo e($book->date); ?></td>
                <td><?php echo e($book->time); ?></td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
              </div>
      </div>
    </div>
   <?php echo $__env->make('admin.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\lakma\Desktop\laravel_project\resources\views/admin/reservation.blade.php ENDPATH**/ ?>