<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - Transactions</title>
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
      <h2>Transactions</h2>
	  <a href="addtransaction.php">Add Transaction</a><br/><br/>
<?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM transaction");

echo "<table cellspacing='0' cellpadding='5' border='0'>
<tr>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>Transaction ID</th>
<th>Customer ID</th>
<th>Employee ID</th>
<th>SKU</th>
<th>Store ID</th>
<th>Register</th>
<th>Transaction Type</th>
<th>Transaction Amount</th>
<th>Tender Type</th>
<th>Quantity</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td><a href="edittransaction.php?id=' . $row['TRANS_ID'] . '">Edit</a></td>';
echo '<td><a href="deletetransaction.php?id=' . $row['TRANS_ID'] . '">Delete</a></td>';
echo '<td>' . $row['TRANS_ID'] . '</td>';
echo '<td>' . $row['CUST_ID'] . '</td>';
echo '<td>' . $row['EMP_ID'] . '</td>';
echo '<td>' . $row['SKU'] . '</td>';
echo '<td>' . $row['STORE_ID'] . '</td>';
echo '<td>' . $row['REGISTER'] . '</td>';
echo '<td>' . $row['TRANS_TYPE'] . '</td>';
echo '<td>' . $row['TRANS_AMT'] . '</td>';
echo '<td>' . $row['TENDER_TYPE'] . '</td>';
echo '<td>' . $row['QTY'] . '</td>';
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