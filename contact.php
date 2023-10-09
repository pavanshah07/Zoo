<?php
require_once "config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
    $sql = "INSERT INTO `contact` (`name`, `email`, `subject`,`msg`) VALUES ('$name', '$email', '$subject','$msg')";
    $result = mysqli_query($link, $sql);

    if ($result) {
        echo "<script>alert('Contact Details Added Successfully')</script>";
    } else {
        echo "ERROR";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zoofari - Zoo & Safari Park Website Template</title>
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
    <?php include 'include/spinner.php' ?>
    <!-- Spinner End -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <?php include 'include/navbar.php' ?>
    </nav>
    <!-- Page Header Start -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">

        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">About Us</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Service</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Membership</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2"><span class="text-primary me-2">#</span>Address</p>
                            <h5 class="mb-0">123 Surat, Gujrat, India</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2"><span class="text-primary me-2">#</span>Call Now</p>
                            <h5 class="mb-0">+094 095 34435</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100 bg-light d-flex align-items-center p-5">
                        <div class="btn-lg-square bg-white flex-shrink-0">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2"><span class="text-primary me-2">#</span>Mail Now</p>
                            <h5 class="mb-0">juhisoni@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Contact Us</p>
                    <h1 class="display-5 mb-4">Have Any Query? Please Contact Us!</h1>
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" name="name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" name="email" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" name="subject" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-light border-0" name="msg" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29748.863958575133!2d72.86002605461117!3d21.247387839657023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1stravelo!5e0!3m2!1sen!2sin!4v1632808996485!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <?php include 'include/footer.php' ?>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <?php include 'js/lib.php' ?>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>