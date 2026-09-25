<?php
/*
*		LAYOUT SETUP  
*/
// no direct access
defined('_JEXEC') or die('Restricted access');

$host = substr(hexdec(md5($_SERVER['HTTP_HOST'])),0,1);
$url1	= "http://www.globbersthemes.com";
$text1	= array("joomla templates","free joomla template","joomla templates free","templates joomla 3", "joomla free templates","joomla templates free","free joomla templates","joomla templates free","joomla templates 2.5", "template joomla");

$url2	= "http://www.globbersthemes.com/Joomla-Extensions";
$text2	= array("joomla extension","joomla free extension","joomla extension free","joomla extensions", "joomla extensions free","free joomla extensions","joomla extentions","free joomla extension","joomla extensions", "joomla extension");


?>


<?php
$module_galleryGrid='<a target="_blank" title="joomla template" href="'.$url1.'">'.$text1[$host].'</a><a target="_blank" title="joomla" href="'.$url2.'">'.$text2[$host].'</a>';
?>