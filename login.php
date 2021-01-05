<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-img">
   <div>
		<button class="btn"><a href= "index.html">Home </a></button>
	</div>
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="login.php" >
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" placeholder="Enter Username" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" placeholder="Enter Password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>