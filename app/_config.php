<?php

/**
 * {app-title} application configuration file.
 *
 * PHP version >=5.6.0
 *
 * For full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code.
 *
 * @package {app-namespace}
 * @author {author-name} <{author-email}>
 * @copyright {year} {author-company}
 * @license {license-link} {license-name}
 * @link {project-link}
 */

use SilverStripe\Security\Member;
use SilverStripe\Security\PasswordValidator;

// Define Application Constants:

if (!defined('APP_DIR')) {
    define('APP_DIR', basename(__DIR__));
}

if (!defined('APP_PATH')) {
    define('APP_PATH', realpath(__DIR__));
}

// Define Member Password Validator:

$validator = new PasswordValidator();
$validator->setMinLength(8);
$validator->setHistoricCount(6);
Member::set_password_validator($validator);
