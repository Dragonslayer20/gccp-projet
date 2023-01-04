<?php
session_start();
// session start
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: login.php");
  exit;
};
?>

<!-- backend function toselet data insert data -->
<?php
     $showalert = false;
     $showerror = false;
     $date1 = date("d-m-Y");
     if($_SERVER['REQUEST_METHOD']=="POST"){
      require "../dbconnect.php";
      $title = $_POST['title'];
      $comment = $_POST['comment'];
      $industry = $_POST['industry'];
      $professional = $_POST['professional'];
      $location = $_POST['location'];
      $name= $_SESSION['username'];
      if($title != "" && $comment != "" && $industry != "" && $professional != "" && $location != ""){
          $sql = "INSERT INTO `buyers` VALUES(null,'$title','$comment',
          '$industry','$professional','$location','$date1','$name',1)" ; 
          $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
          if(!$result){
            mysqli_error($result);
          }
          else{
            $showalert = true;
          }
      }
      else{
         $showerror = true;
      }
    }    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="admin.css" rel="stylesheet">
    <title>Admin page</title>
</head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b> Admin Page</b> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="Admin.html"><strong> Home</strong></a>
                    <a class="nav-link" href="nsr.html"><strong>New Student Registration</strong></a>
                    <a class="nav-link" href="Placehub.html"><strong>Placement Hub</strong></a>
                    <a class="nav-link" href="logout.php"><strong>Logout</strong></a>
                </div>
            </div>
        </div>
    </nav>
    </style>
</head>
<body onload="swal">
  <?php
      if($showalert){
        echo '<script>
                swal("Good job!", "Your requirement are now posted", "success");
            </script>';
      }
  ?>
  <?php
      if($showerror){
        echo '<b><script>
                swal("OOPS!", "please fill all the information.", "warning");
              </script></b>';
      }
  ?>
  <?php include "nav.php";  ?>  
<!-- form  -->
  <div class="middle">
    <form action="post_requirement_form.php" method="post">
      <center><h2>Requirements</h2></center>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><b>Add Title for Your Quote Request</b></label>
        <input name ="title" type="varchar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Tell us more about your Requirements here</b></label>
        <textarea rows="3" cols="50" name="comment" >
         Enter text here...</textarea>
        <div id="emailHelp" class="form-text" style="position:right;">max 200 characters.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Add industry Tags related to your  Requirements</b></label>
        <input name="industry" type="varchar" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>How do you like to connect with Professionals?</b></label>
        <input name="professional" type="varchar" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><b>Your Locations</b></label>
        <input name="location" type="varchar" class="form-control" id="exampleInputPassword1">
      </div>
       <center><button id="submit" type="submit" class="btn btn-warning">Post Requirement Now</button></center>
    </form>
  </div>
<!-- footer -->
<div class="footer" style="position:center;">
    <center><h3>&copy aditya sabde 2022</h3></center>
</div>
</body>
</html>