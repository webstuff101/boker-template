<?php
/**
 * POPUP GALLERY! Joomla Module 3.x 2.x
 * 
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );
require_once( dirname(__FILE__).'/assets/classe/layout.php' );
$Content = modPopupgallery_GlobbersThemesHelper::getContent( $params );
$Popupgallery_GlobbersThemesOptionsParams = modPopupgallery_GlobbersThemesHelper::getData( $params );
require( JModuleHelper::getLayoutPath( 'mod_popupgallery_globbersthemes' ) );

?>

