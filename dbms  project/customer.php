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
    $cname=$_POST['cname'];
    $address=$_POST['address'];
    $phno=$_POST['phno'];
    $mail=$_POST['mail'];
    $date=$_POST['date'];
}
    $sql_query="INSERT INTO `customer` (`Name`, `Address`, `Phone_no`, `Email_id`, `Date`) VALUES ('$cname','$address', '$phno', '$mail', '$date')";
if(mysqli_query($conn, $sql_query))
{
    echo"new details inserted";
    }
    else
      { echo"Error:".$sql."".mysqli_error($conn);
    }  
        mysqli_close($conn);
    ?>