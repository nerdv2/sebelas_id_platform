<!DOCTYPE html>
<html>
  <head>
    <title>sebelas.id Login Panel</title>
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
  <body class="login-bg">

	<?php 
$errors = array(
				1=>"Invalid user name or password, Try again",
				2=>"Please login to access this area"
			  );

			$error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

			if ($error_id == 1) {
					echo '<p class="text-danger">'.$errors[$error_id].'</p>';
				}elseif ($error_id == 2) {
					echo '<p class="text-danger">'.$errors[$error_id].'</p>';
				}
		   ?>  

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h2 align="center">sebelas.id admin</h2><br><br>
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
							<form action="auth.php" method="POST" role="form">
			                <input class="form-control" name="username" type="text" placeholder="Username" required autofocus>
			                <input class="form-control" name="password" type="password" placeholder="Password" required>
			                <div class="action">
			                    <button type="submit" class="btn btn-default">Sign in</button>
			                </div>  
							</form>
			            </div>
		</div>
		<div class="footer">
			<br><br>
			<p>Copyright (c) 2016 <a href="/sebelas_id">sebelas.id</a>. <br>Build by <a href="/sebelas_id/store/team.php">sebelas.id Development Team</a></p>
		</div>
			        </div>
					
			    </div>
			</div>
	</div>
	



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>