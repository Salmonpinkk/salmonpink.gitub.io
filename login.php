<?php

function redirect() {
    header ( 'Location: index.php' );
}

?>

<?php session_start(); ?>  



<?php
  if(isset($_SESSION['username'])){
   redirect();
  }
?> 

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="sstyle.css">
</head>
<body>
  <div class="header">
  	<h2><span>PC</span>Hub</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
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