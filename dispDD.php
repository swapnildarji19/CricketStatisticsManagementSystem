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
  background-color: #5c00e6;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
 
}
.d1{
  background-color:#6600ff;
  padding: 30px;
  color: black;

}

.d2{
  background-color: #8533ff;
  padding: 30px;
  color: black;

}
.d3{
  background-color: #a366ff;
  padding: 30px;
  color: black;

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

<div class="column middle" style="background-color:#4700b3">
<form method="POST"  action="disp.php">
<header> <h1><b>Delhi Capitals</b></h1></header>
<div class="d1">
<h3>Players: </h3>
<ul>
  <li><input type="submit" name="BATDD" value="View Batsman"></li>
  <li><input type="submit" name="BOWLDD" value="View Bowlers"></li>
  <li><input type="submit" name="WICKDD" value="View Wicket-keepers"></li>
  <li><input type="submit" name="ARDD" value="View Allrounders"></li>
  <li><input type="submit" name="ALLDD" value="View All Players"></li>
</ul>
</div>
<div class="d2">
<h3>Sponsors:</h3>
<br>
<input type="submit" name="SPONDD" value="View All Sponsors">
<br>
</div>
<div class="d3">
<h3>Coaching Staff:</h3>
<br>

<input type="submit" name="CBATDD" value="View Batting Coach">
<input type="submit" name="CBOWLDD" value="View Bowling Coach">
<input type="submit" name="CFDD" value="View Fielding Coach">
<input type="submit" name="COADD" value="View All Coaching Staff">

<br>
</div>
</form>
<button class="bb" style="font-size:20px"><a href="dispteam.php"> Back <i class="fa fa-arrow-left"></i></a></button>
</div>   
</html>
