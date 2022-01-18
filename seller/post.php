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
        <div class="head">
            <h3>Professionals side<h3>
            <div class="info">
                <h5> 
                    <?php 
                    /* this causes error time please check once*/
                    $date= date('a') ;
                    if($date =='pm'){
                        echo 'Good afternoon,';
                        }
                    else{
                        echo 'Good morning,';
                    }  
                    echo $_SESSION['username']; ?>
                    </h5>
                <h5><?php echo date("l, jS \-F Y ")?>
                </h5>
            </div>
        </div>

        <div class="title">
        <hr>
            <h2>Requirement Possts</h2>
        <hr>    
        </div>
        
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
