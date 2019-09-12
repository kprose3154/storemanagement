
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/general.css" />
	<script type="text/javascript" src="scripts/general.js"></script>

	<title>KPLink Store Management - Add Transaction</title>
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
      <h2>Add Transaction</h2>
	  <?php
$con=mysqli_connect("127.0.0.1:51693","azure","6#vWHD_$","storedatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['submitted']))
{
	$custid = $_POST['custid'];
	$empid = $_POST['empid'];
	$sku = $_POST['sku'];
	$storeid = $_POST['storeid'];
	$register = $_POST['register'];
	$transtype = $_POST['transtype'];
	$transamt = $_POST['transamt'];
	$tendertype = $_POST['tendertype'];
	$qty = $_POST['qty'];

mysqli_query($con,"INSERT INTO transaction (CUST_ID,EMP_ID,SKU,STORE_ID,REGISTER,TRANS_TYPE,TRANS_AMT,TENDER_TYPE,QTY) VALUES ('$custid','$empid','$sku','$storeid','$register','$transtype','$transamt','$tendertype','$qty')");
  
  header("Location:transactions.php");
   exit;
  
}

	

mysqli_close($con);
?>
	  
<form id="addcust" name="addcust" method="post" action=""
	   <table cellspacing="0" cellpadding="5" border="0">
		<tr>
		<td>Customer ID</td>
		<td><input id="custid" name="custid" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>Employee ID</td>
		<td><input id="empid" name="empid" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>SKU</td>
		<td><input id="sku" name="sku" type="text" style="display:block"/></td>
		</tr>		
		<tr>
		<td>Store ID</td>
		<td><input id="storeid" name="storeid" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>Register</td>
		<td><input id="register" name="register" type="text" style="display:block"/></td>
		</tr>
		<tr>		
		<td>Transaction Type</td>
		<td><input id="transtype" name="transtype" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>Transaction Amount</td>
		<td><input id="transamt" name="transamt" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>Tender Type</td>
		<td><input id="tendertype" name="tendertype" type="text" style="display:block"/></td>
		</tr>
		<tr>
		<td>Quantity</td>
		<td><input id="qty" name="qty" type="text" style="display:block"/></td>
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
