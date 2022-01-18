<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: login.php");
  exit;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- we use css here to give style to our html -->
    <style>
        .middle{
            margin: 5%;
            margin-top:3%;
            padding: 5%;
            padding-right: 16%;
            padding-left: 16%;
        }
        #head{
            font-size: 27px;
             padding: 3%;
             text-decoration:underline;
        }
    </style>
</head>
<body>
  <!-- here we get navigation bar by php -->
    <?php require "nav.php"; ?>
   <!-- table content -->
  <div class="middle">
    <center id="head">Total Buyers</center>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">sr no.</th>
          <th scope="col"> Username</th>
          <th scope="col">Email</th>
          <th scope="col">Phone no.</th>
        </tr>
      </thead>
      <tbody>
        <?php  
        // we use here php for getting data fron database
          require "../dbconnect.php";
          $sql = "select * from `signup`";
          $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            while($record = mysqli_fetch_array($result)){ 
              echo'
                <tr>
                <th scope="row">'.$record['id'].'</th>
                  <td>'.$record['username'].'</td>
                  <td>'.$record['email'].'</td>
                  <td>'.$record['phoneno'].'</td>
                </tr>';    
            }
        ?>
      </tbody>
   </table>
  </div> 
  <!-- footer for copyright-->
  <div class="footer" style="position:center;">
    <center><h3>&copy aditya sabde 2022</h3></center>
  </div>

</body>
</html>