<?php
// session start iin buyer sesction
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: ../sellerlogin.php");
  exit;
};
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="congo.css">
        <title>congo</title>
        <style>
            /* styling to our html page */
            .box {
                margin: 7%;
                margin-left: 17%;
                margin-right: 19%;
                padding: 1%;
                border-radius: 1%;
                box-shadow: 1px 2px 3px 4px rgb(20 20 20 / 40%);
                display: flex;
                padding-left: 1%;
                justify-content: space-around;
            }
            .content {
                margin-left: 3%;
                padding-top: 1%;
                margin-right: 10px;
                float: right;
            }
            .head {
                display: flex;
                flex-direction: row;
                padding-top: 22px;
            }
        
            .header{
                display: flex;
                justify-content: space-between;
                margin-right: 6%;
                margin-left: 6%;
                margin-top: 2%;

            }
            .head h5 {
                padding: 23%;
                margin: 1%;
                padding-left: 5%;
            }
            .head img{
                height: 100px;
                width: 121px;
                margin: 5%;
            }
        </style>
    </head>
<body>
    <!-- nav bar -->
    <?php require "nav.php" ?>
    <div class="header">
        <h5>user side </h5>
        <h5>Logged in</h5>
    </div>
    <br>       
    <center><h2>Congratulations, Viewed this persons detailed. </h2></center>
    <!-- here is the data coming from connect seller database -->
    <?php 
        $tablename = $_SESSION['username'].'buyerconnect';
        require "../dbconnect.php";
        $sql = "select  * from `$tablename`";
        $result = mysqli_query($conn,$sql);
        while($data = mysqli_fetch_array($result)){
            echo '
            <div class="box">
                <div class="head">
                    <img src="../img/img4.png" alt="image" >
                    <h5>'.$data['seller'].'</h5></div>
                    <div class="content">
                        <p>
                            <h6>Ttile : '.$data['title'].'</h6>
                            <h6>Date:'.$data['dates'].'</h6>
                            <h6>Email:'.$data['email'].'</h6>
                            <h6>phone no.:'.$data['phoneno'].'</h6>
                        </p>
                    </div>
                </div>
            </div>';
         }   
         ?>
          
    <div class="footer" style="position:center;">
        <center><h3>&copy aditya sabde 2022</h3></center>
    </div>
</body>
</html>