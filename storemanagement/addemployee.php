
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - Add Employee</title>
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
      <h2>Add Employee</h2>
	  <?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['submitted']))
{
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$zipcode = $_POST['zipcode'];
	$email = $_POST['email'];
	$number = $_POST['number'];

mysqli_query($con,"INSERT INTO employee (EMP_FIRST_NAME,EMP_LAST_NAME,EMP_PHONE_NUMBER,EMP_EMAIL_ADDRESS,EMP_CITY,EMP_STATE,EMP_ZIP_CODE) VALUES ('$firstname','$lastname','$number','$email','$city','$state','$zipcode')");

header("Location:employees.php");
   exit;

}
mysqli_close($con);
?>
	  
<form id="addcust" name="addcust" method="post" action=""
	   <table cellspacing="0" cellpadding="5" border="0">
		<tr>
		<td>First Name</td>
		<td><input id="firstname" name="firstname" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>Last Name</td>
		<td><input id="lastname" name="lastname" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>Phone Number</td>
		<td><input id="number" name="number" type="text" style="display:block"/></td>
		</tr>		
		<tr>
		<td>Email Address</td>
		<td><input id="email" name="email" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>City</td>
		<td><input id="city" name="city" type="text" style="display:block"/></td>
		</tr>
		<tr>		
		<td>State</td>
		<td><input id="state" name="state" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>Zip Code</td>
		<td><input id="zipcode" name="zipcode" type="text" style="display:block"/></td>
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
