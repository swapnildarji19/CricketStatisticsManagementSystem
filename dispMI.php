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
  <style>
    header {
  background-color: #000080;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
 
}

</style>
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

<div class="column middle" style="background-color:#00004d">
<form method="POST"  action="disp.php">
<div class="center"> 
<header> <h1><b>Mumbai Indians </b></h1></header>
</div>
<br>
<div class="md">
<h3 style="color:white;">Players: </h3>

  <li><input type="submit" name="BATMI"  value="View Batsman   "></li>
  <br>
  <li><input type="submit" name="BOWLMI" value="View Bowlers"></li><br>
  <li><input type="submit" name="WICKMI" value="View Wicket-keepers"></li><br>
    <li><input type="submit" name="ARMI" value="View Allrounders"></li><br>

  <li><input type="submit" name="ALLMI" value="View All Players"></li><br>
</div>  

<div class="mid1">
<h3><b>Sponsors</b></h3>
<br>
<input type="submit" name="SPONMI" value="View All Sponsors">
</div>
<div class="mid2">
<h3><b>Coaching Staff</b></h3>

<br>

<input type="submit" name="CBATMI" value="View Batting Coach">
<input type="submit" name="CBOWLMI" value="View Bowling Coach">
<input type="submit" name="CFMI" value="View Fielding Coach">
<input type="submit" name="COAMI" value="View All Coaching Staff">
</div>
<br>
</form>
<button class="bb" style="font-size:20px"><a href="dispteam.php"> Back <i class="fa fa-arrow-left"></i></a></button>
</div>   
</html>
