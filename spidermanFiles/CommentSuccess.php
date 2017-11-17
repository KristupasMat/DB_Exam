<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	
	// check what is received through POST
	// var_dump($_POST);
	include('../Db_connection.php');
	$database = new Database;
	$database->connect();


	//- - - Add new movie - - - 

	// First, prepare the SQL
	$sql = "UPDATE users SET comment = ? WHERE hero_id = 2 ";
	
	// Secondly, add values
	$values = array(
		$_POST['comment']
	);

	// Call prepared function to execute the above
	$database->prepared($sql,$values);

?>
<p>You have commented!
	<a href="../profiles.php">Back to profiles</a>
</p>
</body>
</html>