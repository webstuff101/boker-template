<?php

/**

 * Revol Slider Joomla 6

 * Version 1.0

 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

use Joomla\CMS\Module\ModuleHelper;

// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );
require_once( dirname(__FILE__).'/assets/classe/layout.php' );

$Content = modRevolSliderHelper::getContent( $params );
$RevolSliderOptionsParams = modRevolSliderHelper::getData( $params );
require( ModuleHelper::getLayoutPath( 'mod_revol_slider' ) );

?>