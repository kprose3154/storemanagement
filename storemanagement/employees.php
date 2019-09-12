  
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - Employees</title>
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
      <h2>Employees</h2>
	  <a href="addemployee.php">Add Employee</a><br/><br/>
<?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM employee");

echo "<table cellspacing='0' cellpadding='5' border='0'>
<tr>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>Employee ID</th>
<th>Employee First Name</th>
<th>Employee Last Name</th>
<th>Employee Phone Number</th>
<th>Employee Email Address</th>
<th>Employee City</th>
<th>Employee State</th>
<th>Employee Zip Code</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td><a href="editemployee.php?id=' . $row['EMP_ID'] . '">Edit</a></td>';
echo '<td><a href="deleteemployee.php?id=' . $row['EMP_ID'] . '">Delete</a></td>';
echo '<td>' . $row['EMP_ID'] . '</td>';
echo '<td>' . $row['EMP_FIRST_NAME'] . '</td>';
echo '<td>' . $row['EMP_LAST_NAME'] . '</td>';
echo '<td>' . $row['EMP_PHONE_NUMBER'] . '</td>';
echo '<td>' . $row['EMP_EMAIL_ADDRESS'] . '</td>';
echo '<td>' . $row['EMP_CITY'] . '</td>';
echo '<td>' . $row['EMP_STATE'] . '</td>';
echo '<td>' . $row['EMP_ZIP_CODE'] . '</td>';
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
