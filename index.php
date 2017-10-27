<?php
declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
        shrink-to-fit=no">
        <title>Good News</title>
        <link href="style.css" type="text/css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Bevan|Oswald|Source+Serif+Pro" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <h1>MAKE NEWS FEED GREAT AGAIN!</h1>
        </div>
        <?php foreach ($posts as $post): ?> <!-- Loop to create one news container for each element in the array -->
                <div class="newsContainer">
                    <div class="imgContainer">
                        <img class="profileImg" src="<?php echo $post['author']
                        ['image']?>" alt="Profile image"> <!-- Selects the element image in the author array within the posts array and uses it as the link to the image-->
                    </div>
                    <div class="textContainer">
                        <h2> <?php echo $post['title']?></h2> <!-- Prints the title-element in the posts array as a H2 header -->
                        <p> by <?php echo $post['author']['name'].' | '.
                        $post['date']?></p> <!-- Concatinates the author name and date with a pipe between them -->
                        <p> <?php echo $post['content']?></p> <!-- Prints the content-element in the posts array as paragraph text -->
                    </div>
                    <input class="like_input" value="0" /> <!-- Input field to display number of likes. Set to the original value of 0. Used in the script file -->
                    <button class="like_button" type="submit"> <!-- Button for counting up likes. Used in the script file -->
                        <img class="likeImg"src="img/like.png" alt="submit"/> <!-- Sets the button to an image -->
                    </button>
                </div>
            <?php endforeach; ?> <!-- Ends the foreach loop -->
            <script src="script.js"> </script>
    </body>
</html>
