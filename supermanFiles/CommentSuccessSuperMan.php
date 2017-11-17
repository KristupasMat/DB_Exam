<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	
	include('../Db_connection.php');
	$database = new Database;
	$database->connect();

	$sql = "UPDATE users SET comment = ? WHERE hero_id = 3 ";
	$values = array(
		$_POST['comment']
	);
	$database->prepared($sql,$values);

?>
<p>You have commented!
	<a href="../profiles.php">Back to profiles</a>
</p>
</body>
</html>