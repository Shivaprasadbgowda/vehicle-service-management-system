<?php
if(isset($_SESSION['username'])){
	header("location:Error.php");
}
?>
<html>
<!-- <head>
<title> Vehicle service Management System</title><link rel="stylesheet" href="../util/vsms_theme.css">
</head> -->
<br><body bgcolor="orange">
 <!-- <a href="ShowroomManagement.php"> back </a>  -->
<br><br>
<center> <h1>Vehicle service Management System</h1><br>
<h4>Delete service</h4>
<form action="deletefunction.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>service_id</td><td><input type="text" name="service_id"> </td>
<tr>
<!-- <td>DATE_OF_REGISTRATION</td><td><input type="text" name="DATE_OF_REGISTRATION"></td>
<tr>
<td>DATE_OF_DELIVERY</td><td><input type="text" name="DATE_OF_DELIVERY"></td>
<tr>
<td>vehicle_no</td><td><input type="text" name="vehicle_no"></td>
<tr>
<td>service_name</td><td><input type="text" name="service_name"></td>
<tr>
<td>STATUS</td><td><input type="text" name="STATUS"></td>
</tr>
<tr> -->
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="delete" value="delete"></center></td>
</tr>
</table>
</form>