  <!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - SKUs</title>
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
  
  <div class="column">
    
	<div class="card">
      <h2>SKUs</h2>
	  <a href="addsku.php">Add SKU</a><br/><br/>
<?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM sku");

echo "<table cellspacing='0' cellpadding='5' border='0'>
<tr>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>SKU</th>
<th>Classification</th>
<th>Item Description</th>
<th>Size</th>
<th>Brand</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td><a href="editsku.php?id=' . $row['SKU'] . '">Edit</a></td>';
echo '<td><a href="deletesku.php?id=' . $row['SKU'] . '">Delete</a></td>';
echo '<td>' . $row['SKU'] . '</td>';
echo '<td>' . $row['CLASSIFICATION'] . '</td>';
echo '<td>' . $row['UPC'] . '</td>';
echo '<td>' . $row['SKU_SIZE'] . '</td>';
echo '<td>' . $row['BRAND_NAME'] . '</td>';
echo '</tr>';
}
echo "</table>";

mysqli_close($con);
?>
    </div>
  </div>
  
  
</div>

</body>

</html>
</body>
</html>