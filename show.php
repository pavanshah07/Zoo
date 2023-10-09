<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
    header("location: login.php");
    exit;
}
include "config.php";
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
     <!-- Topbar Start -->
     <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
     <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start" style="display:flex">
            <img src="img/admin.jpg" width="100px" height="80px">
              <small class="fa fa-home ext-dark  me-2"></small>
           <h3> <a class="text-dark">Admin Dashboard</a> &nbsp; &nbsp;<h3>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <a style="<?php 
                
                $username = $_SESSION["username"]; 
                if($username=='admin'){ 
                  echo 'display: block;' ; 
                }
                else
                {
                  echo 'display: none;' ; 
                  }
                  ?>"href="admin.php" class="text-dark"><b>Admin-Dashboard</b>&nbsp; &nbsp;
                  <a  href="logout.php" class="text-dark"><b>Log-out</b></a>
                </div>
            </div>
</div>
    </div>

    <!-- end -->
    <h1 class="text-center text-dark"> Contact Details. </h1>

    <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
        <table class="table table-hover">
            <thead class=" text-danger">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" style="width: 200px;"> Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "select * from `contact`";
                $result = mysqli_query($link,$sql);
                if($result){

                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $subject=$row['subject'];
                        $msg=$row['msg'];

                        echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$subject.'</td>
                            <td>'.$msg.'</td>
                        </tr>';
                    }
                }
            ?>

            </tbody>
        </table>
    </div>
 <div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <!-- Footer Start -->
<div class="container py-0">
    <div class="row g-5">
        
        <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Quick Links</h5>
            <a class="btn btn-link" href="index.php">Home</a>
            <a class="btn btn-link" href="about.php">About Us</a>
            <a class="btn btn-link" href="service.php">Our Services</a>
            <a class="btn btn-link" href="contact.php">Contact Us</a>
        </div>
        <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Popular Links</h5>
            <a class="btn btn-link" href="animal.php">Our Animal</a>
            <a class="btn btn-link" href="membership.php">Membership</a>
            <a class="btn btn-link" href="visiting.php">Visiting Hours</a>
            <a class="btn btn-link" href="testimonial.php">Testimonial</a>
        </div>
        <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Address</h5>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 SURAT, GUJRAT, INDIA</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+094 095 34435</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>zoofari@gmail.com</p>
        </div>
        <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Enquiry</h5>
            <p>If You Any Query ..So Contact Now Please</p>
            <a class="btn btn-link" href="contact.php">Contact Us</a>
        </div>
        
    </div>
</div>

<!-- Footer End -->
    </div>
   <!-- footer section -->
   <footer class="footer_section">
        <div class="container">
            <p class="text-danger">
             <b>   Copyright ©2023 All rights reserved | Made By @Juhi Soni </b>
            </p>
        </div>
    </footer>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <?php include 'js/lib.php' ?>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>