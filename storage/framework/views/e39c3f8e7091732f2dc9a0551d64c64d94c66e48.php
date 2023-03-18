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
         <form action="<?php echo e(route('user.profile.update',auth()->user()->id)); ?>" method="POST" enctype="multipart/form-data">

                <?php echo method_field('PUT'); ?>

                <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="height: 244px;">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="<?php echo e(asset("storage/image/".auth()->user()->image)); ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                            <div class="mt-3">
                                <h4><?php echo e(auth()->user()->name); ?></h4>
                            </div>

                        </div>
                        <hr class="my-4">

                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card"style="height: 244px;">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="<?php echo e(auth()->user()->name); ?>" name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="<?php echo e(auth()->user()->email); ?>" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="<?php echo e(auth()->user()->phone); ?>" name="phone">
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-sm-12">
                                  
                                  <button type="submit" class="btn btn-info" style="border-radius: 10px">Save Changes</button>
                                </div>
                              </div>
                        </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</div>







    <!-- My Trips -->

      
</div>

<!-- Package End -->
<?php echo $__env->make('publicUser.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<?php /**PATH C:\xampp\htdocs\yourTour\resources\views/publicUser/editProfile.blade.php ENDPATH**/ ?>