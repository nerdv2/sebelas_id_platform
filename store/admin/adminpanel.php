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
<title>ecommerce_dv Admin Panel</title>
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
<h2><strong><p align="center">Admin Panel</p></strong></h2>
<table width="850" border="1" cellpadding="0" align="center" class="bordered">
	<!--DWLayoutTable-->
	<tr>
		<td colspan="3" width="150" height="29" align="center" valign="middle" bgcolor="#00FFFF">Ecommerce Management</td>
	</tr>
  <tr>
		<td width="150" height="29" align="center" valign="middle" bgcolor="#00FFFF"><a href="usermgmt.php">Users Management</a></td>
	</tr>
  <tr>
		<td width="150" height="29" align="center" valign="middle" bgcolor="#00FFFF"><a href="productmgmt.php">Product Management</a></td>
    <td width="150" height="29" align="center" valign="middle" bgcolor="#00FFFF"><a href="ordermgmt.php">Order Management</a></td>
    <td width="150" height="29" align="center" valign="middle" bgcolor="#00FFFF"><a href="paymentmgmt.php">Payment Management</a></td>
	</tr>
  <tr>
    <td width="150" height="29" align="center" valign="middle" bgcolor="#00FFFF"><a href="uploadform.php">Photo Management</a></td>
    <td width="150" height="29" align="center" valign="middle" bgcolor="#00FFFF"><a href="contactmgmt.php">Complaint Management</a></td>
  </tr>
</table>
<p align="center">Copyright (c) 2016 eCommerce_dv, All Right Reserved. Programmed by : <a href="mailto:gema_wardian@hotmail.com">Gema Aji W.</a> and <a href="mailto:dangridho99@gmail.com">Dang Ridho</a></p>
</body>
</html>