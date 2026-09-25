<?php
/**
 cover box for joomla 6
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

use Joomla\CMS\Module\ModuleHelper;

// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$Content = modCoverboxHelper::getContent( $params );
$CoverboxOptionsParams = modCoverboxHelper::getData( $params );
require( ModuleHelper::getLayoutPath( 'mod_coverbox' ) );

?>