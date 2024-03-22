<?php

use Drupal\Component\Utility\Random;

$random = new Random();
$object = $random->object(4);
print_r($object); // Outputs a random object with 4 properties
