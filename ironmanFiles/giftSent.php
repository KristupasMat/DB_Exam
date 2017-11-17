<!DOCTYPE html>
<html>
<head>
	<title>processing</title>
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
	$sql = "UPDATE users SET gift_name = ? WHERE hero_id = 1";
	
	// Secondly, add values
	$values = array(
		$_POST['gift_name']
	);

	// Call prepared function to execute the above
	$database->prepared($sql,$values);

?>
<p>Gift was stored in the database!
	<a href="../profiles.php" class="notice">Back to Profiles</a>
</p>
</body>
</html>