<?php
/**
 * @author    WP-Cloud <code@wp-cloud.de>
 * @copyright Copyright (c) 2015-2017 WP-Cloud
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @package   phpMemcachedAdmin
 */

# Constants declaration
define('CURRENT_VERSION', '1.3.0-dev');

# PHP < 5.3 Compatibility
if ( ! defined('ENT_IGNORE')) {
    define('ENT_IGNORE', 0);
}

# Compatibilty with php that doesn't support anonymous function
function custom_loader($class) {
	require_once str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
}

spl_autoload_register('custom_loader');

