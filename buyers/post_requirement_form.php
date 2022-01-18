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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post_requirement_form</title>
    <style>
     .middle {
        margin: 2%;
        margin-left: 30%;
        margin-right: 28%;
        padding: 3%;
        border-radius: 33px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    }
    .middle h2{
      padding-bottom:4%;
      text-decoration:underline;
    }
    .btn{
        width:300px;
        height:40px;
    }
    b{
        font-size: 17px;
    }
    .header{
        display: flex;
        justify-content: space-between;
        margin-right: 6%;
        margin-left: 6%;
        margin-top: 2%;

    }
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
  <div class="header">
    <h5>user side </h5>
    <h5>Logged in</h5>
  </div>
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