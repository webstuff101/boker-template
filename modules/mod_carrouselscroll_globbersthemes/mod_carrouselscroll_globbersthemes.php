<?php
/**
 * Carrousel Scroll! Joomla Module 3.x 2.x
 * 
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );
$Content = modcarrouselscroll_GlobbersThemesHelper::getContent( $params );
$carrouselscroll_GlobbersThemesOptionsParams = modcarrouselscroll_GlobbersThemesHelper::getData( $params );
require( JModuleHelper::getLayoutPath( 'mod_carrouselscroll_globbersthemes' ) );

?>

