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
        <h1 class="display-4 text-white mb-3 animated slideInDown">Service</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">About Us</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">service</li> 
                    <li class="breadcrumb-item"><a class="text-white" href="#">Membership</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Contact</a></li>
            </ol>
        </nav>
    </div>
</div>
    <!-- Page Header End -->
    <section class="shop_section layout_padding unactive" id="btn-a4">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 class="text-center text-primary">Different Types of Birds & Animals Picture </h2>
      </div>
      <div class="row" id="row4">




        <?php
          require_once "config.php";

          $sql = "select * from `product`"; 
          $result = mysqli_query($link,$sql);
          if($result){

            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
              $pimage=$row['pimage'];
              $pname=$row['pname'];

              echo '<div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="box">
                          <div class="img-box">
                            <input type="hidden" name="id" value="'.$id.'"/>
                            <img src="./image/'.$pimage.'" alt="gggg" width="80%" height="300px">
                          </div>
                          <div class="detail-box text-center">
                           <b> <h6 class="  text-danger">'.$pname.'</h6></b>
                          </div>
                      </div>
                    </div>';
            }
          }
        ?>
      </div>




      <!-- Visiting Hours Start -->
      <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">Visiting Hours</h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>Monday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Tuesday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Wednesday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Thursday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Friday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Saturday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-white mb-5">Contact Info</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Office</td>
                                <td>123 Surat, Gujrat, India</td>
                            </tr>
                            <tr>
                                <td>Zoo</td>
                                <td>123 Surat, Gujrat, India</td>
                            </tr>
                            <tr>
                                <td>Ticket</td>
                                <td>
                                    <p class="mb-2">+094 095 34435</p>
                                    <p class="mb-0">Zoofari@gmail.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Support</td>
                                <td>
                                    <p class="mb-2">+012 345 6789</p>
                                    <p class="mb-0">juhisoni@gmail.com</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Visiting Hours End -->
 <!-- Service Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Services</p>
                    <h1 class="display-5 mb-0">Special Services For <span class="text-primary">Zoofari</span> Visitors</h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Call for more info</p>
                            <h2 class="text-white mb-0">+094 095 34435</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="img/icon/icon-2.png" alt="Icon">
                    <h5 class="mb-3">Car Parking</h5>
                    <span>The car park is open during the opening hours of the shopping centre.
The car park is available free of charge on weekends, and during the week it is covered by a special offer for visitors to the Garden – parking fee is waived upon presentation of a ticket to the Zoological Garden in the Parking Office.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="img/icon/icon-3.png" alt="Icon">
                    <h5 class="mb-3">Animal Photos</h5>
                    <span>Try not to shoot on very bright sunny days; overcast days are the best for photographing at the zoo, and so are "off weather" days because many animals thrive when it's snowy or rainy, even if people don't.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="img/icon/icon-4.png" alt="Icon">
                    <h5 class="mb-3">Guide Services</h5>
                    <span>1. Daily inspections of animals and documentation
                    2. Preparation of food for animals
                    3. Cleaning of exhibits and food prep areas
                    4. Behavior enrichment
                    5. Educational tours and public presentations.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="img/icon/icon-5.png" alt="Icon">
                    <h5 class="mb-3">Food & Beverages</h5>
                    <span>Trailhead Snacks (Central Plaza) Growlers Pizza and Beer (Elephant Plaza) Elephant Ears (South window at Growlers Pizza) Dippin' Dots and Churros (Elephant Plaza) Rainforest Snacks (Rainforest Plaza) Coffee Crossing (Discovery Plaza) Black Rhino (Entrance to Aviary Cafe)</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
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