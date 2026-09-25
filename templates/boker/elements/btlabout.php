<?php
/**
 * Boker Template About Field for Joomla 6
 * 
 * @package     Joomla.Site
 * @subpackage  Templates.Boker.Elements
 * @copyright   Copyright (C) Globbersthemes. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Form\FormField;

class BokerFormFieldBTLAbout extends FormField
{
	public function getTemplateName()
	{
		$templateName = end(explode(DIRECTORY_SEPARATOR, str_replace(['\\elements', '/elements'], '', dirname(__DIR__))));
		return $templateName;
	}

	protected function getInput()
	{
		$doc = Factory::getDocument();
		$templateName = $this->getTemplateName();

		$doc->addStyleSheet(Uri::root() . 'templates/' . $templateName . '/admin/css/btl_admin.css');
		
		// For Joomla 6, we use modern asset loading
		// The version check for Joomla < 3.0 is no longer needed as Joomla 6 requires at least PHP 8.1
		$doc->addScript(Uri::root() . 'templates/' . $templateName . '/admin/js/btl_slider.js');
		$doc->addScript(Uri::root() . 'templates/' . $templateName . '/admin/js/btl_admin.js');
		
		return '';
	}
}
