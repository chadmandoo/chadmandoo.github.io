<?php

use Drupal\Component\Utility\Random;

$random = new Random();
$number = $random->numeric(1, 10);
echo $number; // outputs a random number between 1 and 10, such as 7
