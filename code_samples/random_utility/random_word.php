<?php

use Drupal\Component\Utility\Random;

$random = new Random();
$word = $random->word(6);
echo $word; // outputs a random 6-letter word, such as "guitar"
