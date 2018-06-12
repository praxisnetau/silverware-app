<?php

/**
 * This file is part of {app-title}.
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

namespace {
    
    use SilverStripe\CMS\Model\SiteTree;
    
    /**
     * An extension of the site tree class for the standard SilverStripe page.
     *
     * As SilverStripe relies on having a global Page class available, this class is
     * intentionally defined without a namespace in order to keep SilverStripe happy.
     *
     * @package {app-namespace}
     * @author {author-name} <{author-email}>
     * @copyright {year} {author-company}
     * @license {license-link} {license-name}
     * @link {project-link}
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
    
}
