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
    $name=$_POST['name'];
    $cost=$_POST['cost'];
    $time=$_POST['time'];
    
}
    $sql_query="INSERT INTO `services` (`service_id`, `service_name`, `cost`, `time`) VALUES ('$serid', '$name', '$cost', '$time')";
if(mysqli_query($conn, $sql_query))
{
    echo"new details inserted";
    }
    else
      { echo"Error:".$sql."".mysqli_error($conn);
    }  
        mysqli_close($conn);
    ?>