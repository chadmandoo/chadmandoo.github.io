<?php

/**
 * In your settings.php code
 */

if (getenv('MY_SUPER_SECRET_API_KEY')) {
    $settings['super_secret_api_key'] = getenv('MY_SUPER_SECRET_API_KEY');
}