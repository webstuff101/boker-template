<?php

/**
 * Parallax Skill Joomla 2.5 - 3.x | Globbersthemes.com
 * Version 1.0
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );

$Content = modParallaxSkillHelper::getContent( $params );
$ParallaxSkillOptionsParams = modParallaxSkillHelper::getData( $params );
require( JModuleHelper::getLayoutPath( 'mod_parallax_skill' ) );
?>