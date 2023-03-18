<style>
    .navbar  {
        background-color: #14141F;
    }
</style>
<?php echo $__env->make('publicUser.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="main-body">
    <h3>User profile</h3>
    <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('success')); ?>

    </div>
<?php endif; ?>

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body" style="height: 240.6px;">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo e(asset("storage/image/".auth()->user()->image)); ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo e(auth()->user()->name); ?></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo e(auth()->user()->name); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo e(auth()->user()->email); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo e(auth()->user()->phone); ?>

                    </div>
                  </div>
                  <hr>


                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-success " style="background-color:#78B817; border:#78B817 ;border-radius:10px;" href="<?php echo e(route('user.profile.edit',auth()->user()->id)); ?>" style="border-radius: 10px">Edit</a>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>

        </div>
    </div>







    <!-- My Trips -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3"></h6>
            <h1 class="mb-5">My Trips</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
            <div class="col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        
                        <img class="img-fluid" src="<?php echo e(asset("storage/image/".$value['trip_image'])); ?>" alt="">
                        
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2" style="min-height: 58px;justify-content: center;display: flex;align-items: center;"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo e($value['trip']); ?></small>
                        
                    </div>
                    <div class="text-center p-4" style="min-height: 277px;">
                        <h3 class="mb-0"><?php echo e($value['price']); ?> Jd</h3>

                        <p>Date : <?php echo e($value['res_date']); ?></p>
                        <p>number_of_guest : <?php echo e($value['number_of_guest']); ?></p>
                        <p>status : <?php echo e($value['status']); ?></p>
                        
                           <?php    $date1=date_create(  $value['res_date'] );
                                    $date2=date_create(now());
                                    $diff=date_diff($date2,$date1);
                                    // dd($diff->format("%d%"));
                                    ?>
                        <?php if($diff->format("%d%")<3): ?>
                        <p style="color: red"> <small>Edit time is up</small> </p>
                        <?php endif; ?>
                        <div class="d-flex justify-content-center mb-2" style="max-height: 31px ">



                            <?php if($diff->format("%d%")>=3): ?>
                            <a href="<?php echo e(route('user.book.edit',$value['id'])); ?>" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Edit</a>
                            <?php endif; ?>
                            <?php if($diff->format("%d%")<3): ?>
                            <a href="<?php echo e(route('user.book.edit',$value['id'])); ?>" class="btn btn-sm bg-gradient-secondary px-3 border-end" style="border-radius: 30px 0 0 30px;pointer-events: none;background-color:gray;color:white;">Edit</a>
                            <a href="<?php echo e(route('user.profile.destroy',$value['id'])); ?>" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0; background-color:rgb(226, 42, 42);;pointer-events: none; border-color:rgb(226, 42, 42);">Delete</a>

                            <?php endif; ?>


                            <?php if($diff->format("%d%")>=3): ?>
                            <form action="<?php echo e(Route('user.profile.destroy',$value['id'])); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger btn-flat show_confirm" style="border-radius: 0 30px 30px 0; background-color:rgb(226, 42, 42); border-color:rgb(226, 42, 42);" data-toggle="tooltip" title='Delete'>Delete</button>

                                
                            </form>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>
</div>

<!-- Package End -->
<?php echo $__env->make('publicUser.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>





<?php /**PATH C:\xampp\htdocs\yourTour\resources\views/publicUser/profile.blade.php ENDPATH**/ ?>