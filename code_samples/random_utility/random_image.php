<?php

use Drupal\Component\Utility\Random;

$random = new Random();
$imageUrl = $random->image(800, 600);
echo $imageUrl; // Outputs a URL for a placeholder image with dimensions 800x600
