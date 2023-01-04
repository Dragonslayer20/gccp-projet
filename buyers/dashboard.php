<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location:../sellerlogin.php");
  exit;
};
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
      .middle {
    margin: 9%;
    padding-right: 5%;
    padding-left: 13%;
    margin-top: 5%;
    }
    .middle h2{
        margin-left: 25%;
        padding-bottom: 10%;
    }
    .header{
        display: flex;
        justify-content: space-between;
        margin-right: 6%;
        margin-left: 6%;
        margin-top: 2%;

    }
    #mybtn{ 
      border-radius:25px;
      padding:6px;
    }
    
    </style>
</head>
<body>
<?php include "nav.php";  ?>  
<div class="middle">
<h2>Posted requirements</h2>
<table  class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Industry</th>
      <th scope="col">Posted date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <hr>
  <tbody>
   <?php 
   $name = $_SESSION['username'];
    require "../dbconnect.php";

   $sql = "select * from `buyers` where buyername='$name'";
   $result = mysqli_query($conn,$sql) or die(mysqli_error($sql));
   while($data = mysqli_fetch_array($result)){

    $sql1 = "select * from `".$_SESSION['username']."buyer` where title = '".$data['title']."'";
    $result1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result1);

    echo' 
    <tr>
      <td>'.$data['title'].'</td>
      <td>'.$data['date'].'</td>
     
      <td id=status><b>
         ';

         if($data['status'] == 1){
           echo "<a style='text-decoration:none;' id='mybtn' class='btn btn-success ' href='statusoperation.php?title=".$data['title']."&status=0'>Active</a>";
         }
         else{
           echo "<a style='text-decoration:none;' id='mybtn' class='btn btn-danger' href='statusoperation.php?title=".$data['title']."&status=1'>Inactive</a>";
         }
      
      echo '</b></td>
      <td><a href="viewpost.php?title='.$data['title'].'"><button class="btn btn-primary">view</button ></a> <a href="response.php"><button class="btn btn-primary">'.$count.' response</button></a></td>
    </tr>
    ';
   }
?>
  </tbody>
</table>
</div>
</body>
</html>