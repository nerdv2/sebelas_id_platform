<?php
include('connectme.php');
?>
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
<title>Complaint Data</title>
<link href="style.css" rel="stylesheet">
</head>

<body>
<?php
$sql = 'select * from users_complaint';
$query = mysqli_query($db_link,$sql);
?>
<h2><strong><p align="center">Complaint Data</p></strong></h2>
<h4><p align="center"><a href="adminpanel.php">Return to Admin Panel</a></p></h4>
<table width="900" border="1" cellpadding="0" align="center" class="bordered">
	<tr>
		<form method="get" action="searchorder.php">
		<td colspan='11'><select name="searchwhat">
			<option selected="selected">--Search--</option>
				<option name='id' value='id'>Complaint ID</option>
				<option name='user_id' value='user_id'>Complaint Type</option>
				<option name='user_id' value='user_id'>Customer Name</option>
			</select>
			<input type="text"  class="searchinput" value="" name="searchname"><br>
			<input type="submit" name="tsearch" value="SEARCH">
			
		</td>
		</form>
	</tr>
	<!--DWLayoutTable-->
	<tr>
		<td height="29" width="15" align="center" valign="middle" bgcolor="#00FFFF">Complaint ID</td>
		<td align="center" width="20" valign="middle" bgcolor="#00FFFF">Customer Name</td>
		<td align="center" valign="middle" bgcolor="#00FFFF">Username</td>
		<td align="center" valign="middle" bgcolor="#00FFFF">E-mail</td>
		<td align="center" valign="middle" bgcolor="#00FFFF">Type</td>
		<td align="center" valign="middle" bgcolor="#00FFFF">Info</td>
		<td align="center" valign="middle" bgcolor="#00FFFF">Additional Info</td>
		<td align="center" valign="middle" bgcolor="#00FFFF">Act</td>
	</tr>
<?php
	while($data = mysqli_fetch_array($query)){
?>
	<tr>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['id']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['name']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['username']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['email']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['type']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['info']; ?></td>
		<td p align="center" bgcolor="#FFFFFF"><?php echo $data['additional_info']; ?></td>
		<td p align="center" bgcolor="#FFFFFF">
		<a href="vieworder.php?id=<?php echo $data['id'];?>" title="Show user data?"><img style="max-width:40px;max-height:40px;width:auto;height:auto;" src="img/Page-Find.png"></img></a>
		<a href="edit_order.php?id=<?php echo $data['id'];?>" title="Edit this product?"><img style="max-width:40px;max-height:40px;width:auto;height:auto;" src="img/Page-Edit.png"></img></a></td>
	</tr>
<?php
	}
?>
</table>
<p align="center">Copyright (c) 2016 eCommerce_dv, All Right Reserved. Programmed by : <a href="mailto:gema_wardian@hotmail.com">Gema Aji W.</a> and <a href="mailto:dangridho99@gmail.com">Dang Ridho</a></p>
</body>
</html>