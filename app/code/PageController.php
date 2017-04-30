<?php

/**
 * This file is part of SilverWare.
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

use SilverStripe\CMS\Controllers\ContentController;

/**
 * An extension of the content controller class for the standard SilverStripe page controller.
 *
 * As SilverStripe relies on having a global PageController class available, this class is
 * intentionally defined without a namespace in order to keep SilverStripe happy.
 *
 * @package SilverWare\App
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2017 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-app
 */
class PageController extends ContentController
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
