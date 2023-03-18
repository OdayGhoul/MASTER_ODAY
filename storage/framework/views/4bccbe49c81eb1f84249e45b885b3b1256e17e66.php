  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo e(asset('assets/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('assets/img/icon.png')); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php echo e(Auth::user()->name); ?>

        </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo e(route('admin.index')); ?>" class="nav-link <?php echo $__env->yieldContent('Dashboard'); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.users.index')); ?>" class="nav-link  <?php echo $__env->yieldContent('User'); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.categories.index')); ?>" class="nav-link  <?php echo $__env->yieldContent('Category'); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Category
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.trips.index')); ?>" class="nav-link  <?php echo $__env->yieldContent('Trips'); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Trips
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.reservation.index')); ?>" class="nav-link  <?php echo $__env->yieldContent('Reservations'); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Reservations
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('admin.users.index')); ?>" class="nav-link  <?php echo $__env->yieldContent('Profile'); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profile
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('logout')); ?>" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">logout</p>
            </a>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php /**PATH C:\xampp\htdocs\project_yourtour\resources\views/admin/layouts/main-sidebar.blade.php ENDPATH**/ ?>