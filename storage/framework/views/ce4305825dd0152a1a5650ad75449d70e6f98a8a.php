


<?php $__env->startSection('title'); ?>
welcome
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('Dashboard'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title_page'); ?>
welcome
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title_page2'); ?>
welcome
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <?php if($number_of_trips): ?>
              <h3>
                
                <?php echo e($number_of_trips); ?>

              </h3>
              <?php endif; ?>

              <p>Numbet of trips</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-plane-departure"></i>
            </div>
            <a href="<?php echo e(route('admin.trips.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo e($number_of_reservation); ?></h3>

              <p>Numer of reservation</p>
            </div>
            <div class="icon">
              <i class="ion fas fa-th"></i>
            </div>
            <a href="<?php echo e(route('admin.reservation.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo e($number_of_users); ?></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-users"></i>
            </div>
            <a href="<?php echo e(route('admin.users.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo e($number_of_message); ?></h3>

              <p>Number of message</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-message"></i>
            </div>
            <a href="<?php echo e(route('user.contact.show')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      
          <!-- /.card --> 
    </div>
    
   
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper kanban " style="margin: 0 !important;">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1>Kanban Board</h1>
        </div>
        
      </div>
    </div>
  </section>

  <section class="content pb-3">
    <div class="container-fluid h-80" >
      <div class="card card-row card-secondary">
        <div class="card-header">
          <h3 class="card-title">
            Backlog
          </h3>
        </div>
        <div class="card-body">
          <div class="card card-info card-outline">
            <div class="card-header">
              <h5 class="card-title">Create Labels</h5>
              <div class="card-tools">
                <a href="#" class="btn btn-tool btn-link">#3</a>
                <a href="#" class="btn btn-tool">
                  <i class="fas fa-pen"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox1" disabled>
                <label for="customCheckbox1" class="custom-control-label">Bug</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox2" disabled>
                <label for="customCheckbox2" class="custom-control-label">Feature</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled>
                <label for="customCheckbox3" class="custom-control-label">Enhancement</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox4" disabled>
                <label for="customCheckbox4" class="custom-control-label">Documentation</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox5" disabled>
                <label for="customCheckbox5" class="custom-control-label">Examples</label>
              </div>
            </div>
          </div>
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="card-title">Create Issue template</h5>
              <div class="card-tools">
                <a href="#" class="btn btn-tool btn-link">#4</a>
                <a href="#" class="btn btn-tool">
                  <i class="fas fa-pen"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox1_1" disabled>
                <label for="customCheckbox1_1" class="custom-control-label">Bug Report</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox1_2" disabled>
                <label for="customCheckbox1_2" class="custom-control-label">Feature Request</label>
              </div>
            </div>
          </div>
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="card-title">Create PR template</h5>
              <div class="card-tools">
                <a href="#" class="btn btn-tool btn-link">#6</a>
                <a href="#" class="btn btn-tool">
                  <i class="fas fa-pen"></i>
                </a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="card card-row card-primary">
        <div class="card-header">
          <h3 class="card-title">
            To Do
          </h3>
        </div>
        <div class="card-body">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="card-title">Create first milestone</h5>
              <div class="card-tools">
                <a href="#" class="btn btn-tool btn-link">#5</a>
                <a href="#" class="btn btn-tool">
                  <i class="fas fa-pen"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card card-row card-default">
        <div class="card-header bg-info">
          <h3 class="card-title">
            In Progress
          </h3>
        </div>
        <div class="card-body">
          <div class="card card-light card-outline">
            <div class="card-header">
              <h5 class="card-title">Update Readme</h5>
              <div class="card-tools">
                <a href="#" class="btn btn-tool btn-link">#2</a>
                <a href="#" class="btn btn-tool">
                  <i class="fas fa-pen"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
              <p>
             
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card card-row card-success">
        <div class="card-header">
          <h3 class="card-title">
            Done
          </h3>
        </div>
        <div class="card-body">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="card-title">Create repo</h5>
              <div class="card-tools">
                <a href="#" class="btn btn-tool btn-link">#1</a>
                <a href="#" class="btn btn-tool">
                  <i class="fas fa-pen"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


     
      </div>
      <!-- /.row (main row) -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\master_p\resources\views/admin/index.blade.php ENDPATH**/ ?>