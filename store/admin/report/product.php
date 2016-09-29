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
<title>Product Data</title>
</head>
<body>
<h2><strong><p align="center">Product Data</p></strong></h2>
<table width="1200" border="1" cellpadding="0" align="center" class="bordered">
	<!--DWLayoutTable-->
	<tr>
		<td width="65" align="center" valign="middle" bgcolor="#00FFFF">Product ID</td>
		<td width="250" align="center" valign="middle" bgcolor="#00FFFF">Name</td>
		<td width="70" align="center" valign="middle" bgcolor="#00FFFF">Category ID</td>
		<td width="50" align="center" valign="middle" bgcolor="#00FFFF">Price</td>
		<td width="100" align="center" valign="middle" bgcolor="#00FFFF">SKU</td>
		<td width="50" align="center" valign="middle" bgcolor="#00FFFF">Stock</td>
		<td width="60" align="center" valign="middle" bgcolor="#00FFFF">Weight</td>
		<td width="70" align="center" valign="middle" bgcolor="#00FFFF">Dimension</td>
		<td align="center" valign="middle" bgcolor="#00FFFF">Info</td>
	</tr>
<?php
	include "connectme.php";
	$sql = "select * from product_data";
	$query = mysqli_query($db_link,$sql);
	while($data = mysqli_fetch_array($query)){
?>
	<tr>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['id']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['name']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['category']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['price']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['sku']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['stock']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['weight']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['dimension']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['info']; ?></td>
	</tr>
<?php
	}
?>
</table>
<p align="center">Copyright (c) 2016 eCommerce_dv, All Right Reserved. Programmed by : <a href="mailto:gema_wardian@hotmail.com">Gema Aji W.</a> and <a href="mailto:dangridho99@gmail.com">Dang Ridho</a></p>
</body>
</html>