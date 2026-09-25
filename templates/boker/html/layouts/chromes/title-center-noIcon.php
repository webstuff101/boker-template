<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2025 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$module  = $displayData['module'];
$params  = $displayData['params'];
$attribs = $displayData['attribs'];

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg.  To render a module mod_test in the sliders style, you would use the following include:
 * <jdoc:include type="module" name="test" style="slider" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 */

/*
 * none (output raw module content)
 */

	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	$headerClass = htmlspecialchars($params->get('header_class', ''), ENT_QUOTES, 'UTF-8');
	$moduleClass = htmlspecialchars($params->get('moduleclass_sfx')); 

	if (!empty ($module->content)) { ?>

		<div class="moduletable-icon-noicon <?php if ($moduleClass) echo ' '.$moduleClass; ?>">
			<?php if ($module->showtitle != 0) { ?>
			<h3><?php echo $module->title; ?> </h3>
			<div class="clr"></div><br />
			<?php } ?>
			
			<?php echo $module->content; ?>
		</div>

	<?php }

?>