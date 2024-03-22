<?php

use Drupal\Component\Utility\Random;

$random = new Random();
$machineName = $random->machineName();
echo $machineName; // Outputs a random machine-readable name, such as "node_3f94"
