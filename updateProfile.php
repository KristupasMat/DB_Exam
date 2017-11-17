<!DOCTYPE html>
<html>
    <head>
        <title>Add new</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php
        // Get all types from the database
        include('Db_connection.php');
        $database = new Database;
        $database->connect();
        ?>
        <h1> Update your profile </h1>
        <form action="successUpdate.php" method="post">
            <label for="hero_name">Hero Name: </label>
            <input type="text" name="hero_name" placeholder="e.g. Batman">

            <label for="age">Age </label>
            <input type="text" name="age" placeholder="e.g. 99">

            <label for="gender">Gender</label>
            <input type="text" name="gender" placeholder=" Man, woman or something else? ">

            <label for="super_powers">Super powers</label>
            <textarea name="super_powers" cols="10" rows="10" placeholder="super human strenght and speed "></textarea>
            <label for="user_picture">SuperHero Picture</label>
            <input type="text" name="user_picture" placeholder="please provide a URL">
            <input class="submitProfile" type="submit" name="submit" value="Add">
        </form>
    </body>
</html>