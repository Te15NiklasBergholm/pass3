<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
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
</body>
</html>