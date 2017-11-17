<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Date a SuperHero!</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>

        <h1> Date a Super Hero! </h1>
        <h2>Find the most suitable super human partner and start slaying the enemies together!</h2>
        <h4>NOTE: You can only add one profile! Other attempts will be ignored!</h4>

        <?php 
        include('Db_connection.php');
        $database = new Database;
        $database->connect();

        $sql = 'SELECT * FROM myuser LIMIT 1';

        $users = $database->query($sql);

        ?>
        <section>
            <a href='addProfile.php'><button class="addProfile">Add Profile</button></a>
            <a href="updateProfile.php"><button class="updateProfile">Update your Profile</button></a>
            <div class="userProfile">
                <?php 

                foreach($users as $user){
                ?>

                <div class="personalProfile">
                    <h3>I am <?php echo $user['hero_name'];?></h3>
                    <p>Age: <?php echo $user['age']; ?> years old</p>
                    <p>Gender: <?php echo $user['gender'];?></p>
                    <p>In my arsenal I have: <?php echo '<br>' . $user['super_powers']; ?> </p>
                </div>
                <img class="newUser" src="<?php echo $user['user_picture']?>" alt="superHero picture">
                <?php
                }

                ?>
            </div>
            <div id="viewOthers">
                <a href="profiles.php">View other profiles!</a>
            </div>
        </section>
        <script src="script.js"></script>
    </body>
</html>
