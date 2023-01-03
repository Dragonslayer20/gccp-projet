<?php
 $showerror = false;
 if($_SERVER['REQUEST_METHOD'] == "POST"){
     require "dbconnect.php";
     $username = $_POST['username'];
     $password = $_POST['password'];
   
     $sql = "SELECT * from `internship`.`signup` where username ='$username'" ;
     $result = mysqli_query($conn , $sql);
     $num = mysqli_num_rows($result);
     if($num == 1){
       while($row = mysqli_fetch_assoc($result)){
        if(password_verify($password , $row['password'])){
             $login = true;
             session_start();
             $_SESSION['loggedin'] = true;
             $_SESSION['username'] = $username;
             header("location:buyers/post_requirement_form.php");
        }else{
            
            $showerror = true;
        }
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="buyerslogin.css"> -->
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
                margin-top:9px;
            }
            a{
                text-decoration:none;
                color:black;
            }
        </style>
    </head>
    <body>
        <?php require "buyers/nav.php";

            if($showerror == true){
                echo '<script>
                        alert("please check your credentials");
                    </script>';
        }
        ?>
        <div class="box">
            <div class="table1">
                    <form action="buyerslogin.php"  method="post">
                        <h2><b>Login </b></h2>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="varchar" name="username" placeholder="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" placeholder="password" class="form-control" id="exampleInputPassword1" >
                        </div> 
                        <center><button name="submit" type="submit" class="btn btn-success" >Login</button></center> 
                    </form>
                    <center><h3 >or</h3></center>
                    <center><a href="buyerssignup.php">Register</a></center>
            </div>
            <div class="footer" style="position:center;">
                <center><h3>&copy aditya sabde 2022</h3></center>
            </div>
        </div>
    </body>
</html>