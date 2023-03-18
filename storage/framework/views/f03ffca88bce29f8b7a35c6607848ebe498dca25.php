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

<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3"></h6>
            <h1 class="mb-5">Our Packages</h1>
        </div>
        <div class="row g-4 justify-content-center">

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="package-item">
                    <div class="overflow-hidden">

                        <?php $img=$value['image']?>

                        <img class="img-fluid" src="<?php echo e(URL::asset("storage/image/$img")); ?>" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo e($value['category']); ?></small>
                        
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0"><?php echo e($value['price']); ?> JD / <?php echo e($value['guest_number']); ?> Person</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p style="min-height: 95px;"><?php echo e($value['short_description']); ?></p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="<?php echo e(route('user.trip.details',$value['id'])); ?>" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="<?php echo e(route('user.book',$value['id'])); ?>" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
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
<?php /**PATH C:\xampp\htdocs\master_p\resources\views/publicUser/bali.blade.php ENDPATH**/ ?>