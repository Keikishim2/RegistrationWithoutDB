<?php
session_start();
if(!isset($_SESSION["msgs"])){
	$_SESSION["msgs"] = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Without DB</title>
	<link rel="stylesheet" type="text/css" href="reg.less">
</head>
<body>
	<div id = "wrapper">
	<div class='row'>
	<div class='column'>
		<h1>Welcome to Village88</h1>
		<p>Happy Coding!</p>
		<img src='ninja.gif' alt='ninja'/>
		<img src='v88.jpg' alt='v88' class='pic'/>
	</div>
		<form action="nodb.php" method="post">
			<h2>Please Register Below:</h2>
			<label>Email: <input type="text" name="email"></label>
			<label>First Name: <input type="text" name="f_name"></label>
			<label>Last Name: <input type="text" name="l_name"></label>
			<label>Password: <input type="password" name="pw"></label>
			<label>Confirm Password: <input type="password" name="conf_pw"></label>
			<label>Birthdate: <input type="text" name="birthDate"></label>
			<button>Submit</button>
		</form>
		<?php
			if(isset($_SESSION["msgs"])){
				foreach($_SESSION["msgs"] as $msg){
					echo "<p class='error'>".$msg."</p>";
					
				}
				session_destroy();
			}		
			?>
	
	</div>
</div>
</body>
</html>