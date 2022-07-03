<?php 
  $db = mysqli_connect("localhost", "root", "");
  mysqli_select_db($db,"registration");
  $query = "insert into 'newvehicle' values('$oname', '$vehno', '$cname', '$vmodel', '$date')";
  $result = mysql_query($query);
  print "<p> Person's Information Inserted </p>";
  $result = mysql_query("SELECT * FROM newvehicle");
?>

<table border="2">
   <tr>
      <th>Name</th>
      <th>veh no</th>
      <th>compname </th>
      <th>vehmodel </th>
      <th>date </th>
    </tr>
    <? 
    while ($array = mysql_fetch_row($result));
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> </tr>";
        echo $array[4]; 
        print "</td> </tr>";
    }
?>