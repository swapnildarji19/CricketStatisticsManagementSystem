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
  background-color: #ffcc00;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
 
}
.cskd{
  background-color: #ffd11a;
  padding: 30px;
  color: black;

}

.cskd1{
  background-color: #ffdb4d;
  padding: 30px;
  color: black;

}
.cskd2{
  background-color: #ffe680;
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

<div class="column middle" style="background-color:#ffffb3">
<form method="POST"  action="disp.php">
<header> <h1><b>Chennai Super Kings </b></h1></header>
<br>
<div class="cskd">
<h3>Players: </h3>

<ul>
  <li><input type="submit" name="BATCSK" value="View Batsman"></li>
  <li><input type="submit" name="BOWLCSK" value="View Bowlers"></li>
  <li><input type="submit" name="WICKCSK" value="View Wicket-keepers"></li>
  <li><input type="submit" name="ARCSK" value="View Allrounders"></li>
  <li><input type="submit" name="ALLCSK" value="View All Players"></li>
</ul>
</div>

<div class="cskd1">
<h3>Sponsors:</h3>
<br>
<input type="submit" name="SPONCSK" value="View All Sponsors">
</div>
<div class="cskd2">
<h3>Coaching Staff:</h3>
<br>

<input type="submit" name="CBATCSK" value="View Batting Coach">
<input type="submit" name="CBOWLCSK" value="View Bowling Coach">
<input type="submit" name="CFCSK" value="View Fielding Coach">
<input type="submit" name="COACSK" value="View All Coaching Staff">
</div>
<br>
</form>
<button class="bb" style="font-size:20px"><a href="dispteam.php"> Back <i class="fa fa-arrow-left"></i></a></button>
</div>   
</html>
