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

use SilverStripe\CMS\Model\SiteTree;

/**
 * An extension of the site tree class for the standard SilverStripe page.
 *
 * As SilverStripe relies on having a global Page class available, this class is
 * intentionally defined without a namespace in order to keep SilverStripe happy.
 *
 * @package SilverWare\App
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2017 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-app
 */
class Page extends SiteTree
{
    /**
     * Human-readable singular name.
     *
     * @var string
     * @config
     */
    private static $singular_name = 'Page';
    
    /**
     * Human-readable plural name.
     *
     * @var string
     * @config
     */
    private static $plural_name = 'Pages';
    
    /**
     * Description of this object.
     *
     * @var string
     * @config
     */
    private static $description = 'Standard content page';
    
    /**
     * Icon file for this page type.
     *
     * @var string
     * @config
     */
    private static $icon = 'app/admin/client/dist/images/icons/Page.png';
    
    /**
     * Defines the table name to use for this object.
     *
     * @var string
     * @config
     */
    private static $table_name = 'Page';
}
