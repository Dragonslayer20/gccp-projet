<?php
 $showalert = false;
 $showerror = false ;
if($_SERVER['REQUEST_METHOD']=="POST"){
    require "dbconnect.php";
    $username = $_POST['username'];
    $email  = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $phoneno = $_POST['phoneno'];
    $sql1 = "SELECT * from `internship`.`signup` where email= '$email' ";
    $result1 = mysqli_query($conn , $sql1);
    $num = mysqli_num_rows($result1);
    if($num == 0){
        if($password == $cpassword && $username != ""){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql =" INSERT into `internship`.`signup` VALUES(null,'$username','$email','$hash','$cpassword','$phoneno')";
            $result = mysqli_query($conn , $sql)  or die( mysqli_error($conn));


            $name = $username.'buyer';
            $connect = $username.'buyerconnect';

            echo $name;
            echo $connect;
          /* database for to get response to particular buyer */
            $sql ="CREATE TABLE `internship`.`$name`(
             id int AUTO_INCREMENT primary key, 
             buyers varchar(255),
             dates varchar(255), 
             category varchar(255),
             locations varchar(255),
             morerequirement varchar(255),
             budget varchar(255),
             messages varchar(255),
             title varchar(255),
             statuses int(2) DEFAULT '1'
            )";
         $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
         
         /* database for response are connected particular buyer */
         $sql ="CREATE TABLE `internship`.`$connect`(
            seller varchar(255),
            dates varchar(255),
            statuses int(2) DEFAULT '1' ,
            email varchar(255),
            phoneno int(10),
            title varchar(255)
        )";
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
             
            header("location:buyerslogin.php");
        }
        else{
            $showalert = true;
        }
    }
    else{
        $showerror = true ;
    }

 }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="buyerssignup.css"> -->
        <title>signup</title>
        <style>
            .table1 {
                margin: 5%;
                padding: 4%;
                margin-right: 31%;
                margin-left: 28%;
                border-radius: 33px;
                box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            }
            .btn{
                width:100px;
                border-radius: 33px;
            }
        </style>
    </head>
    <body>
    <?php require "buyers/nav.php ";?>

    <script> 
        <?php if($showerror){
                echo 'alert("Email is already exist");';
            } 
            if($showalert){
                echo 'alert("keep your password and confirm password same");';
            } 
        ?>
    </script>
    <div class="middle">
        <div class="table1">
            <form action="buyerssignup.php" method="post">
                <h2><b>Register</b></h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="varchar" name="username" placeholder="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input  type="varchar" name="email" placeholder="Email" class="form-control" id="exampleInputPassword1">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input  type="password" name="password" placeholder="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">confirm Password</label>
                        <input type="password" name="cpassword" placeholder="confirm password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Phone no.</label>
                        <input maxlength="10" minlength="10" type="int" name="phoneno" placeholder="phone no." class="form-control" id="exampleInputPassword1">
                    </div>
                    <center><button type="submit" class="btn btn-success" >Submit</button></center> 
            </form>
        </div>
            <div class="footer" style="position:center; z-index:100;">
                <center><h3>&copy aditya sabde</h3></center>
            </div>
    </div>
    </body>
</html>