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
<title>Product Data</title>
<link href="style.css" rel="stylesheet">
</head>

<body>
<?php
    $id = $_REQUEST['id'];
    $sql = "select * from order_data where id = '$id'";
    $query = mysqli_query($db_link,$sql);
    $data = mysqli_fetch_array($query);
?>
    <form action="act_edit_order.php" method="post">
        <table  width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF" class="bordered">
            <thead>
                <h1> Edit Product </h1>
            </thead>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <tr>
                <td width="25%"> Order Status </td>
                <td><select name="status">
                        <option class="hidden"> Select </option>
                        <?php 
                        $sql = "select * from order_status";
						$query = mysqli_query($db_link, $sql);
						while($data = mysqli_fetch_array($query)){
								echo "<option value=".$data['ID'].">".$data['name']."</option>";
						} ?>
                    </select>   
                 </td>
            </tr>
            <tr>
                <td colspan="2"> 
                    <input type="submit" name="add" value="Edit Order">
                    <input type="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>