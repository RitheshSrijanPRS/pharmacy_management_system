<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> - Pharmacy Management</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<style>
#left_column{
height: 470px;
}

</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="images/pharmacy.svg"></a>Pharmacy Management</h1></div>
<div id="left_column">
<div id="button">
<ul>
			<li><a href="admin.php">Dashboard</a></li>
			<li><a href="admin_pharmacist.php">Pharmacy</a></li>
			<li><a href="admin_manager.php">Sales</a></li>
			<li><a href="admin_cashier.php">Medicines</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
		</div>
<div id="main">
    
 <!-- Dashboard icons -->
            <div class="grid_7">
            	<a href="admin.php" class="dashboard-module">
                	<span>Dashboard</span>
                </a>
                <a href="admin_pharmacist.php" class="dashboard-module">
                	<span>Pharmacy</span>
                </a>
                
                <a href="admin_manager.php" class="dashboard-module">
                	<span>sales</span>
                </a>
                  
                <a href="admin_cashier.php" class="dashboard-module">
                	<span>Medicine</span>
                </a>				  
			</div>
</div>
<div id="footer" align="Center">Welcome Admin!</div>
</div>
</body>
</html>
