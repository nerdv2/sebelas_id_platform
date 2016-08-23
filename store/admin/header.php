
<div class="container-fluid">
  <nav class="navbar navbar-default">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class=" glyphicon glyphicon-th-list" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i  ></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="adminpanel.php">Home</a></li>
            <li><a href="productmgmt.php"> Product Management</a></li>
            <li><a href="ordermgmt.php">Order Management</a></li>
            <li><a href="paymentmgmt.php">Payment Management</a></li>
            <li><a href="uploadform.php">Photo Management</a></li>
            <li><a href="usermgmt.php">Users Management</a></li>
          </ul>
        </li>
      </ul>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="adminpanel.php"> Admin Panel </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "&nbsp" . $_SESSION['sess_username'] ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Log out</a></li>
          </ul>
        </li>
      </ul>
  </nav>
</div>