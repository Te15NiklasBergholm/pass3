<!DOCTYPE html>
<html>
<head>
	<title>SG</title>
if (isset($_POST)) {
	# code...
}
</head>
<body>
<?php
echo htmlentities($_GET["test"]);
?>
<form action="form.php" method="POST">
	<input type="text" name="message">
	<select>
</form>
<form action="form.php" method="POST">
	<input type="password" name="pass">
	<select>
</form>
<form>
	<input type="submit" name="submit">	
</form>

</body>
</html>