<?php
  session_start();
  $role = $_SESSION['sess_userrole'];
  if(!isset($_SESSION['sess_username'])){
    header("location: index.php?err=2");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>sebelas.id admin panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../assets/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../assets/adminstyle.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="adminpanel.php">sebelas.id admin</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
					
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['sess_username']; ?> <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="adminpanel.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
					
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Management
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="usermgmt.php">Users Management</a></li>
                            <li><a href="productmgmt.php">Product Management</a></li>
							<li><a href="ordermgmt.php">Order Management</a></li>
                            <li><a href="paymentmgmt.php">Payment Management</a></li>
							<li><a href="uploadform.php">Photo Management</a></li>
							<li><a href="contactmgmt.php">Complaint Management</a></li>
                        </ul>
                    </li>
					
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Report
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="report/reportusers.php">Users Management</a></li>
                            <li><a href="report/reportproduct.php">Product Management</a></li>
							<li><a href="report/reportorder.php">Order Management</a></li>
                            <li><a href="report/reportpayment.php">Payment Management</a></li>
                        </ul>
                    </li>
					
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	

		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">New vs Returning Visitors</div>
						
						
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			
						<br /><br />
					</div>
		  		</div>
		  	</div>

		  	
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               <p>Copyright (c) 2016 <a href="/sebelas_id">sebelas.id</a>. Build by <a href="/sebelas_id/store/team.php">sebelas.id Development Team</a></p>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/bootstrap.min.js"></script>
    <script src="../assets/custom.js"></script>
  </body>
</html>