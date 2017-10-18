<?php
// This is the file where you can keep all your data such as articles and
// authors.
declare(strict_types=1);

$authors = [
    'Kalle Karlsson',
    'Olle Olsson'
];

$titles = [
    'Att koka soppa på en spik',
    'Eternitplattor gör dig smalare'
];

$posts = [
    ['date' => '2017-01-01'],
    ['date' => '2016-02-01'],
    ['date' => '2015-01-01'],
    ['date' => '2014-01-01']
];

$newsFeeds = [
    ['title' => $titles[0], 'author' => $authors[0]],
    ['title' => $titles[1], 'author' => $authors[1]],
];
