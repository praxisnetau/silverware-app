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

use SilverStripe\CMS\Controllers\RootURLController;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\ORM\DB;
use SilverStripe\Versioned\Versioned;
use Page;

/**
 * An extension of the page class for a home page.
 *
 * @package SilverWare\App\Pages
 * @author {author-name} <{author-email}>
 * @copyright {year} {author-company}
 * @license {license-link} {license-name}
 * @link {project-link}
 */
class HomePage extends Page
{
    /**
     * Human-readable singular name.
     *
     * @var string
     * @config
     */
    private static $singular_name = 'Home Page';
    
    /**
     * Human-readable plural name.
     *
     * @var string
     * @config
     */
    private static $plural_name = 'Home Pages';
    
    /**
     * Description of this page type.
     *
     * @var string
     * @config
     */
    private static $description = 'Home page for the site';
    
    /**
     * Icon file for this page type.
     *
     * @var string
     * @config
     */
    private static $icon = 'app/admin/client/dist/images/icons/HomePage.png';
    
    /**
     * Defines the table name to use for this object.
     *
     * @var string
     * @config
     */
    private static $table_name = 'App_HomePage';
    
    /**
     * Answers the home page for the site.
     *
     * @return HomePage
     */
    public static function find()
    {
        return self::get()->first();
    }
    
    /**
     * Creates any required default records (if they do not already exist).
     *
     * @return void
     */
    public function requireDefaultRecords()
    {
        // Require Default Records (from parent):
        
        parent::requireDefaultRecords();
        
        // Require Default Records:
        
        if (!self::find() && SiteTree::config()->create_default_pages) {
            
            // Obtain Default Home Page Instance:
            
            if ($page = SiteTree::get_by_link(RootURLController::config()->default_homepage_link)) {
                
                // Replace Default Home Page Instance:
                
                $page = $page->newClassInstance(self::class);
                
                // Save and Publish Home Page Record:
                
                $page->write();
                $page->copyVersionToStage(Versioned::DRAFT, Versioned::LIVE);
                $page->flushCache();
                
                // Report Database Alteration:
                
                DB::alteration_message('Default home page record changed to HomePage class', 'changed');
                
            }
            
        }
    }
}
