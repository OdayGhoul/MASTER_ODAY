


<?php $__env->startSection('title'); ?>
Trips
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section_title'); ?>
Trips Table
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href=".<?php echo e(asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('Trips'); ?>
active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page1'); ?>
admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page2'); ?>
Trips
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
 <!-- /.row -->

 <div class="row container-fluid m-auto" >
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Trips controls</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 100px;">

                

         <a href="<?php echo e(route('admin.trips.create')); ?>"><button type="button" class="btn btn-block bg-gradient-primary btn-sm">Add new trip</button></a>

              
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Short description</th>
                <th>Long description</th>
                <th>image</th>
                <th>Category</th>
                <th>Guest number</th>
                <th>price</th>
                <th>edit</th>
                <th>delete</th>
              </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                <tr>
                    <td><?php echo e($value['id']); ?></td>
                    <td><?php echo e($value['name']); ?></td>
                    <td style="border:none;overflow-x:scroll;max-width:300px"><?php echo e($value['short_description']); ?></td>
                    <td style="border:none;overflow-x:scroll;max-width:300px"><?php echo e($value['long_description']); ?></td>
                    

<?php $img=$value['image']?>

                    <td><img src="<?php echo e(URL::asset("storage/image/$img")); ?>" alt="" style="width: 75px"></td>
                    <td><?php echo e($value['category']); ?></td>
                    <td><?php echo e($value['guest_number']); ?></td>
                    <td><?php echo e($value['price']); ?></td>
                    <td><a href="<?php echo e(Route('admin.trips.edit',$value['id'])); ?>"><button type="button" class="btn btn-block bg-gradient-success btn-sm">Edit</button>
                    </a></td>
                    <td>
                        <form action="<?php echo e(Route('admin.trips.destroy',$value['id'])); ?>" method="post">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                        </form>
                    </td>

                </tr>

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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\master_p\resources\views/admin/tripsTable/show.blade.php ENDPATH**/ ?>