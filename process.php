<!DOCTYPE>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Survey Form</title>
		<style>
			form {
				width: 500px;
				height: 400px;
				border: 2px solid black;
			}
			li {
				list-style-type: none;
				margin-bottom: 5px;
			}
		</style>
	</head>
	<body>
		<h3>Submitted Information</h3>
		<ul>
			<li>Name: <?php echo $_POST['full_name']; ?> </li>
			<li>Dojo Location: <?php echo $_POST['dojo_loc']; ?> </li>
			<li>Favorite Language: <?php echo $_POST['faveLang']; ?> </li>
			<li>Comment: <?php echo $_POST['comment']; ?> </li>
		</ul>
	</body>
</html>