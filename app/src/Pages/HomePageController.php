<?php

/**
 * This file is part of {app-title}.
 *
 * PHP version >=5.6.0
 *
 * For full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code.
 *
 * @package SilverWare\App\Pages
 * @author {author-name} <{author-email}>
 * @copyright {year} {author-company}
 * @license {license-link} {license-name}
 * @link {project-link}
 */

namespace SilverWare\App\Pages;

use PageController;

/**
 * An extension of the page controller class for a home page controller.
 *
 * @package SilverWare\App\Pages
 * @author {author-name} <{author-email}>
 * @copyright {year} {author-company}
 * @license {license-link} {license-name}
 * @link {project-link}
 */
class HomePageController extends PageController
{
    /**
     * Defines the URL routes handled by this controller.
     *
     * @var array
     * @config
     */
    private static $url_handlers = [
        
    ];
    
    /**
     * Defines the actions permitted for this controller.
     *
     * @var array
     * @config
     */
    private static $allowed_actions = [
        
    ];
    
    /**
     * Performs initialisation before any action is called on the receiver.
     *
     * @return void
     */
    protected function init()
    {
        parent::init();
    }
}
