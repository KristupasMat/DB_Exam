<?php
// Get all types from the database
include('../Db_connection.php');
$database = new Database;
$database->connect();
$sql = 'SELECT * FROM gifts';

$gifts = $database->query($sql);

?>
<form action="wonderwomanFiles/giftSent.php" method="post">
    <label for="gift_name">Choose a gift to sent!</label>
    <select name="gift_name" >
        <?php 
        foreach ($gifts as $gift_name) {
        ?>
        <option value="<?php echo $gift_name['gift_name'];?>"><?php echo $gift_name['gift_name'];?></option>
        <?php
        }

        ?>
    </select>
    <input type="submit" name="submit" value="Add">
</form>
