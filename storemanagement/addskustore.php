
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - Add SKU Store</title>
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
      <h2>Add SKU Store</h2>
	  <?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['submitted']))
{
	$sku = $_POST['sku'];
	$storeid = $_POST['storeid'];
	$cost = $_POST['cost'];
	$retailcost = $_POST['retailcost'];

mysqli_query($con,"INSERT INTO sku_store (SKU_ID,STORE_ID,COST,RETAIL) VALUES ('$sku','$storeid','$cost','$retailcost')");
  
  header("Location:skustore.php");
   exit;
  
}
mysqli_close($con);
?>
	  
<form id="addcust" name="addcust" method="post" action=""
	   <table cellspacing="0" cellpadding="5" border="0">
		<tr>
		<td>SKU</td>
		<td><input id="sku" name="sku" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>Store ID</td>
		<td><input id="storeid" name="storeid" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>Cost</td>
		<td><input id="cost" name="cost" type="text" style="display:block"/></td>
		</tr>		
		<tr>
		<td>Retail Cost</td>
		<td><input id="retailcost" name="retailcost" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td><input id="submit" name="submit" type="submit" value="Add" style="display:block"/></td>
		</tr>
		</table>
	  <input id="submitted" name="submitted" type="hidden" value="true" style="display:block"/>
	  </form>	  

    </div>
  </div>
</div>

</body>

</html>
