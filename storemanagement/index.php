<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - Customers</title>
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
      <h2>Customers</h2>
	  <a href="addcustomer.php">Add Customer</a><br/><br/>
<?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM customer");

echo "<table cellspacing='0' cellpadding='5' border='0'>
<tr>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>Customer ID</th>
<th>Customer First Name</th>
<th>Customer Last Name</th>
<th>Customer Phone Number</th>
<th>Customer Email Address</th>
<th>Customer City</th>
<th>Customer State</th>
<th>Customer Zip Code</th>
<th>Account Class</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td><a href="editcustomer.php?id=' . $row['CUST_ID'] . '">Edit</a></td>';
echo '<td><a href="deletecustomer.php?id=' . $row['CUST_ID'] . '">Delete</a></td>';
echo '<td>' . $row['CUST_ID'] . '</td>';
echo '<td>' . $row['CUST_FIRST_NAME'] . '</td>';
echo '<td>' . $row['CUST_LAST_NAME'] . '</td>';
echo '<td>' . $row['CUST_PHONE_NUMBER'] . '</td>';
echo '<td>' . $row['CUST_EMAIL_ADDRESS'] . '</td>';
echo '<td>' . $row['CUST_CITY'] . '</td>';
echo '<td>' . $row['CUST_STATE'] . '</td>';
echo '<td>' . $row['CUST_ZIP_CODE'] . '</td>';
echo '<td>' . $row['ACCT_CLASS'] . '</td>';
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