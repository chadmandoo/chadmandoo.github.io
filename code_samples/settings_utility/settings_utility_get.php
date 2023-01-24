<?php

/**
 * In a module file somewhere....
 */
use Drupal\Core\Site\Settings;

function settings_get_example() {
    // Get the value of a setting.
    $value = Settings::get('my_setting');

    // Get the value of a setting, or a default value if it is not set.
    $value = Settings::get('my_setting', 'default_value');

    // Get the value of a setting, or a default value if it is not set.
    // The default value is only used if the setting is not set, not if it is set
    // to NULL.
    $value = Settings::get('my_setting', NULL, TRUE);
}