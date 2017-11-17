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
	include('Db_connection.php');
	$database = new Database;
	$database->connect();


	//- - - Add new movie - - - 

	// First, prepare the SQL
	$sql = "INSERT INTO myuser (
							hero_name, 
							age, 
							gender, 
							super_powers, 
							user_picture
						) 
			VALUES (?,?,?,?,?)";
	
	// Secondly, add values
	$values = array(
		$_POST['hero_name'],
		$_POST['age'],
		$_POST['gender'],
		$_POST['super_powers'],
		$_POST['user_picture']
	);

	// Call prepared function to execute the above
	$database->prepared($sql,$values);

?>
<p>Congratz! You published your profile!
	<a href="index.php">Back</a>
</p>
</body>
</html>