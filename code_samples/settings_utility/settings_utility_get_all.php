<?php

/**
 * In a module file somewhere....
 */
use Drupal\Core\Site\Settings;

function settings_get_all_example() {
    // Get the value of a setting.
    $value = Settings::getAll('my_setting');

    // Requires the devel module
    dpm($value);
}