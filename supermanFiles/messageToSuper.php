<?php
// Get all types from the database
include('../Db_connection.php');
$database = new Database;
$database->connect();
?>
<form action="supermanFiles/messageSent.php" method="post">
    <label for="message">Write a private message</label>
    <textarea name="message" cols="10" rows="10" placeholder="I want to meet with you, ASAP!"></textarea>
    <input class="submitProfile" type="submit" name="submit" value="Send!">
</form>
