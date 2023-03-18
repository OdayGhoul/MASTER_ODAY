


<?php $__env->startSection('title'); ?>
Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href=".<?php echo e(asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section_title'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('Profile'); ?>
active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page1'); ?>
admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page2'); ?>
Profile
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

 <!-- /.row -->
 <div class="row container-fluid m-auto" style="text-align: center;">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Admin controls</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 90px;">




                <a href="<?php echo e(route('admin.users.create')); ?>"><button type="button" class="btn btn-block bg-gradient-primary btn-sm">Add admin</button></a>


              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0 "  style="height: 300px;">
          <table class="table table-head-fixed text-nowrap" style="justify-content: center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                
                
                
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($value->is_admin==1): ?>
                <tr>
                    <td><?php echo e($value->id); ?></td>
                    <td><?php echo e($value->name); ?></td>
                    <td><?php echo e($value->email); ?></td>
                    <td><?php echo e($value->phone); ?></td>
                    
                    

                    

                </tr>

                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->

          <?php $__env->stopSection(); ?>

          <?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src=".<?php echo e(URL::asset('assets/plugins/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yourTour\resources\views/admin/profile/show.blade.php ENDPATH**/ ?>