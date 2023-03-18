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

<div class="container my-5">

    <div class="card details-card p-0">
        

        <div class="row">

            <div class="col-md-6 col-sm-12">
                <?php $img=$data[0]['image2']?>
                
                <img class="img-fluid details-img" src="<?php echo e(URL::asset("storage/image/$img")); ?>" alt="" height="575px">
            </div>
            <div class="col-md-6 col-sm-12 description-container p-5">
                <div class="main-description">
                    <p class="product-category mb-0"><?php echo e($data[0]['category']); ?></p>
                    <h3><?php echo e($data[0]['name']); ?></h3>
                    <hr>
                    <p class="product-price"><?php echo e($data[0]['price']); ?> JD / <?php echo e($data[0]['guest_number']); ?> Person</p>
                    
                    <form action="<?php echo e(route('user.book',$data[0]['id'])); ?>" class="add-inputs" method="post">
                    <?php echo method_field('GET'); ?>
                        <?php echo csrf_field(); ?>
                        
                            <button name="add_to_cart" type="submit" class="btn btn-primary btn-lg">Book Now</button>
                        
                    </form>
                    <div style="clear:both"></div>

                    <hr>


                    <p class="product-title mt-4 mb-1">About this place</p>
                    <p class="product-description mb-4">
                        <?php echo e($data[0]['long_description']); ?>


                    </p>

                    <hr>

                </div>

            </div>
        </div>
        
        
        <!-- End row -->
    </div>
    </div>

<?php echo $__env->make('publicUser.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\yourTour\resources\views/publicUser/details.blade.php ENDPATH**/ ?>