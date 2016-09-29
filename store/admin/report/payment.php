<?php 
    include "connectme.php";
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!=1){
      header('Location: index.php?err=2');
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8589-1" />
<meta charset="utf-8">
<title>Payment Data</title>
</head>

<body>
<?php
$sql = "select * from payment_data";
$query = mysqli_query($db_link,$sql);
?>
<h2><strong><p align="center">Payment Data</p></strong></h2>
<table width="1200" border="1" cellpadding="0" align="center" class="bordered">
	
	<!--DWLayoutTable-->
	<tr>
		<td height="29" width="80" align="center" valign="middle" bgcolor="#00FFFF">Order ID</td>
		<td width="175" align="center" valign="middle" bgcolor="#00FFFF">Order Date</td>
		<td width="140" align="center" valign="middle" bgcolor="#00FFFF">Customer Name</td>
		<td width="125" align="center" valign="middle" bgcolor="#00FFFF">Amount Paid</td>
		<td width="125" align="center" valign="middle" bgcolor="#00FFFF">Transfer Target</td>
		<td width="125" align="center" valign="middle" bgcolor="#00FFFF">Confirm Date</td>
		<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Username</td>
		<td width="210" align="center" valign="middle" bgcolor="#00FFFF">Email</td>
		<td width="" align="center" valign="middle" bgcolor="#00FFFF">Phone</td>
	</tr>
<?php
	while($data = mysqli_fetch_array($query)){
?>
	<tr>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['order_id']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['order_date']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['customer_name']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['amount_paid']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['transfer_target']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['confirm_date']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['username']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['email']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['phone']; ?></td>
	</tr>
<?php
	}
?>
</table>
<p align="center">Copyright (c) 2016 eCommerce_dv, All Right Reserved. Programmed by : <a href="mailto:gema_wardian@hotmail.com">Gema Aji W.</a> and <a href="mailto:dangridho99@gmail.com">Dang Ridho</a></p>
</body>
</html>