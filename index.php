<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
    header("location: login.php");
    exit;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Zoofari - Zoo & Safari Park Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include 'links/links.php' ?>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    
    <!-- Spinner End -->
    <!-- Header Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <?php include 'include/navbar.php' ?>
    </nav>
    <div class="container-fluid" >
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img src="img/lion.jfif" height="600px"  alt="">
                        <div class ="carousel-caption">
                        <b> <h1 class="text-secongary" style="color: blue;">Enjoy Wonderfull Day With Your Family...</h1></b>
                    </div>
                    </div>
                    <div class="owl-carousel-item">
                        <img src="img/co2.jpg" height="600px" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img src="img/parote.jpg" height="600px" alt="">
                    </div>
                </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- Header End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Welcome To Zoofari</p>
                    <h1 class="display-5 mb-4">Why You Should Visit <span class="text-primary">Zoofari</span> Park!</h1>
                    <p class="mb-4">The park offers unique encounters with their crash of Southern White Rhino, African Penguin, and sloth. Virginia Safari Park is also home to the King Cheetah, Africa's rarest cat. Conservation is fundamental in the Park's daily operations. To date, the park has supported conservation efforts in more than 130 countries.</p>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Free Car Parking</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Natural Environment</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Professional Guide & Security</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>World Best Animals</h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="about.php">Read More</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/pvn.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Our Clients Say!</h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/client1.jfif" style="width: 190px; height: 190px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>zoo is a One kind of Happiness....</p>
                        <h5 class="mb-1">Juhi Soni</h5>
                        <span class="fst-italic">DHMS</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/pavan.jpg" style="width: 190px; height: 190px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Save The Animals And Plants...</p>
                        <h5 class="mb-1">Pavan Shah</h5>
                        <span class="fst-italic">Devloper</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/my.jpeg" style="width: 190px; height: 190px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Never Harm A Zoo...</p>
                        <h5 class="mb-1">J. Soni</h5>
                        <span class="fst-italic">MBBS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <?php include 'include/footer.php' ?>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <?php include 'js/lib.php' ?>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>