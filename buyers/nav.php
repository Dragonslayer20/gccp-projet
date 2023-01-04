<?php
// here we check session strat or not
$loggedin = false;
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    $loggedin= true;
  }
 
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color:white;">
      <div class="container-fluid">
        <h4>Welcome </h4>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>';
            if($loggedin == true){
            echo'
              <li class="nav-item">
                <a class="nav-link" href="sellerlogin.php">Sellers login</a>
              </li>
            ';
            }
            if($loggedin == false){
              echo 
                    '</li>
                    <li class="nav-item">
                      <a class="nav-link" href="student.php">Enrolnment</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="post_requirement_form.php">placement hub</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../buyerslogout.php" id="navbar" role="button">
                        logout
                      </a>
                  ';
            }
            echo '</ul>
   
        </div>
     </div>
</nav>';


?>