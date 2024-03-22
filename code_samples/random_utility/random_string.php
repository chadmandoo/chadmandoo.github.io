<?php

use Drupal\Component\Utility\Random;

$random = new Random();
$string = $random->string(8, 'abcdefghijklmnopqrstuvwxyz');
echo $string; // outputs a random lowercase string with length 8, such as "xptzfhkd"
