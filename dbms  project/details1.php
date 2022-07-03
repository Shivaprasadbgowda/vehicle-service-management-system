<?php
//echo '<link rel="stylesheet" href="../util/vsms_theme.css">';
echo '<body bgcolor="orange">';
//if(isset($_SESSION['username'])){
//	header("location:./Login_Register/Error.php");
//}
//echo '<br> ';
//echo '<br> ';
//echo '<a href="../ShowroomManagement/VehicleDetails.php"> back </a> ';
//echo '<br> ';
//echo '<br> ';
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"registration");
$query="select  Owner_name,vehicle_no,Company_name,vehicle_model,Date from newvehicle ";
$result = mysqli_query($con,$query);
echo '<table border="10">';
echo '<tr>';
echo '<th>Owner_name </th>';
echo '<th>vehicle_no </th>';
echo '<th>Company_name </th>';
echo '<th> vehicle_model</th>';
echo '<th>Date </th>';
//echo '<th>DATE_OF_REGISTRATION </th>';
//echo '<th>DATE_OF_DELIVERY </th>';
//echo '<th>BRANCH_CUSTOMER </th>';
//echo '<th>CUSTOMER_ID_BRANCH_ID </th>';
//echo '<th>STATUS </th>';
echo '</tr>';
if( mysqli_num_rows( $result )==0 ){
echo '<tr><td colspan="7">No Rows Returned</td></tr>';
}
else
{
while ($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
{    
echo '<tr>';
foreach ($rows as $data)
{
echo "<td align='center'>".$data."</td>";
}
echo '</tr>';
}
}
echo '</table>';
echo '<br><br>';
echo '<a href="home.php"> back </a>';
echo '</body>';
?>

