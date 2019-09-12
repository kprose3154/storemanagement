
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - Add SKU</title>
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
      <h2>Add SKU</h2>
	  <?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['submitted']))
{
	$class = $_POST['class'];
	$upc = $_POST['upc'];
	$skusize = $_POST['skusize'];
	$brand = $_POST['brand'];

mysqli_query($con,"INSERT INTO sku (CLASSIFICATION,UPC,SKU_SIZE,BRAND_NAME) VALUES ('$class','$upc','$skusize','$brand')");
  
  header("Location:sku.php");
   exit;
  
}
mysqli_close($con);
?>
	  
<form id="addcust" name="addcust" method="post" action=""
	   <table cellspacing="0" cellpadding="5" border="0">
		<tr>
		<td>Classification</td>
		<td><input id="class" name="class" type="text" style="display:block"/></td>
		</tr>		
		<tr>
		<td>UPC</td>
		<td><input id="upc" name="upc" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>SKU Size</td>
		<td><input id="skusize" name="skusize" type="text" style="display:block"/></td>
		</tr>
		<tr>		
		<td>Brand</td>
		<td><input id="brand" name="brand" type="text" style="display:block"/></td>
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
