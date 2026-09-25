<?php
// no direct access
defined('_JEXEC') or die ('Restricted access'); 

use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Module\ModuleHelper;

require_once dirname(__FILE__). '/helper.php';

$doc = Factory::getDocument();
$app = Factory::getApplication();
$path = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$modbase = Uri::base() . 'modules/mod_parallaxcontact';

// Use modern WebAssetManager for jQuery in Joomla 6
$doc->getWebAssetManager()->useScript('jquery');

$doc->addStylesheet($modbase.'/assets/style.css');

$format = $params->get('format', 'raw'); // debug, raw ot json
$recipient = $params->get("recipient","");
$pretext		= $params->get("pretext", "");
$name_label 	= $params->get("name_label","Name");
$email_label 	= $params->get("email_label","Email");
$message_label 	= $params->get("message_label","Message");

$enable_captcha	= true; //$params->get("enable_captcha", 1); // bool
$captcha_label 	= $params->get("captcha_label","Captcha");
$submit_label 	= $params->get("submit_label","Send");

$success_msg = $params->get("success_msg","Thank you, your message has been sent!");
$error_msg = $params->get("error_msg","Error: Please ensure all fields are completed correctly");
$submit_label = $params->get("submit_label","Send");
$subject = $params->get("subject","Request a Quote");
$ImageParallax = $params->get('ImageParallax');
$enable_jquery = $params->get("enable_jquery");

require(ModuleHelper::getLayoutPath('mod_parallaxcontact', $params->get('layout', 'default')));

?>