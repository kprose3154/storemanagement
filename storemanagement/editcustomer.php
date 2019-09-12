
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - Edit Customer</title>
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
      <h2>Edit Customer</h2>
	  <?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id'];

$query = "SELECT * FROM customer WHERE (CUST_ID = $id)";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
	$ifirstname = $row['CUST_FIRST_NAME'];
	$ilastname = $row['CUST_LAST_NAME'];
	$inumber = $row['CUST_PHONE_NUMBER'];
	$iemail = $row['CUST_EMAIL_ADDRESS'];
	$icity = $row['CUST_CITY'];
	$istate = $row['CUST_STATE'];
	$izipcode = $row['CUST_ZIP_CODE'];
	$iacctclass = $row['ACCT_CLASS'];
}

if (isset($_POST['submitted']))
{
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$state = $_POST['state'];
	$acctclass = $_POST['acctclass'];
	$city = $_POST['city'];
	$zipcode = $_POST['zipcode'];
	$email = $_POST['email'];
	$number = $_POST['number'];

mysqli_query($con,"UPDATE customer SET CUST_FIRST_NAME='$firstname',CUST_LAST_NAME='$lastname',CUST_PHONE_NUMBER='$number',CUST_EMAIL_ADDRESS='$email',CUST_CITY='$city',CUST_STATE='$state',CUST_ZIP_CODE='$zipcode',ACCT_CLASS='$acctclass' WHERE CUST_ID='$id'");
  
  header("Location:index.php");
  exit;
  
}

mysqli_close($con);
?>
	
<form id='addcust' name='addcust' method='post' action=''>
	   <table cellspacing='0' cellpadding='5' border='0'>
		<tr>
		<td>First Name</td>
		<td><input id='firstname' name='firstname' type='text' style='display:block' value=<?php echo $ifirstname;?>></td>
		</tr>
		<tr>
		<td>Last Name</td>
		<td><input id='lastname' name='lastname' type='text' style='display:block' value=<?php echo $ilastname;?>></td>
		</tr>
		<tr>
		<td>Phone Number</td>
		<td><input id='number' name='number' type='text' style='display:block' value=<?php echo $inumber;?>></td>
		</tr>		
		<tr>
		<td>Email Address</td>
		<td><input id='email' name='email' type='text' style='display:block' value=<?php echo $iemail;?>></td>
		</tr>
		<tr>
		<td>City</td>
		<td><input id='city' name='city' type='text' style='display:block' value=<?php echo $icity;?>></td>
		</tr>
		<tr>		
		<td>State</td>
		<td><input id='state' name='state' type='text' style='display:block' value=<?php echo $istate;?>></td>
		</tr>
		<tr>
		<td>Zip Code</td>
		<td><input id='zipcode' name='zipcode' type='text' style='display:block' value=<?php echo $izipcode;?>></td>
		</tr>
		<tr>
		<td>Account Class</td>
		<td><input id='acctclass' name='acctclass' type='text' style='display:block' value=<?php echo $iacctclass;?>></td>
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
