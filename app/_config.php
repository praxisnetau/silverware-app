<?php

/**
 * SilverWare application configuration file.
 *
 * PHP version >=5.6.0
 *
 * For full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code.
 *
 * @package SilverWare\App
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2017 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-app
 */

// Define Globals:

global $project, $database;

// Define Project Name:

$project = 'app';

// Define Database Name:

$database = '{database}';

// Configure Environment:

require_once 'conf/ConfigureFromEnv.php';

// Define Application Constants:

if (!defined('APP_DIR')) {
    define('APP_DIR', basename(__DIR__));
}

if (!defined('APP_PATH')) {
    define('APP_PATH', realpath(__DIR__));
}
