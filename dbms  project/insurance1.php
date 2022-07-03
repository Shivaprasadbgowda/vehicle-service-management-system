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
    $insd=$_POST['insd'];
    $regn=$_POST['regn'];
    $comp=$_POST['comp'];
    $categ=$_POST['categ'];
    $date=$_POST['date'];
    $cost=$_POST['cost'];
}
    $sql_query="INSERT INTO `insurance` (`Insurance_id`, `Regno`, `Company name`, `category`, `Due date`, `Cost`) VALUES ('$insd', '$regn', '$comp', '$categ', '$date', '$cost')";
if(mysqli_query($conn, $sql_query))
{
    echo"new details inserted";
    }
    else
      { echo"Error:".$sql."".mysqli_error($conn);
    }  
        mysqli_close($conn);
    ?>