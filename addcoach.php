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
      var CID = document.addcoach.c_id.value;
var CName = document.addcoach.c_name.value;
var CRole = document.addcoach.c_role.value;
var TID = document.addcoach.t_id.value;
if(CID=="")
{
alert("Enter CID");
CID.focus();
return false;
}
else if(CName=="")
{
alert("Enter Coach name");
CName.focus();
return false;
}
else if(CRole=="")
{
alert("Enter Coach Role");
CRole.focus();
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
<form name="addcoach" method="POST" class="formbr" action="coach.php"  onsubmit="return validate()">

<fieldset>
<label>Coach ID:</label><input type="text" name="c_id"><br>
<label>Coach Name:</label><input type="text" name="c_name"><br>
<label>Coach Role:</label><input type="text" name="c_role"><br>
<label>Team ID:</label><input type="text" name="t_id"><br>
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
