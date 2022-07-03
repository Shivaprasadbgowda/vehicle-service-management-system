<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<div class="header">
 <style>h2{text-align: center;}</style>
	<h2>vehicle service management system</h2><br>
</div>
<!-- <!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content"> -->
  	<!-- notification message
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	// echo $_SESSION['success']; 
          	// unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    logged in user information
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>

    <?php endif ?>
</div>
		
</body>
</html> -->
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./Home Page_files/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="./Home Page_files/home.css">
</head>

<body>
<!-- <button class="GFG" 
    onclick="location.href = 'https://ide.geeksforgeeks.org';">
        New vehicle
    </button> -->
    

    <div class="button-group">
        <!-- <button style="font-size: 19px;" onclick="location.href=&#39;file:///C:\xampp\htdocs\registration;"><i class="far fa-user"></i> New vehicle</button>
        <button style="font-size: 19px;" onclick="location.href=&#39;file:///D:/mini%20project/student/student.html&#39;"><i class="fas fa-user-graduate"></i>service details</button>
        <button style="font-size: 19px;" onclick="location.href=&#39; file:///D:/mini%20project/faculty/faculty.html&#39; "><i class="fas fa-chalkboard-teacher"></i>insurance</button> -->
        <!-- <a href="try.html"><button><h2> Customer registration</h2> </button></a> -->
        <!-- <button style="font-size: 19px;" onclick="location.href=&#39;file:///D:/mini%20project/subject/newsubject.html&#39;"><i class="fas fa-book"></i>customer registration</button> -->
        <!-- <button style="font-size: 19px;" onclick="location.href=&#39;file:///D:/mini%20project/allotment/newallotment.html&#39;"><i class="fas fa-registered"></i>Bill</button> -->
    </br></br></br>
        <button onclick="document.location='try.html'"><h2>New vehicle</h2></button>
        <button onclick="document.location='customer.html'"><h2>Customer registration</h2></button>
        <button onclick="document.location='addservice.html'"><h2>Add service</h2></button>
        <button onclick="document.location='insurance1.html'"><h2>Insurance</h2></button>
    
        <button onclick="document.location='service.html'"><h2>Services</h2></button>
      
        <!-- <button type=href="try.html">bill</button> -->
        <!-- <a href="try.html"><button><h2> Bill</h2> </button></a>  -->
        <a href="index.php"><button><h2> Logout</h2> </button></a> 
        <!-- <button style="font-size: 19px;"><i class="fas fa-sign-out-alt"></i> <a style="text-decoration: none;" href="C:\xampp\htdocs\registration\index.php">Logout</a></button>
    </div> --></br>
    <button onclick="document.location='details1.php'"><h2>Vehicle details</h2></button>
    <button onclick="document.location='customerdetails.php'"><h2>customer details</h2></button>
    <button onclick="document.location='servicedetails.php'"><h2>Service details</h2></button>
    <!-- <button onclick="document.location='updateservice.php'"><h2>Service details</h2></button> -->
    </div>


</body></html>