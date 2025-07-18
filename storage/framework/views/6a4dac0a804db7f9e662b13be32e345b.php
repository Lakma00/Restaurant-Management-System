<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $__env->make('home.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
     
       <?php echo $__env->make('home.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!--  About Section  -->
     <?php echo $__env->make('home.about', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!--  gallary Section  -->

     <?php echo $__env->make('home.gallary', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- book a table Section  -->
    
    <?php echo $__env->make('home.book', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- BLOG Section  -->
   
    <?php echo $__env->make('home.blog', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('home.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
</body>
</html>
<?php /**PATH C:\Users\lakma\Desktop\laravel_project\resources\views/home/index.blade.php ENDPATH**/ ?>