<?php

use Drupal\Component\Utility\Random;

$random = new Random();
$name = $random->name('male');
echo $name; // outputs a male name, such as "John Smith"
