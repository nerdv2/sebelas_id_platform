<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!=1){
      header('Location: index.php?err=2');
    }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../assets/admin.css">
<link rel="stylesheet" href="../assets/parsley.css">

<script src="../assets/jquery.min.js"></script>
<script src="../assets/bootstrap.min.js"></script>
<script src="../assets/parsley.js"></script>
</head>
<body>
<?php include "header.php"; ?>
<form action="upload_photo.php" method="post" enctype="multipart/form-data">
    <h4>Select image to upload:</h4><br>
    
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
