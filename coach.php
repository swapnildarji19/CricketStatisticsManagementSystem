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
    //echo "Connection established";
    $c_id=$_POST["c_id"];
    $c_name=$_POST["c_name"];
    $c_role=$_POST["c_role"];
    $t_id=$_POST["t_id"];
    
    //echo $c_id.$c_name.$c_role.$t_id;
    
    $sql1="INSERT INTO coach VALUES('$c_id', '$c_name', '$c_role', '$t_id')";
    //echo $sql1;
    if(mysqli_query($con,$sql1))
    {

        echo "Record Added";
        header("Location:addcoach.php");
    }
    else 
    {
       // header("Location:addcoach.php");
        echo "Record failed to be Added";
       header("Location:addcoach.php");

    }
    }
    
    if(isset($_POST["UPDATE"]))
    {
    echo "Connection established";
    $c_id=$_POST["c_id"];
    $c_name=$_POST["c_name"];
    $c_role=$_POST["c_role"];
    $t_id=$_POST["t_id"];
    
    //echo $c_id.$c_name.$c_role.$t_id;
    
    $sql2="UPDATE coach set c_name='$c_name', c_role='$c_role',t_id='$t_id' where c_id='$c_id'";
    //echo $sql2;
    if(mysqli_query($con,$sql2))
    {
        echo "Record Updated";
        header("Location:updatecoach.php");
    }
    else 
    {
        echo "Record failed to be Updated";
    }
    }
    
    if(isset($_POST["DELETE"]))
     {
     echo "Connection established";
    $c_id=$_POST["c_id"];
    $c_name=$_POST["c_name"];
    $c_role=$_POST["c_role"];
    $t_id=$_POST["t_id"];
   
    //echo $c_id.$c_name.$c_role.$t_id;
    
    $sql3="DELETE FROM coach where c_id='$c_id'";
    //echo $sql3;
    if(mysqli_query($con,$sql3))
    {
        echo "Record Deleted";
        header("Location:updatecoach.php");

        
    }
    else 
    {
        echo "Record failed to be Deleted";
    }
    }
    
    if(isset($_POST["SELECT"]))
     {
    //echo "Connection established";
    $c_id=$_POST["c_id"];
    $c_name=$_POST["c_name"];
    $c_role=$_POST["c_role"];
    $t_id=$_POST["t_id"];
   
    //echo $c_id.$c_name.$c_role.$t_id..;    

    $sql4="SELECT * FROM coach";
    //echo $sql4;
    if($result = mysqli_query($con, $sql4))
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
