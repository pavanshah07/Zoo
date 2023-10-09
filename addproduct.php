<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
    header("location: login.php");
    exit;
}

require_once "config.php";
// Check connection
if(isset($_POST['upload'])){

if(!empty($_POST['pname'])  && !empty($_FILES['pimage']['name'])){

    $filename = $_FILES['pimage']['name'];
    $tempname = $_FILES['pimage']['tmp_name'];
    $folder = "./image/".$filename;

    $pname = $_POST['pname'];
    

    $query = "insert into product(pname,pimage) values('$pname','$filename')";
    $run = mysqli_query($link,$query);

    if(move_uploaded_file($tempname,$folder)){
        echo '
            <script type = "text/javascript">
	            alert("New Images Added Successfully");
				window.location = "admin.php";
			</script>
		  ';
    }
    else{
        echo "fkjtggfhg";
    }

    // header("location:product.php");
}
else{
  echo '
			<script type = "text/javascript">
				alert("All Fields Are Required");
				window.location = "contact.php";
			</script>
		';

}
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>RADHE JEWELLERS</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style");
    }
</script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
    </style>

</head>

<body>

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
                  ?>" href="admin.php" class="text-dark"><b>Admin-Dashboard</b>&nbsp; &nbsp;
                  <a  href="logout.php" class="text-dark"><b>Log-out</b></a>
                </div>
            </div>
</div>
    </div>
    <h1 class="text-center text-primary">Add a Birds & Animals Picture.</h1>
    <form style="width: 50%; margin-top: 50px;" class="container" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-primary">Birds Or Animals Name</label>
            <input type="text" class="form-control" id="pname" name="pname" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="pimage" class="form-label text-primary">Choose Image</label>
            <input type="file" class="form-control" id="pimage" name="pimage" value="">
        </div>
        <button type="submit" class="btn btn-danger" name="upload">Submit</button>
    </form>

    </main>
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
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>

</body>

</html>