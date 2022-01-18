<?php
$loggedin = true;
// check here the session is logged in or not
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    $loggedin= false;
  }
//  here we declare navigation of admin portal
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color:white;">
         <div class="container-fluid">
             <h4>Welcome </h4>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>';
   
                if($loggedin == false){
                  echo'
                    <li class="nav-item">
                      <a class="nav-link" href="buyerslogin.php">Buyers login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="sellerlogin.php">Sellers login</a>
                    </li>
                  ';
               }
                if($loggedin == true){
                  echo '<li class="nav-item">
                          <a class="nav-link" href="../adminlogout.php" id="navbar" role="button">
                            logout
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="totalseller.php">sellers</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="totalpost.php">Total posts</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="totalbuyer.php">Buyers</a>
                        </li>
                  ';
                 }
                echo '</ul>
            </div>
         </div>
        </nav>';


?>