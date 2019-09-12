
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - Edit Transaction</title>
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
      <h2>Edit Transaction</h2>
	  <?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id'];

$query = "SELECT * FROM transaction WHERE (TRANS_ID = $id)";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
	$icust = $row['CUST_ID'];
	$iemp = $row['EMP_ID'];
	$isku = $row['SKU'];
	$istore = $row['STORE_ID'];
	$iregister = $row['REGISTER'];
	$itranstype = $row['TRANS_TYPE'];
	$itransamt = $row['TRANS_AMT'];
	$itender = $row['TENDER_TYPE'];
	$iqty = $row['QTY'];
}

if (isset($_POST['submitted']))
{
	$cust = $_POST['cust'];
	$emp = $_POST['emp'];
	$sku = $_POST['sku'];
	$store = $_POST['store'];
	$register = $_POST['register'];
	$transtype = $_POST['transtype'];
	$transamt = $_POST['transamt'];
	$tender = $_POST['tender'];
	$qty = $_POST['qty'];

mysqli_query($con,"UPDATE transaction SET CUST_ID='$cust',EMP_ID='$emp',SKU='$sku',STORE_ID='$store',REGISTER='$register',TRANS_TYPE='$transtype',TRANS_AMT='$transamt',TENDER_TYPE='$tender',QTY='$qty' WHERE TRANS_ID='$id'");
  
  header("Location:transactions.php");
  exit;
  
}

mysqli_close($con);
?>
	
<form id='addcust' name='addcust' method='post' action=''>
	   <table cellspacing='0' cellpadding='5' border='0'>
		<tr>
		<td>Customer ID</td>
		<td><input id='cust' name='cust' type='text' style='display:block' value=<?php echo $icust;?>></td>
		</tr>
		<tr>
		<td>Employee ID</td>
		<td><input id='emp' name='emp' type='text' style='display:block' value=<?php echo $iemp;?>></td>
		</tr>
		<tr>
		<td>SKU</td>
		<td><input id='sku' name='sku' type='text' style='display:block' value=<?php echo $isku;?>></td>
		</tr>		
		<tr>
		<td>Store ID</td>
		<td><input id='store' name='store' type='text' style='display:block' value=<?php echo $istore;?>></td>
		</tr>
		<tr>
		<td>Register</td>
		<td><input id='register' name='register' type='text' style='display:block' value=<?php echo $iregister;?>></td>
		</tr>
		<tr>		
		<td>Transaction Type</td>
		<td><input id='transtype' name='transtype' type='text' style='display:block' value=<?php echo $itranstype;?>></td>
		</tr>
		<tr>
		<td>Transaction Amount</td>
		<td><input id='transamt' name='transamt' type='text' style='display:block' value=<?php echo $itransamt;?>></td>
		</tr>
		<tr>
		<td>Tender Type</td>
		<td><input id='tender' name='tender' type='text' style='display:block' value=<?php echo $itender;?>></td>
		</tr>
		<tr>
		<td>Quantity</td>
		<td><input id='qty' name='qty' type='text' style='display:block' value=<?php echo $iqty;?>></td>
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
