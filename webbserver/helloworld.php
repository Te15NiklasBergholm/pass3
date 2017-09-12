<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<title>Hello World</title>
</head>
<body>
<?php
 //int = "5";
 $a = "5";
 $b = "False";
 $c = "22";
 echo "Summan av a,b och c blir: ". ($a + $b+ $c);
?>
<?php	
	echo "<h1>Hello World!</h1>";
?>
<?php echo 

$birthday = "19990402";

$date = date("ymd D W M", strtotime($birthday));

echo $date;
?>

<?php
	$now = date("ymd", time());

	//echo $now. " ". strtotime($now);

	$diff = strtotime($now) - strtotime($birthday);

	echo "<h1>" . ($diff / 86400) . "</h1>";
?>
<form action="dates.php" method="POST">
	<input type="text" name="date">
	<input type="submit">
</form>
<?php
	if(isset($_POST["date"]))
	echo $_POST["date"];
?>

</body>
</html>