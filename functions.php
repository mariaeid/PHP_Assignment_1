<?php

declare(strict_types=1);

function sortByDate($a, $b) {
    return (int) $a['date'] < (int) $b['date'];
}

usort($posts, 'sortByDate');


 function hello(){
     echo "Hello";
 }
