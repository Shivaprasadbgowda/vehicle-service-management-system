<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="registration";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("connection failed".
    mysqli_connect_error());

}
if(isset($_POST['save']))
{
    $oname=$_POST['oname'];
    $vehno=$_POST['vehno'];
    $cname=$_POST['cname'];
    $vmodel=$_POST['vmodel'];
    $date=$_POST['date'];
}
    $sql_query="INSERT INTO `newvehicle` (`Owner_name`, `vehicle_no`, `Company_name`, `vehicle_model`, `Date`) VALUES ('$oname', '$vehno', '$cname', '$vmodel', '$date')";
if(mysqli_query($conn, $sql_query))
{
    echo"new details inserted";
    }
    else
      { echo"Error:".$sql."".mysqli_error($conn);
    }  
        mysqli_close($conn);
    ?>