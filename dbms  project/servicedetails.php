<?php
//echo '<link rel="stylesheet" href="../util/vsms_theme.css">';
echo '<body bgcolor="">';
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
$query="select  service_id,vehicle_no,vehicle_model,owner_name,service_name,status,Date from addingservice ";
$result = mysqli_query($con,$query);
echo '<table border="5" align="center">';
echo '<tr>';
echo '<th>service_id </th>';
echo '<th>vehicle_no </th>';
echo '<th>vehicle_model </th>';
echo '<th>owner_name </th>';
echo '<th>service_name </th>';
echo '<th> status</th>';
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
echo '</body>';
//<button onclick="document.location='try.html'"><h2>New vehicle</h2></button>
?></br>
<html><body>
    <style>
        .button{text-align:center;}
        </style>
    <div class="button">
<button onclick="document.location='updateservice.php'" class="button"><h2>update status</h2></button>
<button onclick="document.location='delete.php'" class="button"><h2>delete service</h2></button>
</div>
</body>
</html>
