<?php
session_start();
echo '<nav class="navbar fixed-top bg-body-tertiary" style="background-color: white !important;">
        <h4>FREE SHIPPING WORLDWIDE</h4>
        <div class="fluid">
            <a class="logomain" href="index.php"><img src="img/logo.png" alt=""></a>
            <div class="fluid-contain">
            
            
            ';
            
            if(isset($_SESSION['UserName']))
              echo "Welcome! ".$_SESSION['UserName'];
            else
              echo '<a href="login.php" ><i class="fa-solid fa-user-tie fa-xl"></i></a>';
            
            
            echo'
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.png" alt=""></h5>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  
                  <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                      <li class="nav-item">
                        <p><a class="nav-link active" href="index.php">Home</a></p>
                      </li>
                      <li class="nav-item">
                        <p><a class="nav-link active" href="shopAll.php">Shop</a></p>
                      </li>
                      <li class="nav-item">
                        <p><a class="nav-link active" href="aboutUs.php">About Us</a></p>
                      </li>';
                    if(isset($_SESSION['UserName']))
                      echo '<li class="nav-item">
                        <p><a class="nav-link active" href="extra/logout.php">Log Out</a></p>
                      </li>';
                      if(isset($_SESSION['UserName']))
                      echo '<li class="nav-item">
                        <p><a class="nav-link active" href="cart.php">My Cart</a></p>
                      </li>';
                    echo'</ul>
                </div>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar1" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabe"><img src="img/logo.png" alt=""></h5>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  
                  <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                      <li class="nav-item">
                        <p><a class="nav-link active" href="index.php">Home</a></p>
                      </li>
                      <li class="nav-item">
                        <p><a class="nav-link active" href="shopAll.php">Shop</a></p>
                      </li>
                      <li class="nav-item">
                        <p><a class="nav-link active" href="aboutUs.php">About Us</a></p>
                      </li>
                    </ul>
                </div>
            </div>
          </div>
          </div>
      </nav>';
?>