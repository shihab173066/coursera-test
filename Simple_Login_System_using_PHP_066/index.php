<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>SHIHAB LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="Enter User Name"><br>

     	<label>User Name</label>
     	<input type="password" name="password" placeholder="Enter Password"><br>

     	<button type="submit">LOGIN</button>
     </form>
</body>
</html>