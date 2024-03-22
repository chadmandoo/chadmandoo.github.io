<?php

use Drupal\Component\Utility\Random;

$random = new Random();
$paragraphs = $random->paragraphs(5);
echo $paragraphs; // Outputs 5 random paragraphs
