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
      var PID = document.addplayer.p_id.value;
var PName = document.addplayer.p_name.value;
var PAge = document.addplayer.p_age.value;
var PRole = document.addplayer.p_role.value;
var PBat = document.addplayer.p_bat.value;
var PBowl = document.addplayer.p_bowl.value;
var TID = document.addplayer.t_id.value;
if(PID=="")
{
alert("Enter Player ID");
PID.focus();
return false;
}
else if(PName=="")
{
alert("Enter Player name");
PName.focus();
return false;
}
else if(PAge=="")
{
alert("Enter Player Age");
PAge.focus();
return false;
}
else if(PRole=="")
{
alert("Enter Player Role");
PRole.focus();
return false;
}
else if(PBat=="")
{
alert("Enter Player Batting Statistcs");
PBat.focus();
return false;
}
else if(PBowl=="")
{
alert("Enter Player Bowling Statistcs");
PBowl.focus();
return false;
}
else if(TID=="")
{
alert("Enter Team ID");
TID.focus();
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
<form name="addplayer" method="POST" class="formbr" action="player.php" onsubmit="return validate()">

<fieldset>
<label>Player ID:</label><input type="text" name="p_id">
<label>Player Name:</label><input type="text" name="p_name"><br>
<label>Player age:</label><input type="text" name="p_age"><br>
<label>Player ROLE:</label><input type="text" name="p_role"><br>
<label>Player Batting Statistcs:</label><input type="text" name="p_bat"><br>
<label>Player Bowling Statistics:</label><input type="text" name="p_bowl"><br>
<label>Team ID: </label><input type="text" name="t_id"><br>
<input type="submit" name="INSERT" value="INSERT">
<br>
</fieldset>

</form>
<button class="bb" style="font-size:20px"><a href="login.php"> Back <i class="fa fa-arrow-left"></i></a></button>
</div>

</body>
</html>
