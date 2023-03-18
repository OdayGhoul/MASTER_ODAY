<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
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
</head>
<body>
<?php echo $__env->make('publicUser.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  Hero Start -->
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With </h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">When you can’t decide between two places, just go to both.</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
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
                <h1 class="mb-5">Our Destinations</h1>
            </div>
            <div class="row g-4">
                <a class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" href="<?php echo e(route('user.package.details')); ?>">
                    <div class="service-item rounded pt-3 " id="card1">
                        <div class="p-4">

                            <i class="fa fa-3x fa-sharp fa-solid fa-sparkles text-primary mb-4"></i>
                            <h5>Bali</h5>
                            <p>There is no other place like Bali in this world. A magical blend of culture</p>
                        </div>
                    </div>
                </a>
                <a class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s" href="#">
                    <div class="service-item rounded pt-3" id="card2">
                        <div class="p-4">

                            <i class="fa fa-3x fa-sharp fa-solid fa-sparkles text-primary mb-4"></i>
                            <h5>Turkey</h5>
                            <p>Turkey is famous for the Blue Mosque, the New Mosque, the Hagia Sophia</p>
                        </div>
                    </div>
                </a>
                <a class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s" href="#">
                    <div class="service-item rounded pt-3" id="card3">
                        <div class="p-4">

                            <i class="fa fa-3x fa-sharp fa-solid fa-sparkles text-primary mb-4"></i>
                            <h5>Egypt</h5>
                            <p>Egypt has one of the longest histories of any country, tracing its heritage along the Nile Delta</p>
                        </div>
                    </div>
                </a>
                <a class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s" href="#">
                    <div class="service-item rounded pt-3" id="card4">
                        <div class="p-4">

                            <i class="fa fa-3x fa-sharp fa-solid fa-sparkles text-primary mb-4"></i>
                            <h5>Malaysia</h5>
                            <p>Malaysia has a multi-ethnic, multicultural, and multilingual society.</p>
                        </div>
                    </div>
                </a>
                <a class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" href="#">
                    <div class="service-item rounded pt-3" id="card5">
                        <div class="p-4">

                            <i class="fa fa-3x fa-sharp fa-solid fa-sparkles text-primary mb-4"></i>
                            <h5>Maldives</h5>
                            <p>Maldives is largely flat and has no land features such as hills or rivers, but some islands have dunes</p>
                        </div>
                    </div>
                </a>
                <a class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s" href="#">
                    <div class="service-item rounded pt-3" id="card6">
                        <div class="p-4">

                            <i class="fa fa-3x fa-sharp fa-solid fa-sparkles text-primary mb-4"></i>
                            <h5>Lebanon</h5>
                            <p> It is part of the Levant region of the Middle East. Lebanon is home to roughly five million people </p>
                        </div>
                    </div>
                </a>
                <a class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s" href="#">
                    <div class="service-item rounded pt-3" id="card7">
                        <div class="p-4">

                            <i class="fa fa-3x fa-sharp fa-solid fa-sparkles text-primary mb-4"></i>
                            <h5>Jordan</h5>
                            <p>the geography offered makes Jordan an attractive tourism destination.</p>
                        </div>
                    </div>
                </a>
                <a class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s" href="#">
                    <div class="service-item rounded pt-3" id="card8" >
                        <div class="p-4">
                            <i class="fa fa-3x fa-sharp fa-solid fa-sparkles text-primary mb-4"></i>
                            <h5>Cyprus</h5>
                            <p>it is the 40th most popular destination in the world and the 6th most popular per capita of local </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Service End -->

     <!-- Destination Start -->
     <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
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



    <?php echo $__env->make('publicUser.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\project_yourtour\resources\views/publicUser/home.blade.php ENDPATH**/ ?>