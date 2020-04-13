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
  <script src='main.js'></script>

   <style>
  th, td {
  color:black;
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
  border: 1px solid black;
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

<fieldset>

<?php
$server="localhost";
$user="root";
$pwd="";
$dbname="cricket";
$con=mysqli_connect($server,$user,$pwd,$dbname);
if($con)
{
   
  if(isset($_POST["BATMI"])) 
  {
    $sql="SELECT * FROM player where p_role='bat' and t_id='MI'";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
    
}
  if(isset($_POST["BOWLMI"])) 
  {
    $sql="SELECT * FROM player where p_role='bowl' and t_id='MI' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}
if(isset($_POST["WICKMI"])) 
  {
    $sql="SELECT * FROM player where p_role='wic' and t_id='MI' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}

  if(isset($_POST["ALLMI"])) 
  {
    $sql="SELECT * FROM player where t_id='MI' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}


  if(isset($_POST["SPONMI"])) 
  {
    $sql="SELECT * FROM sponser where t_id='MI' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Sponsor ID:  </th>";
                echo "<th>Sponsor Name:  </th>";
                echo "<th>Sponsor Amount:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['s_id'] . "</td>";
                echo "<td>" . $row['s_name'] . "</td>";
                echo "<td>" . $row['s_amt'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CBATMI"])) 
  {
    $sql="SELECT * FROM coach where t_id='MI' and c_role='bat' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CBOWLMI"])) 
  {
    $sql="SELECT * FROM coach where t_id='MI' and c_role='bowl' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CFMI"])) 
  {
    $sql="SELECT * FROM coach where t_id='MI' and c_role='field' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}


if(isset($_POST["COAMI"])) 
  {
    $sql="SELECT * FROM coach where t_id='MI' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

   
  if(isset($_POST["BATCSK"])) 
  {
    $sql="SELECT * FROM player where p_role='bat' and t_id='CSK'";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}
  if(isset($_POST["BOWLCSK"])) 
  {
    $sql="SELECT * FROM player where p_role='bowl' and t_id='CSK' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}
if(isset($_POST["WICKCSK"])) 
  {
    $sql="SELECT * FROM player where p_role='wic' and t_id='CSK' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}

  if(isset($_POST["ALLCSK"])) 
  {
    $sql="SELECT * FROM player where t_id='CSK' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}


  if(isset($_POST["SPONCSK"])) 
  {
    $sql="SELECT * FROM sponser where t_id='CSK' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Sponsor ID:  </th>";
                echo "<th>Sponsor Name:  </th>";
                echo "<th>Sponsor Amount:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['s_id'] . "</td>";
                echo "<td>" . $row['s_name'] . "</td>";
                echo "<td>" . $row['s_amt'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CBATCSK"])) 
  {
    $sql="SELECT * FROM coach where t_id='CSK' and c_role='bat' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CBOWLCSK"])) 
  {
    $sql="SELECT * FROM coach where t_id='CSK' and c_role='bowl' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CFCSK"])) 
  {
    $sql="SELECT * FROM coach where t_id='CSK' and c_role='field' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["COACSK"])) 
  {
    $sql="SELECT * FROM coach where t_id='CSK' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

   
  if(isset($_POST["BATSRH"])) 
  {
    $sql="SELECT * FROM player where p_role='bat' and t_id='SRH'";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}
  if(isset($_POST["BOWLSRH"])) 
  {
    $sql="SELECT * FROM player where p_role='bowl' and t_id='SRH' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
     
}

if(isset($_POST["WICKSRH"])) 
  {
    $sql="SELECT * FROM player where p_role='wic' and t_id='SRH' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
     
}

  if(isset($_POST["ALLSRH"])) 
  {
    $sql="SELECT * FROM player where t_id='SRH' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
     
}


  if(isset($_POST["SPONSRH"])) 
  {
    $sql="SELECT * FROM sponser where t_id='SRH' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Sponsor ID:  </th>";
                echo "<th>Sponsor Name:  </th>";
                echo "<th>Sponsor Amount:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['s_id'] . "</td>";
                echo "<td>" . $row['s_name'] . "</td>";
                echo "<td>" . $row['s_amt'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
     
}

if(isset($_POST["CBATSRH"])) 
  {
    $sql="SELECT * FROM coach where t_id='SRH' and c_role='bat' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CBOWLSRH"])) 
  {
    $sql="SELECT * FROM coach where t_id='SRH' and c_role='bowl' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CFSRH"])) 
  {
    $sql="SELECT * FROM coach where t_id='SRH' and c_role='field' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}


if(isset($_POST["COASRH"])) 
  {
    $sql="SELECT * FROM coach where t_id='SRH' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
     
}

   
  if(isset($_POST["BATKKR"])) 
  {
    $sql="SELECT * FROM player where p_role='bat' and t_id='KKR'";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
     
}
  if(isset($_POST["BOWLKKR"])) 
  {
    $sql="SELECT * FROM player where p_role='bowl' and t_id='KKR' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["WICKKKR"])) 
  {
    $sql="SELECT * FROM player where p_role='wic' and t_id='KKR' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}
  if(isset($_POST["ALLKKR"])) 
  {
    $sql="SELECT * FROM player where t_id='KKR' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}


  if(isset($_POST["SPONKKR"])) 
  {
    $sql="SELECT * FROM sponser where t_id='KKR' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Sponsor ID:  </th>";
                echo "<th>Sponsor Name:  </th>";
                echo "<th>Sponsor Amount:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['s_id'] . "</td>";
                echo "<td>" . $row['s_name'] . "</td>";
                echo "<td>" . $row['s_amt'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CBATKKR"])) 
  {
    $sql="SELECT * FROM coach where t_id='KKR' and c_role='bat' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CBOWLKKR"])) 
  {
    $sql="SELECT * FROM coach where t_id='KKR' and c_role='bowl' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CFKKR"])) 
  {
    $sql="SELECT * FROM coach where t_id='KKR' and c_role='field' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}


if(isset($_POST["COAKKR"])) 
  {
    $sql="SELECT * FROM coach where t_id='KKR' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}


   
  if(isset($_POST["BATRR"])) 
  {
    $sql="SELECT * FROM player where p_role='bat' and t_id='RR'";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}
  if(isset($_POST["BOWLRR"])) 
  {
    $sql="SELECT * FROM player where p_role='bowl' and t_id='RR' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    

}

if(isset($_POST["WICKRR"])) 
  {
    $sql="SELECT * FROM player where p_role='wic' and t_id='RR' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    

}

  if(isset($_POST["ALLRR"])) 
  {
    $sql="SELECT * FROM player where t_id='RR' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    

}


  if(isset($_POST["SPONRR"])) 
  {
    $sql="SELECT * FROM sponser where t_id='RR' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Sponsor ID:  </th>";
                echo "<th>Sponsor Name:  </th>";
                echo "<th>Sponsor Amount:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['s_id'] . "</td>";
                echo "<td>" . $row['s_name'] . "</td>";
                echo "<td>" . $row['s_amt'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    

}

if(isset($_POST["CBATRR"])) 
  {
    $sql="SELECT * FROM coach where t_id='RR' and c_role='bat' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CBOWLRR"])) 
  {
    $sql="SELECT * FROM coach where t_id='RR' and c_role='bowl' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CFRR"])) 
  {
    $sql="SELECT * FROM coach where t_id='RR' and c_role='field' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}


if(isset($_POST["COARR"])) 
  {
    $sql="SELECT * FROM coach where t_id='RR' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    

}

   
  if(isset($_POST["BATDD"])) 
  {
    $sql="SELECT * FROM player where p_role='bat' and t_id='DD'";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    

}
  if(isset($_POST["BOWLDD"])) 
  {
    $sql="SELECT * FROM player where p_role='bowl' and t_id='DD' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["WICKDD"])) 
  {
    $sql="SELECT * FROM player where p_role='wic' and t_id='DD' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}

  if(isset($_POST["ALLDD"])) 
  {
    $sql="SELECT * FROM player where t_id='DD' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Player ID</th>";
                echo "<th>Player Name</th>";
                echo "<th>Player Age</th>";
                echo "<th>Player Role</th>";
                echo "<th>Player Batting Statistics</th>";
                echo "<th>Player Bowling Statistics</th>";
                echo "<th>Team ID</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_name'] . "</td>";
                echo "<td>" . $row['p_age'] . "</td>";
                echo "<td>" . $row['p_role'] . "</td>";
                echo "<td>" . $row['p_bat'] . "</td>";
                echo "<td>" . $row['p_bowl'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    }
    
}


  if(isset($_POST["SPONDD"])) 
  {
    $sql="SELECT * FROM sponser where t_id='DD' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Sponsor ID:  </th>";
                echo "<th>Sponsor Name:  </th>";
                echo "<th>Sponsor Amount:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['s_id'] . "</td>";
                echo "<td>" . $row['s_name'] . "</td>";
                echo "<td>" . $row['s_amt'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CBATDD"])) 
  {
    $sql="SELECT * FROM coach where t_id='DD' and c_role='bat' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CBOWLDD"])) 
  {
    $sql="SELECT * FROM coach where t_id='DD' and c_role='bowl' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}

if(isset($_POST["CFDD"])) 
  {
    $sql="SELECT * FROM coach where t_id='DD' and c_role='field' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}


if(isset($_POST["COADD"])) 
  {
    $sql="SELECT * FROM coach where t_id='DD' ";
    //echo $sql4;
    if($result = mysqli_query($con, $sql))
    {
  if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Coach ID:  </th>";
                echo "<th>Coach Name:  </th>";
                echo "<th>Coach Role:  </th>";
                echo "<th>Team ID:  </th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_role'] . "</td>";
                echo "<td>" . $row['t_id'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    }
    }
    
}


}
else
{
    echo "Connection Failed";
}
?>

</fieldset>

</form>

</div>

</body>
</html>
