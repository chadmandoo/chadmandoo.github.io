<?php

// Import the Xss class
use Drupal\Component\Utility\Xss;

function xss_sanitize_user_input() {
    // Get user-supplied input
    $user_input = $_POST['user_input'];

    // Sanitize input using the Xss::filter method
    $sanitized_input = Xss::filter($user_input);

    // Display the sanitized input on the website
    echo $sanitized_input;
}