<?php
/**
 * Gallery Grid! Joomla Module 6
 * 
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

use Joomla\CMS\Module\ModuleHelper;

// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );
require_once( dirname(__FILE__).'/assets/js/classe/layout.php' );
$Content = modGalleryGrid_GlobbersThemesHelper::getContent( $params );
$GalleryGrid_GlobbersThemesOptionsParams = modGalleryGrid_GlobbersThemesHelper::getData( $params );
require( ModuleHelper::getLayoutPath( 'mod_gallerygrid_globbersthemes' ) );

?>
