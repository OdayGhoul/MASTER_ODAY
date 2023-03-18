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
                <img class="img-fluid details-img" src="/users/img/Candi_Resort.png" alt="">
            </div>
            <div class="col-md-6 col-sm-12 description-container p-5">
                <div class="main-description">
                    <p class="product-category mb-0">Bali</p>
                    <h3>Candi Resort</h3>
                    <hr>
                    <p class="product-price">00. $</p>
                    
                    <form action="<?php echo e(route('user.book',1)); ?>" class="add-inputs" method="post">
                        
                            <button name="add_to_cart" type="submit" class="btn btn-primary btn-lg">Book Now</button>
                        
                    </form>
                    <div style="clear:both"></div>

                    <hr>


                    <p class="product-title mt-4 mb-1">About this place</p>
                    <p class="product-description mb-4">
                        Welcome to the Candi Resort to escape from the hustle and bustle, and embrace the tranquility.
                        Nestled along a private beach in Mendira Bay, Candi Beach Resort & Spa features 3 outdoor pools including an infinity pool and free Wi-Fi. It offers a variety of water sports including sailing and scuba diving. Three restaurant and two bars are available

Rooms each have a balcony or terrace with views of the garden or pool. Decorated with Balinese touches, rooms have a minibar and tea and coffee-making facilities. A safety deposit box and hairdryer are provided.

Candi Beach Resort & Spa is 50 km from Denpasar and an approximately 1 hour 15 minute-drive from Ngurah Rai International Airport.

                    </p>

                    <hr>

                    






                </div>




            </div>
        </div>
        <!-- End row -->
    </div>
    </div>

<?php echo $__env->make('publicUser.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\project_yourtour\resources\views/publicUser/details.blade.php ENDPATH**/ ?>