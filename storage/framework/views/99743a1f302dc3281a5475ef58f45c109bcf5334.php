


<?php $__env->startSection('title'); ?>
Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href=".<?php echo e(asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section_title'); ?>
Edit  trips
<?php $__env->stopSection(); ?>


<?php $__env->startSection('Trips'); ?>
active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page1'); ?>
admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page2'); ?>
edit trips
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
 <!-- /.row -->
 <div class="row container m-auto">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?php echo e(route('admin.trips.update',$data->id)); ?>" method="POST" enctype="multipart/form-data">

                <?php echo method_field('PUT'); ?>

                <?php echo csrf_field(); ?>

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="trip_name" value="<?php echo e($data->name); ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail11">Short description</label>
                  <input type="text" class="form-control" id="exampleInputEmail11" name="short_description" value="<?php echo e($data->short_description); ?>" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail11">Long description</label>
                  <input type="text" class="form-control" id="exampleInputEmail11" name="long_description" value="<?php echo e($data->long_description); ?>" placeholder="Enter Long description" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Guest number</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="guest_number" placeholder="Enter guest number" value="<?php echo e($data->guest_number); ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="trip_price" placeholder="Enter price" value="<?php echo e($data->price); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleSelectRounded0">Category <code></code></label>
                    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="select">
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                          <input id="trip_image" type="file" name="trip_image" placeholder="Upload Image" value="<?php echo e(old('trip_image')); ?>" ><br><br>

                        
                        
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yourTour\resources\views/admin/tripsTable/edit.blade.php ENDPATH**/ ?>