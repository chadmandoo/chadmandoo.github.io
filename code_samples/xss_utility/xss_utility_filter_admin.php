<?php

// Import the Xss class
use Drupal\Component\Utility\Xss;

// Get user-supplied input
$user_input = $_POST['user_input'];

// Sanitize input using the Xss::filterAdmin method
$sanitized_input = Xss::filterAdmin($user_input);

// See available tags that are allowed by the filterAdmin method
$allowed_tags = Xss::getAdminTagList();

// Display the sanitized input in the administrative interface
echo $sanitized_input;