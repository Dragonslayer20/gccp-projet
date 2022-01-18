<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: sellerlogin.php");
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
      <title>Document</title>
      <style>
          .head{
              text-align: center;
              margin: 2%;
              padding:2%;
          } 
          .t{
              margin-right: 17%;
                  margin-left: 18%;
          }
          .top{
              display: flex;
              justify-content: space-between;
              margin-left:6%;
              margin-right:6%;
              margin-top:4%;
          }
          #status {
            border-radius: 25px;
            padding: 9px;
            margin: 9px;
            text-align: center;
          
            width: 146px;
        }
          #mybtn1 , #mybtn2{ 
            border-radius:25px;
            padding:6px;
          }
        #mybtn3{
          color: red;
        }
        #mybtn2{
          color: darkorange;
        }
        #mybtn1{
          color:green;
        }
      </style>
  </head>
  <body>

    <?php require "nav.php"; ?>
    <div class="top">
        <h3>Professional side</h3>
        <div class="top2">
        <h5> 
                <?php 
                    $date= date("a") ;
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
    <div class="head"><h3>Proposal request sent history </h3></div>
    <div class="t">
        <?php 
          require "../dbconnect.php"; 
        ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Buyers Name</th>
              <th scope="col">Proposal request date</th>
              <th scope="col">Title</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $sql = "select * from `".$_SESSION['username']."seller`";
              $result = mysqli_query($conn, $sql) or die($mysqli_error($conn));
              while($data = mysqli_fetch_array($result)){
                echo'
                <tr>
                  <th scope="row">'.$data['buyers'].'</th>
                  <td>'.$data['dates'].'</td>
                  <td>'.$data['title'].'</td>
                  <td id="status">';
                  
                  $sql1 = "select * from `buyers` where buyername ='".$data['buyers']."' and title='".$data['title']."'";
                  $result1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
                  $record = mysqli_fetch_array($result1);

                  $sql2 = "select * from `".$data['buyers']."buyerconnect` where seller ='".$_SESSION['username']."' and title='".$data['title']."'";
                  $result2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));
                  $r= mysqli_fetch_array($result2);


                  if( $r['seller'] == $_SESSION['username'] && $r['title']==$data['title']){
                    echo "<b id='mybtn1'>Connected</b>";
                  }
                  else{
                    if($record['status'] ==1  ){
                      echo "<b id='mybtn2'>Pending...</b>";
                    }else{
                      echo'<b id="mybtn3">Not connected</b>';
                    }
                  }
                
              echo '</td>
                </tr>  
            ';
            }   
          ?>
         </tbody>
      </table>
    </div>
    <!-- footer -->
    <div class="footer" style="position:center;">
        <center><h3>&copy aditya sabde 2022</h3></center>
    </div>
  </body>
</html>