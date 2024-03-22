<?php

use Drupal\Component\Utility\Random;

$random = new Random();
$bool = $random->boolean();
if ($bool) {
  // do something
} else {
  // do something else
}
