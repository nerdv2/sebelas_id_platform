<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!=1){
      header('Location: index.php?err=2');
    }
?>
<html>
<head><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8589-1" />
<meta charset="utf-8">
<title>Product Data</title>
<link rel="stylesheet" href="../assets/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../assets/admin.css">
<link rel="stylesheet" href="../assets/parsley.css">

<script src="../assets/jquery.min.js"></script>
<script src="../assets/bootstrap.min.js"></script>
<script src="../assets/parsley.js"></script>
</head>
<body>
<?php
	include "header.php";
?>
<h2><strong><p align="center">Product Data</p></strong></h2>
<table width="1200" border="1" cellpadding="0" align="center" class="bordered">
	<tr>
		<form method="get" action="searchproduct.php">
		<td colspan='11'>
			<select name="searchwhat">
				<option selected="selected">--Search--</option>
				<option name='id' value='id'>Product ID</option>
				<option name='name' value='name'>Product Name</option>
				<option name='id' value='id'>Category ID</option>
			</select>
			<input type="text"  class="searchinput" value="" name="searchname"><br>
			<input type="submit" name="tsearch" value="SEARCH">
			
		</td>
		</form>
	</tr>
	<tr>
		<td>
			<?php 
				// include "category.php";
			?>
		<td>
	<tr>
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
		<td width="70" align="center" valign="middle" bgcolor="#00FFFF">Image Link</td>
		<td align="center" valign="middle" bgcolor="#00FFFF">Info</td>
		<td align="center" valign="middle" bgcolor="#00FFFF"><a href="add_product.php"><img style="max-width:40px;max-height:40px;width:auto;height:auto;" src="img/Page-Add.png"></img></a>
		</td>
	</tr>
<?php
	include "connectme.php";
	$sql = 'select * from product_data';
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
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['image']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['info']; ?></td>
		<td p align="center" bgcolor="#FFFFFF">
		<a href="edit_product.php?id=<?php echo $data['id'];?>" title="Edit this product?"><img style="max-width:40px;max-height:40px;width:auto;height:auto;" src="img/Page-Edit.png"></img></a>
		<a href="deleteproduct.php?id=<?php echo $data['id'];?>" onclick="return confirm('Delete confirmation?')" title="Delete this product?"><img style="max-width:40px;max-height:40px;width:auto;height:auto;" src="img/Page-Delete.png"></img></a>
		</td>
	</tr>
<?php
	}
?>
</table>
<p align="center">Copyright (c) 2016 eCommerce_dv, All Right Reserved. Programmed by : <a href="mailto:gema_wardian@hotmail.com">Gema Aji W.</a> and <a href="mailto:dangridho99@gmail.com">Dang Ridho</a></p>
</body>
</html>