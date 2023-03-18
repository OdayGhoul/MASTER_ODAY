
<style>
    .navbar  {
        background-color: #14141F;
    }
    .mb-41{
        color: #14141F;
        font-size: 18px;
        font-weight: 500;
    }
    .list-section {
  /* background-color: #f5f5f5; */
  padding-top: 10rem;
  /* height: 10rem; */
}

.list-box {
  overflow: hidden;
  letter-spacing: 0.5px;
 
}

.list-box .content h3 {
  display: block;
  line-height: 22px;
  font-size: 18px;
  margin-bottom: 4px;
}

.list-box .content p {
  margin-bottom: 0px;
  opacity: 0.75;
}

.list-box .list-icon i {
  display: block;
  font-size: 35px;
  margin-right: 15px;
  color: #79ba17;
  width: 80px;
  height: 80px;
  text-align: center;
  line-height: 70px;
  border: 5px #78B817 dotted;
  border-radius: 600px;
}
</style>

<?php echo $__env->make('publicUser.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>
<br>
<br>
<br>
<!-- About Start -->
<div class="container-xxl py-5" >
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="/users/img/about2.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3 mt-4">About Us</h6>
                <h1 class="mb-4">Welcome to <span class="text-primary">PETRA</span></h1>
                <p class="mb-41"><span class="text-primary">Diversity</span> of our products allows the customer to choose between the economic to luxury fixed and tailor made packages, flights, hotels, land transfers and sightseeing.<br><br>

                    <span class="text-primary">Our vision </span>is to strengthen our position as a  tourism company, making travelling affordable for everyone, creating a unique experience for all of our clients, raising the quality standards of our travel and tourism services and making the booking process easier and more efficient.<br>
                    
                    With a mission to make travel and tourism affordable to everyone together with the high quality of services</p>
                
                <p class="mb-41"><span class="text-primary">Reconnect</span> with yourself and take time away from your hectic life.<br>Book one of our special offers  today and take a tour you will remember forever!</p>
                <p class="mb-41"><span class="text-primary"> perfect destinations </span> are offered to book your next holiday or get-away. From well-being to sports, adventures, sun, sea and  holiday breaks,Check out some of our latest special offers</p>

            </div>
        </div>
    </div>
</div>
<div class="list-section pt-80 pb-80" >
    <div class="container">

        <div class="row" style="margin-left:70px;">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="content">
                        <h3>Pick-up Service</h3>
                        <p>Pick-up and drop-off services available</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="content">
                        <h3>24/7 Support</h3>
                        <p>Get support all day</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-box d-flex justify-content-start align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="content">
                        <h3>Refund</h3>
                        <p>Get refund if any of our services didn't come-up to standards</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

        
            
<!-- About End -->
<br>
<br>
<br>
<br>
<br>
<?php echo $__env->make('publicUser.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\master_p\resources\views/publicUser/about.blade.php ENDPATH**/ ?>