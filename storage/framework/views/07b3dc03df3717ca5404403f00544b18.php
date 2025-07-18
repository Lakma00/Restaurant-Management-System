<!DOCTYPE html>
<html>
  <head> 
   <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

   <style>
    table 
    {
        border:1px solid skyblue;
        margin: auto;
        width:1000px;
    }

    th 
    {
        color:white;
        font-weight:bold;
        font-size:22px;
        text-align:center;
        background-color:red;
        padding:10px;
    }

    td 
    {
        color:white;
        font-weight:bold;
        text-align:center;
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

         <table>
            <tr>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Food title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
                <th>change Status</th>
               
            </tr>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($data->name); ?></td>
                <td><?php echo e($data->email); ?></td>
                <td><?php echo e($data->phone); ?></td>
                <td><?php echo e($data->address); ?></td>
                <td><?php echo e($data->title); ?></td>
                <td><?php echo e($data->quantity); ?></td>
                <td><?php echo e($data->price); ?></td>
                <td>
                    <img width="100" src="food_img/<?php echo e($data->image); ?>" alt="">
                </td>
                <td><?php echo e($data->delivery_status); ?></td>
                <td>
                    <a onclick="return confirm('Are you sure to change this')" class="btn btn-info" href="<?php echo e(url('on_the_way',$data->id)); ?>">On the Way</a>
                    <a onclick="return confirm('Are you sure to change this')" class="btn btn-warning" href="<?php echo e(url('delivered',$data->id)); ?>">Dlivered</a>
                    <a onclick="return confirm('Are you sure to change this')" class="btn btn-danger" href="<?php echo e(url('canceled',$data->id)); ?>">Cancel</a>
                </td>
            </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
         </table>
              </div>
      </div>
    </div>
   <?php echo $__env->make('admin.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\lakma\Desktop\laravel_project\resources\views/admin/order.blade.php ENDPATH**/ ?>