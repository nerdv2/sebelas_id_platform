<?php 
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
<title>Users Data</title>
</head>
<body>
<h2><strong><p align="center">Users Data</p></strong></h2>
<table width="1200" border="1" cellpadding="0" align="center" class="bordered">
	<!--DWLayoutTable-->
	<tr>
		<td width="65" align="center" valign="middle" bgcolor="#00FFFF">User ID</td>
		<td width="250" align="center" valign="middle" bgcolor="#00FFFF">Name</td>
		<td width="70" align="center" valign="middle" bgcolor="#00FFFF">Username</td>
		<td width="50" align="center" valign="middle" bgcolor="#00FFFF">Email</td>
		<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Phone</td>
		<td width="50" align="center" valign="middle" bgcolor="#00FFFF">Shipping Name</td>
		<td width="60" align="center" valign="middle" bgcolor="#00FFFF">Address</td>
		<td width="70" align="center" valign="middle" bgcolor="#00FFFF">City</td>
		<td width="70" align="center" valign="middle" bgcolor="#00FFFF">Country</td>
		<td width="70" align="center" valign="middle" bgcolor="#00FFFF">Post Code</td>
	</tr>
<?php
	include "connectme.php";
	$sql = "SELECT * FROM report_users";
	$query = mysqli_query($db_link,$sql);
	while($data = mysqli_fetch_array($query)){
?>
	<tr>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['ID']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['name']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['username']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['email']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['user_phone']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['user_shipping_name']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['user_shipping_address']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['user_shipping_city']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['user_shipping_country']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['user_shipping_postcode']; ?></td>
	</tr>
<?php
	}
?>
</table>
<p align="center">Copyright (c) 2016 eCommerce_dv, All Right Reserved. Programmed by : <a href="mailto:gema_wardian@hotmail.com">Gema Aji W.</a> and <a href="mailto:dangridho99@gmail.com">Dang Ridho</a></p>
</body>
</html>