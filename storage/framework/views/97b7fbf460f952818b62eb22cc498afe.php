<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="/admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Lakma Navodi</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="<?php echo e(url('home')); ?>"> <i class="icon-home"></i>Home </a></li>
               
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Food</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="<?php echo e(url('add_food')); ?>">Add Food</a></li>
                    <li><a href="<?php echo e(url('view_food')); ?>">View Food</a></li>
                    
                  </ul>
                </li>

                <li>
                  <a href="<?php echo e(url('orders')); ?>"> <i class="icon-logout"></i>Order </a>
                </li>

                <li>
                  <a href="<?php echo e(url('reservations')); ?>"> <i class="icon-logout"></i>Reservations </a>
                </li>

       
      </nav>
      <!-- Sidebar Navigation end--><?php /**PATH C:\Users\lakma\Desktop\laravel_project\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>