<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP-only file.

require __DIR__.'/data.php';
require __DIR__.'/functions.php';
require __DIR__.'/script.html';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
        shrink-to-fit=no">
        <title>Good News</title>
        <link href="style.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <?php foreach ($posts as $post): ?>
                <div class="newsContainer">
                    <h1> <?php echo $post['title']?></h1>
                    <p> <?php echo $post['content']?></p>
                    <p> <?php echo $post['author']?></p>
                    <p> <?php echo $post['date']?></p>
                    <label for="like">Likes</label>
                    <input id="like" value="0" />
                    <button id="up" onclick="likeCounter(1)">Like</button>
                </div>
            <?php endforeach; ?>
    </body>
</html>
