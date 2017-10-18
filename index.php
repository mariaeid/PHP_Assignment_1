<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP-only file.

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
    </head>
    <body>
        <?php foreach ($newsFeeds as $newsFeed): ?>
            <div class="newsContainer">
                <h1> <?php echo $newsFeed['title']?></h1>
                <p> <?php echo $newsFeed['author']?></p>
            </div>
        <?php endforeach; ?>
    </body>
</html>
