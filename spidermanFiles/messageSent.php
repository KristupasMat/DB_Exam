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
    
	$sql = "UPDATE users SET message = ? WHERE hero_id = 2 ";
	
	$values = array(
		$_POST['message']
	);
	$database->prepared($sql,$values);

?>
<p>Message was sent to database!
	<a href="../profiles.php">Back to profiles</a>
</p>
</body>
</html>