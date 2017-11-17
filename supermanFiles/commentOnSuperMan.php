<?php
// Get all types from the database
include('../Db_connection.php');
$database = new Database;
$database->connect();
?>
<form action="supermanFiles/CommentSuccessSuperMan.php" method="post">
    <label for="comment">Write a comment</label>
    <textarea name="comment" cols="10" rows="10" placeholder="Nice powers, mate!"></textarea>
    <input class="submitProfile" type="submit" name="submit" value="Add">
</form>
