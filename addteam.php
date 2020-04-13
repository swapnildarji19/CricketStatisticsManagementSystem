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
   <script type="text/javascript">
    function validate()
    {
      var TID = document.addteam.t_id.value;
var TName = document.addteam.t_name.value;
var TRank = document.addteam.t_rank.value;
var TLocation = document.addteam.t_location.value;
if(TID=="")
{
alert("Enter Team ID");
TID.focus();
return false;
}
else if(TName=="")
{
alert("Enter Team name");
TName.focus();
return false;
}
else if(TRank=="")
{
alert("Enter Team Rank");
TRank.focus();
return false;
}
else if(TLocation=="")
{
alert("Enter Team Location");
TLocation.focus();
return false;
}

return true
}
    
  </script> 
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
<form name="addteam" method="POST" class="formbr" action="team.php" onsubmit="return validate()">

<fieldset>
<label>Team ID:</label><input type="text" name="t_id"><br>
<label>Team Name:</label><input type="text" name="t_name"><br>
<label>Team Rank:</label><input type="text" name="t_rank"><br>
<label>Team Location:</label><input type="text" name="t_location"><br>
<br>
<br>
<input type="submit" name="INSERT" value="INSERT">
<br>
</fieldset>

</form>

<button class="bb" style="font-size:20px"><a href="login.php"> Back <i class="fa fa-arrow-left"></i></a></button>
</div>


</body>
</html>
