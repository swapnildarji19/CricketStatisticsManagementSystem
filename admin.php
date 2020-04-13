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
  
  <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
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
  <form name="adminlogin" method="POST" action="verify.php" >
    <fieldset>
    <label><h3>Username</h3></label>
    <input type="text" name="uname"><br>
    <label><h3>Password</h3></label>
    <input type="text" name="pwd"><br>
    <input type="submit" name="LOGIN" value="LOGIN">

  </fieldset>
</form>
</div>

     
</html>
