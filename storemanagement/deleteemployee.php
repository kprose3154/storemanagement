  
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - Delete Employee</title>
</head>

<body>

<div class="header">
<h1><a href="index.php">KPLink Store Management</a></h1>
</div>

<div class="topnav">
  <a href="index.php">Customers</a>
  <a href="employees.php">Employees</a>
  <a href="sku.php">SKU</a>
  <a href="skustore.php">SKU Store</a>
  <a href="transactions.php">Transactions</a>
  <a href="#" style="float:right">Link</a>
</div>

<div class="row">
  
  <div class="leftcolumn">
    
	<div class="card">
      <h2>Delete Employee</h2>
	   <?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id'];

if (isset($_POST['submitted']))
{
	$choice = $_POST['choice'];

if ($choice == 0)
{
	
	header("Location:employees.php");
	exit;
}

if ($choice == 1)
{
	mysqli_query($con,"DELETE FROM `employee` WHERE `EMP_ID`=$id");
	
	header("Location:employees.php");
	exit;
}

}

	

mysqli_close($con);
?>
	   
	   <form id="delcust" name="delcust" method="post" action="">
	   <p>Are you sure you want to delete this employee?</p>
	   <input id="choice" name="choice" type="radio" value="1" />&nbsp;Yes<br/> 
	   <input id="choice" name="choice" type="radio" value="0" checked/>&nbsp;No<br/><br/>
	   <td><input id="submitted" name="submitted" type="submit" value="Submit" />
	   <input id="submitted" name="submitted" type="hidden" value="true" />
    </div>
    
  
  </div>
  
</div>

</body>

</html>
