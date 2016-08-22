<?php
    include('config.php');
    include('header.php');

    global $connect;
    
    $name = trim($_POST['cstname']);
    $username = trim($_POST['cstusername']);
    $email = trim($_POST['cstemail']);
    $complaint = trim($_POST['cstcomplaint']);
    $info = trim($_POST['cstinfo']);
    $addinfo = trim($_POST['cstaddinfo']);

    $name = strip_tags($name);
    $username = strip_tags($username);
    $email = strip_tags($email);
    $complaint = strip_tags($complaint);
    $info = strip_tags($info);
    $addinfo = strip_tags($addinfo);

    $query = "INSERT INTO users_complaint(name,username,email,type,info,additional_info) VALUES('$name','$username','$email','$complaint','$info','$addinfo')";
    $res2 = mysqli_query($connect, $query) or die(mysql_error());
  
    
    if ($res2) {
        echo "<br><br>Thanks for your report, redirecting to home page...";
        header('Refresh: 3;url=index.php');
    } else {
        echo "Something went wrong, try again later...";
    }    

include('footer.php');
?>