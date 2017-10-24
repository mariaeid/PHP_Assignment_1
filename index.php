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
        <?php foreach ($posts as $post): ?>
                <div class="newsContainer">
                    <div class="imgContainer">
                        <img class="profileImg" src="<?php echo $post['image']?>" alt="Profile image">
                    </div>
                    <div class="textContainer">
                        <h2> <?php echo $post['title']?></h2>
                        <p> by <?php echo $post['author']['name'].' | '.$post['date']?></p>
                        <p> <?php echo $post['content']?></p>
                    </div>
                    <input class="like_input" value="0" />
                    <button class="like_button" type="submit">
                        <img class="likeImg"src="img/like.png" alt="submit"/>
                    </button>
                </div>
            <?php endforeach; ?>
    <script src="script.js"> </script>
    </body>
</html>
