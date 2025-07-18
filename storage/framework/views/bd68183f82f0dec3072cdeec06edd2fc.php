<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $__env->make('home.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <style>
        table 
        {
            margin:40px;
            border:1px solid skyblue;
            padding:40px;
        }

        th 
        {
            padding:10px;
            text-align:center;
            background-color:red;
            color:white;
            font-weight:bold;
        }

        td 
        {
            padding:10px;
            color:white:
        }
        
        .div_center
        {
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:50px;
        }

        label 
        {
            display:inline-block;
            width:200px;

        }

        .div_deg 
        {
            padding:20px;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
     <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Gallary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">Book-Table</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="<?php echo e(url('/')); ?>">
                <img src="assets/imgs/logo.svg" class="brand-img" alt="">
                <span class="brand-txt">Food Hut</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog<span class="sr-only">(current)</span></a>
                </li>

                <?php if(Route::has('login')): ?>

                <?php if(auth()->guard()->check()): ?>

                 <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('my_cart')); ?>">Cart</a>
                </li>

                <form action="<?php echo e(route('logout')); ?>" method="POST">
                         <?php echo csrf_field(); ?>
                    <input class="btn btn-primary ml-xl-4" type="submit" value="Logout">
                </form>

                <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                </li>

                   
                        <?php endif; ?>
                <?php endif; ?>

                
            </ul>
        </div>
    </nav>

    </br></br></br></br>

    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <table>
            <tr>
                <th>Food Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Remove</th>
            </tr>

            <?php
               $total_price =0;
            ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($data->title); ?></td>
                 <td><?php echo e($data->price); ?>LKR</td>
                  <td><?php echo e($data->quantity); ?></td>

                   <td>
                    <img width="150" src="food_img/<?php echo e($data->image); ?>" alt="">
                   </td>

                   <td>
                    <a onclick="return confirm('Are you sure to remove this?')" class = "btn btn-danger" href="<?php echo e(url('remove_cart',$data->id)); ?>">Remove</a>
                   </td>
            </tr>

             <?php
               $total_price =$total_price + $data->price;
            ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <h3>Total Price for the Cart <?php echo e($total_price); ?> LKR</h3>
    </div>

    <div class="div_center">
        <form action="<?php echo e(url('confirm_order')); ?>" method="post">

        <?php echo csrf_field(); ?> 
        
            <div class="div_deg">
                <label for="">Name</label>
                <input type="text" name="name" value="<?php echo e(Auth()->user()->name); ?>">
            </div>

             <div class="div_deg">
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo e(Auth()->user()->email); ?>">
            </div>

             <div class="div_deg">
                <label for="">Phone</label>
                <input type="number" name="phone" value="<?php echo e(Auth()->user()->phone); ?>">
            </div>

             <div class="div_deg">
                <label for="">Address</label>
                <input type="text" name="address" value="<?php echo e(Auth()->user()->address); ?>">
            </div>

             <div class="div_deg">
                <input class="btn btn-info" type="submit" value="Confirm Order">
            </div>
        </form>
    </div>
    
</body>
</html>
<?php /**PATH C:\Users\lakma\Desktop\laravel_project\resources\views/home/my_cart.blade.php ENDPATH**/ ?>