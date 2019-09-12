
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - Edit SKU Store</title>
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
</div>

<div class="row">
  
  <div class="leftcolumn">
    
	<div class="card">
      <h2>Edit SKU Store</h2>
	  <?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id'];

$query = "SELECT * FROM sku_store WHERE (SKU_ID = $id)";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
	$isku = $row['SKU_ID'];
	$istore = $row['STORE_ID'];
	$icost = $row['COST'];
	$iretail = $row['RETAIL'];
}

if (isset($_POST['submitted']))
{
	$sku = $_POST['sku'];
	$store = $_POST['store'];
	$cost = $_POST['cost'];
	$retail = $_POST['retail'];

mysqli_query($con,"UPDATE sku_store SET SKU_ID='$sku',STORE_ID='$store',COST='$cost',RETAIL='$retail' WHERE SKU_ID='$id'");
  
  header("Location:skustore.php");
  exit;
  
}

mysqli_close($con);
?>
	
<form id='addcust' name='addcust' method='post' action=''>
	   <table cellspacing='0' cellpadding='5' border='0'>
		<tr>
		<td>SKU</td>
		<td><input id='sku' name='sku' type='text' style='display:block' value=<?php echo $isku;?>></td>
		</tr>
		<tr>
		<td>Store ID</td>
		<td><input id='store' name='store' type='text' style='display:block' value=<?php echo $istore;?>></td>
		</tr>
		<tr>
		<td>Cost</td>
		<td><input id='cost' name='cost' type='text' style='display:block' value=<?php echo $icost;?>></td>
		</tr>		
		<tr>
		<td>Retail Cost</td>
		<td><input id='retail' name='retail' type='text' style='display:block' value=<?php echo $iretail;?>></td>
		</tr>
		<tr>
		<td><input id='submit' name='submit' type='submit' value='Save' style='display:block'></td>
		</tr>
		</table>
	  <input id='submitted' name='submitted' type='hidden' value='true' style='display:block'/>
	  </form>
	
    </div>
  </div>
</div>

</body>

</html>
