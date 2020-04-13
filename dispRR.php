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
.d1{
  background-color: #0000b3;
  padding: 30px;
  color: black;

}

.d2{
  background-color: #0000ff;
  padding: 30px;
  color: black;

}
.d3{
  background-color: #4d4dff;
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

<div class="column middle" style="background-color:#bbb">
<form method="POST" action="disp.php">
<header> <h1><b>Rajasthan Royals</b></h1></header>
<br>
<div class="d1">

<h3>Players: </h3>
<ul>
  <li><input type="submit" name="BATRR" value="View Batsman"></li>
  <li><input type="submit" name="BOWLRR" value="View Bowlers"></li>
  <li><input type="submit" name="WICKRR" value="View Wicket-keepers"></li>
    <li><input type="submit" name="ARRR" value="View Allrounders"></li>

  <li><input type="submit" name="ALLRR" value="View All Players"></li>
</ul>
</div>
<div class="d2">
<h3>Sponsors:</h3>
<br>
<input type="submit" name="SPONRR" value="View All Sponsors">
<br>
</div>

<div class="d3">
<h3>Coaching Staff:</h3>
<br>

<input type="submit" name="CBATRR" value="View Batting Coach">
<input type="submit" name="CBOWLRR" value="View Bowling Coach">
<input type="submit" name="CFRR" value="View Fielding Coach">
<input type="submit" name="COARR" value="View All Coaching Staff">
</div>
</form>
<button class="bb" style="font-size:20px"><a href="dispteam.php"> Back <i class="fa fa-arrow-left"></i></a></button>
</div>   
</html>
