<!DOCTYPE html>
<html lang="en">
<head>
  <title>CricStats</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel='stylesheet' type='text/css' media='screen' href='css/admin.css'>
  <script type="text/javascript" src='js/login.js'></script>
</head>
<body>
<?php
    $page="home";
    include "include/nav.php";
?>
<?php
    $page="home";
    include "include/vertical-nav.php";
?>

<div class="column middle" style="background-color:#bbb">


<div class="row">

<a href="dispMI.php">
  <div class="columnm" style="background-color:#000080;">
  <img src="images/logo/MI.png" class="icon" alt="Mumbai Indians" >
  <h2><b>Mumbai Indians</b></h2>
  </div>
</a>

<a href="dispCSK.php">
  <div class="columnm" style="background-color:#FCDB4A;">
  <img src="images/logo/csk.png" class="icon" alt="csk">
  <h2><b>Chennai Super Kings</b></h>
  </div>
</a> 

<a href="dispSRH.php">
  <div class="columnm" style="background-color:#B63A15;">
  <img src="images/logo/srh.png" class="icon" alt="SRH">
  <h2><b>Sunriser Hyderabad</b></h>
  </div>
</a>  
</div>
<br>

<div class="row">
<a href="dispKKR.php">
  <div class="columnm" style="background-color:#110935;">
  <img src="images/logo/kkr.png" class="icon" alt="KKR">
  <h2><b>Kolkata Knight Riders</b></h>
  </div>
</a>
<a href="dispRR.php">
  <div class="columnm" style="background-color:#3854B4;">
  <img src="images/logo/rr.png" class="icon" alt="RR">
  <h2><b>Rajasthan royals</b></h>
  </div>
</a>
<a href="dispDD.php">
  <div class="columnm" style="background-color:#4323C5;">
  <img src="images/logo/dc.png" class="icon" alt="DC">
  <h2><b>Delhi Capitals</b></h>
  </div>
</a>
</div>
     
</html>
