<?php

declare(strict_types=1);

//Function that sorts the posts array by date with latest date first

function sortByDate($a, $b) {
    return strtotime ($a['date']) < strtotime ($b['date']);
}

usort($posts, 'sortByDate');

?>
