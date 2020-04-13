<?php
$server="localhost";
$user="root";
$pwd="";
$dbname="cricket";
$con=mysqli_connect($server,$user,$pwd,$dbname);
if($con)
{

     if(isset($_POST["INSERT"]))
     {
    echo "Connection established";
    $day=$_POST["day"];
    $time=$_POST["time"];
    $t_1=$_POST["t_1"];
    $t_2=$_POST["t_2"];
    
    //echo $t_id.$t_name.$t_rank.$t_location;
    
    $sql1="INSERT INTO matches VALUES('$day', '$time', '$t_1', '$t_2')";
    echo $sql1;
    if(mysqli_query($con,$sql1))
    {

        echo "Record Added";
        header("Location:addmatch.php");
    }
    else 
    {
        echo "Record failed to be Added";
    }
    }
    
   }

else
{
    echo "Connection Failed";
}
?>
