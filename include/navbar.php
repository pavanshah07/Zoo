<!-- Navbar Start -->
        <a href="index.php" class="navbar-brand p-0">
            <img class="img-fluid me-19" src="img/logo1.jfif" alt="Icon">
            <h1 class="m-0 text-primary">Zoofari</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-10 py-lg-0" id="navbarCollapse">
        <?php $page=basename($_SERVER['PHP_SELF']); ?>
            <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link <?php if($page == 'index.php'):echo 'active';endif; ?>">Home</a>
                <a href="about.php" class="nav-item nav-link <?php if($page == 'about.php'):echo 'active';endif; ?>">About</a>
                <a href="service.php" class="nav-item nav-link <?php if($page == 'service.php'):echo 'active';endif; ?>">Services</a>
                <a href="membership.php" class="nav-item nav-link <?php if($page == 'membership.php'):echo 'active';endif; ?>">Membership</a>
                <a href="contact.php" class="nav-item nav-link <?php if($page == 'contact.php'):echo 'active';endif; ?>">Contact</a>
            </div>
            <a href="register.php" class="btn btn-primary">Register</a>&nbsp; &nbsp; &nbsp;
            <a style="<?php 
                
                $username = $_SESSION["username"]; 
                if($username=='admin'){ 
                  echo 'display: block;' ; 
                }
                else
                {
                  echo  ""; 
                  }
                  ?>" <a class="btn btn-primary" href="logout.php">Log-out</a>
        </div>
    <!-- Navbar End -->