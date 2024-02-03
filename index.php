


<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="sstyle.css">
</head>
<body>

<div class="headerr">
	<h2><a href="index.html"><span style="display:contents; color: white;">PC</span><span style="display:contents; color: orange;">Hub</span></a></h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
		<p> <a href="index.html" style="color: orange;">HOME</a> </p>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		
    <?php endif ?>
</div>

</body>
</html>