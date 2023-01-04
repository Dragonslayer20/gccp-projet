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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="post.css">
        <title>Requirement post</title>
    
    </head>
    <body >
        <?php require "nav.php" ; ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Student Login</title>
    <style>
      body{
        overflow-x: hidden;
      }
      h1{
        overflow: hidden;
      }
    </style>
</head>
<body>
    
<!----MAIN-->

<h1 class="display-5" style="position: relative; left: 28rem;" >About our Placement Cell</h1>
<p class="fs-5 px-5 mx-5">
    MCET has a dedicated Training & Placement Cell with committed Team Members who will make positive and profond impact on the way education is imparted in the country.
    <br>
    <br>
    The goal of the  T & P cell is to develop  students into integrated personalities with a blend of academics and to showcase their talent and  skills
</p><hr>
<h2  text-algin="Center"> Ongoing Placements </h2>
</body>
</html>
        
        <div class="post">
            <?php  
            require "../dbconnect.php";
            $sql = "select * from `buyers` where status=1";
            $result= mysqli_query($conn ,$sql) or die(mysqli_error($sql));
            while($data = mysqli_fetch_array($result)){
                $n = $data['buyername'];
                echo'  <div class="box">
                        <div class="head"><h3>'.$data['title'].'</h3></div>
                        <div class="content">
                            <div class="location">location :'.$data['location'].'</div>
                            <div class="view">
                                <a  href="getoutput.php?name='.$data['title'].'"><button  class="btn">
                                View</button></a>
                            </div>
                        </div>
                    </div>
                    ';
            }
            ?>
        </div>

        <div class="footer" style="position:center;">
            <center><h3>&copy aditya sabde 2022</h3></center>
        </div>
    </body>
</html>
