<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Date a SuperHero!</title>
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>

        <h1> Date a Super Hero! </h1>
        <h2>Find the most suitable super human partner and start slaying the enemies together!</h2>
        <div id="yourProfile">
            <a href="index.php"> Go back to your profile </a>
        </div>

        <?php 
        include('Db_connection.php');
        $database = new Database;
        $database->connect();

        $sql = 'SELECT * FROM users';

        $users = $database->query($sql);
        
        

        ?>
        
        <section class="peopleProfiles">
            <h3>User Profiles</h3>

            <?php 

            foreach($users as $user){
            ?>
                <div class="singleProfile">
                    <h3>I am <?php echo $user['hero_name'];?></h3>
                    <p>Age: <?php echo $user['age']; ?> years old</p>
                    <p>Gender: <?php echo $user['gender'];?></p>
                    <p>In my arsenal I have: <?php echo '<br>' . $user['super_powers']; ?> </p>
                    <div class="profileChoices">
                        <button class="comment"> Comment Profile</button>
                        <button class="like"> Like </button>
                        <button class="sendMessage"> Send a Private message</button>
                    </div>
                        <h5>Comments</h5>
                        <p><?php echo $user['comment']; ?></p>
                        
                </div>
                <img class="imagesUsers" src="<?php echo $user['user_picture']?>" alt="superHero picture">
                <div class="likeCount">
                    <p>Like received: </p>
                    <span class="likeAmount">0</span>
                </div>
                <div class="commentBox">
                    
                </div>
            <?php


            }

            ?>

        </section>

        <script src="script.js"></script>
        
    </body>
</html>
