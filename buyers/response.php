<?php
session_start();
// session start
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: ../buyerslogin.php");
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
        <title>Response</title>
        <style>
            .name{
                padding: 2%;
            }
        .head img {
                height: 114px;
                width: 109px;
                margin: 0%;
                padding: 10px;
            }
            .head{
                display:flex;
                flex-direction:row;
            }
            .box {
                margin: 7%;
                margin-left: 17%;
                margin-right: 19%;
                padding: 2%;
                border-radius: 1%;
                box-shadow: 1px 2px 3px 4px rgb(20 20 20 / 40%);
            }
            .btn {
                height: 2%;
                margin-left: 6%;
                margin-top: -1%;
                background-color: #0ba6ff;
            }
            .info{
                display: flex;
                justify-content: space-between; 
            }
            #ref{
                text-decoration: none;
                color: aliceblue;
            }
            .header{
                display: flex;
                justify-content: space-between;
                margin-right: 6%;
                margin-left: 6%;
                margin-top: 2%;
            }
            #mybtn{
                margin-top:10px;
                height: 35%;
                background-color: lightgreen;
                padding: -1%;
                margin-right: 121px;
            }
    </style>
    </head>
    <body> 
    <?php require "nav.php"; ?>
        <div class="header">
            <h5>user side </h5>
            <h5>Logged in</h5>
        </div>
        <?php
        $name = $_SESSION['username'].'buyer';
            require "../dbconnect.php";
            $sql1 = "select * from `$name`";
            $result1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
            $count = mysqli_num_rows($result1);
            echo '<br>
                <center><h2>Below are the '.$count.' reponses you got</h2></center>
            ';
        ?>
        <?php
        $sql ="select * from `$name`";
        $result = mysqli_query($conn,$sql) or die(mysqli_error($sql));
        while($data = mysqli_fetch_array($result))
        { 
            echo'
                <div class="box">
                    <div class="head">
                        <img src="../img/img4.png" alt="image">
                        <div class="name">
                        <h4>'.$data['buyers'].'</h4>
                        Dates  : '.$data['dates'].'<br>
                        <h5>Title : '.$data['title'].'</h5>
                    </div>
                </div>
                <div class="content">
                    <div class="info"><a id="mybtn" href="viewdetailresponse.php?id='.$data['id'].'"><button class="Btn" >view profile</button>
                        <a href="congooperation.php?name='.$data['buyers'].'" id="ref"><button  class="btn"><b>connect</b></a></button></div>
                    </div>
                </div>
            ' ;
            }
        ?>
        <!-- footer -->
        <div class="footer" style="position:center;">
            <center><h3>&copy aditya sabde 2022</h3></center>
        </div>
    </body>
</html>