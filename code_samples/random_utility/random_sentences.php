<?php

use Drupal\Component\Utility\Random;

$random = new Random();
$sentences = $random->sentences(2);
echo $sentences; // Outputs 2 random sentences
