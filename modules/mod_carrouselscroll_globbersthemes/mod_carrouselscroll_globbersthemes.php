<?php
/**
 * Carrousel Scroll! Joomla Module for Joomla 6
 * 
 * @package     Joomla.Site
 * @subpackage  Modules.CarrouselScroll
 * @copyright   Copyright (C) Globbersthemes. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

use Joomla\CMS\Module\ModuleHelper;

// Include the helper functions only once
require_once( dirname(__FILE__).'/helper.php' );

$Content = modcarrouselscroll_GlobbersThemesHelper::getContent( $params );
$carrouselscroll_GlobbersThemesOptionsParams = modcarrouselscroll_GlobbersThemesHelper::getData( $params );

require( ModuleHelper::getLayoutPath( 'mod_carrouselscroll_globbersthemes' ) );

?>
