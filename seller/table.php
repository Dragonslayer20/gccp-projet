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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php require "nav.php" ; ?>
     <center><h1 class="display-1">About Methodist</h1></center>

    <p class="fs-5">
        Methodist College of Engineering and Technology (MCET) and The EXECU BOARD OF THE METHODIST CHURCH in
         India is a Non-Minority Educational institution, was established in the year 2008
         on a sprawling 5.0 acres of historic Methodist campus at Abids, Hyderabad.
        The college provides a serene and tranquil environment to the students boosting their mental
        potential and preparing them in all aspects to face the global competition with a smile and
        emerge victorious.
    </p>

    <p class="fs-5">
        The MCET is approved by AICTE, New Delhi and affiliated to Osmania University, Hyderabad. The College is accredited by NAAC with A+ Grade and all eligible Under Graduate– B.E Programmes are accredited by National Board of Accreditation (NBA).
        <br>
         The UGC has granted autonomy to the college for ten years with effect from the Academic Year 2021-22.

The MCET has been established with the support of Executive board of Methodist Church in India that has been gracious and instrumental in making the vision of an Engineering College a reality.
<br>
        <br>
The vision is being accomplished by the innovative endeavors of Sri K. Krishna Rao, Correspondent, Methodist College of Engineering and Technology and Edupreneur.
<br>
<br>
Methodist College of Engineering and Technology strives towards excellence by imparting essential technical skills as well as a holistic approach towards grooming the students into responsible, worthy citizens of the future.
<br>
<br>

Life in Methodist is not just limited to the classroom-teaching, but spins beyond the textbooks to develop character and thus mould total the personality of the students to carve a niche for themselves in the society.
<br>
<br>

The ultimate goal of the Methodist College of Engineering and Technology is to educate and graduate individuals who possess the technical and social competence and confidence to succeed in professional practice and advanced education, to be lifelong learners, and to exercise responsible citizenship.
    </p>

<center><h2 class="display-1"> Vision</h2></center>
<p class="fs-5">To produce ethical, socially conscious and innovative professionals who would contribute to sustainable
    technological development of the society.</p>

    <h2 class="display-1">Mission</h2>
    <p class="fs-5">
        To impart quality engineering education with latest technological developments and interdisciplinary skills to make students succeed in professional practice.
        <br>
        <br>
        To encourage research culture among faculty and students by establishing state of art laboratories and exposing them to modern industrial and organizational practices.
        <br>
        To inculcate humane qualities like environmental consciousness, leadership, social values, professional ethics and engage in independent and lifelong learning for sustainable contribution to the society.
    </p>

</body>
</html>