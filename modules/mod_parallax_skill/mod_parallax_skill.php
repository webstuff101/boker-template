<?php

/**
 * Parallax Skill Joomla Module for Joomla 6
 * Version 1.0
 * 
 * @package     Joomla.Site
 * @subpackage  Modules.ParallaxSkill
 * @copyright   Copyright (C) Globbersthemes. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

use Joomla\CMS\Module\ModuleHelper;

// Include the helper functions only once
require_once( dirname(__FILE__).'/helper.php' );

$Content = modParallaxSkillHelper::getContent( $params );
$ParallaxSkillOptionsParams = modParallaxSkillHelper::getData( $params );

require( ModuleHelper::getLayoutPath( 'mod_parallax_skill' ) );
?>