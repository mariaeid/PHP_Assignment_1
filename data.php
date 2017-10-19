<?php
// This is the file where you can keep all your data such as articles and
// authors.
declare(strict_types=1);

$content1 = "Both the authors and the news feed items should be stored in Arrays in a structure that is simple to use in your code and that's easily understandable. The authors and news feed items don't have to be within the same Array, but some sort of connection should exist between a news feed item and it's author.";
$content2 = "Never the less the news feed items should be ordered based on the published date, so the latest news feed item should go on top and vice versa.";
$content3 = "Blabla";

$posts = [
  ['title' => 'News1',
  'content' => $content1,
  'author' => 'James Brown',
  'date' => '2017-01-01'],

  ['title' => 'News2',
  'content' => $content2,
  'author' => 'Hanna Bell',
  'date' => '2015-01-01'],

  ['title' => 'News3',
  'content' => $content3,
  'author' => 'Annabelle',
  'date' => '2016-01-01'],

];
