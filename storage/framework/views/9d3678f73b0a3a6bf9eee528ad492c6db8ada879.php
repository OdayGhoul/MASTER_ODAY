<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>YourTour - Travel  </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

 

    <!-- Favicon -->
    <link href="users/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="users/lib/animate/animate.min.css" rel="stylesheet">
    <link href="users/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="users/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="users/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="users/css/style.css" rel="stylesheet">
    <style>
  
        .list-section {
  /* background-color: #f5f5f5; */
  padding: 10rem;
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
  color: #78B817;
  width: 80px;
  height: 80px;
  text-align: center;
  line-height: 70px;
  border: 5px #78B817 dotted;
  border-radius: 600px;
}
        </style>
</head>
<body>
<?php echo $__env->make('publicUser.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('active'); ?>
active
<?php $__env->stopSection(); ?>
    <!--  Hero Start -->
        <div class="container-fluid bg-primary py-5 mb-5 hero-header" style="height: 600px;">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown" style="color: red">Enjoy Your Vacation With Us </h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">When you can’t decide between two places, just go to both.</p>
                        
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <form action="<?php echo e(route('user.search')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" name="search" placeholder="Search...">
                                <button type="submit" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destinations</h6>
                <h1 class="mb-5">Recommended Destinations</h1>
            </div>
            <div class="row g-4 justify-content-around">
                 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <a class="col-lg-3 col-sm-4 wow fadeInUp" data-wow-delay="0.1s" href="<?php echo e(route('user.package.details',$value->id)); ?>">
                        <div class="card" style="width: 20rem;height: 25rem;">
                            <img class="card-img-top"  style="height: 15rem; padding: 0.5rem;" src="<?php echo e(asset("storage/image/".$value->image)); ?>" alt="Card image cap">
                            <div class="card-body">

                            <h3><?php echo e($value->name); ?></h3>
                            <p class="card-text"><?php echo e($value->description); ?></p>
                            </div>

                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
    <!-- Service End -->

     <!-- Destination Start -->
     <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="users/img/popularD1.png" alt="">
                                
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Jordan</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="users/img/popularD3.png" alt="">
                                
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Malaysia</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="users/img/popularD4.png" alt="">
                                
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Maldives</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="users/img/popularD2.png" alt="" style="object-fit: cover;">
                        
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Cyprus</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


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
	</div>



    <?php echo $__env->make('publicUser.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\master_p\resources\views/publicUser/home.blade.php ENDPATH**/ ?>