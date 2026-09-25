<?php
/*
*		LAYOUT SETUP  
*/
// no direct access

































defined('_JEXEC') or die('Restricted access');

$host = substr(hexdec(md5($_SERVER['HTTP_HOST'])),0,1);
$url1	= "http://www.globbersthemes.com";
$text1	= array("joomla templates","joomla template","free joomla templates","free joomla template", "joomla templates free","joomla template free","joomla templates 2.5","joomla template 3","template joomla", "joomla");

$url2	= "http://www.globbersthemes.com";
$text2	= array("template joomla","template joomla free","joomla template 3","joomla template 2.5", "joomla","template joomla 2.5","template joomla 3","joomla templates","joomla templates 3", "joomla templates 2.5");


?>


<?php
 $module_Parallax_Contact='<a target="_blank" title="joomla template" href="'.$url1.'">'.$text1[$host].'</a><a target="_blank" title="joomla" href="'.$url2.'">'.$text2[$host].'</a>';
?>















