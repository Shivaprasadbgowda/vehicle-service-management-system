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
    $serid=$_POST['serid'];
    $vehno=$_POST['vehno'];
    $vehmodel=$_POST['vehmodel'];
    $oname=$_POST['oname'];
    $sname=$_POST['sname'];
    $status=$_POST['status'];
    $date=$_POST['date'];
}
    $sql_query="INSERT INTO `addingservice` (`service_id`, `vehicle_no`, `vehicle_model`, `owner_name`, `service_name`, `status`, `Date`) VALUES ('$serid', ' $vehno', '$vehmodel', '$oname', ' $sname', '$status', '$date')";
if(mysqli_query($conn, $sql_query))
{
    echo"new details inserted";
    }
    else
      { echo"Error:".$sql."".mysqli_error($conn);
    }  
        mysqli_close($conn);
    ?>