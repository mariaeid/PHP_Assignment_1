<?php
// This is the file where you can keep all your functions.

declare(strict_types=1);

function sortByDate($a, $b) {
    return (int) $a['date'] < (int) $b['date'];
}

usort($posts, 'sortByDate');


 function hello(){
     echo "Hello";
 }
