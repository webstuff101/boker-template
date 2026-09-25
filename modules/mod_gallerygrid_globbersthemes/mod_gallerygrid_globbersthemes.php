<?php
/**
 * Gallery Grid! Joomla Module 3.x 2.x
 * 
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );
require_once( dirname(__FILE__).'/assets/js/classe/layout.php' );
$Content = modGalleryGrid_GlobbersThemesHelper::getContent( $params );
$GalleryGrid_GlobbersThemesOptionsParams = modGalleryGrid_GlobbersThemesHelper::getData( $params );
require( JModuleHelper::getLayoutPath( 'mod_gallerygrid_globbersthemes' ) );

?>

