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
            <div>
         
            </div>
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
                  ?>" href="show.php" class="text-dark"><b>Contact</b>&nbsp; &nbsp;
                 <a  href="logout.php" class="text-dark"><b>Log-out</b></a>
                </div>
            </div>
</div>
    </div>
    <h1 class="text-center text-dark">Welcome to Admin</h1>
    <!-- Section Start -->
    <div style="margin: 50px 0 0 50px;">
        <form action="addproduct.php">
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>

    <!-- end -->

    <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
        <table class="table table-hover">
            <thead class="text-danger">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width: 200px;">Birds & Animals Name</th>
                    <th scope="col">Birds & Animals Image</th>
                    <th scope="col">Opertion</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "select * from `product`";
                $result = mysqli_query($link,$sql);
                if($result){

                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $pname=$row['pname'];
                        $pimage=$row['pimage'];

                        echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$pname.'</td>
                            <td><img src="./image/'.$pimage.'" style="width: 15%;"/></td>
                            <td style="display: flex;gap: 10px; padding-bottom:100px; padding-top:21px;">
                                <form action="update.php" method="post">
                                    <input type="hidden" name=id value='.$id.'>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </form>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name=id value='.$id.'>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
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