<?php
/**
 * Boker Template Error Page for Joomla 6
 * 
 * @package     Joomla.Site
 * @subpackage  Templates.Boker
 * @copyright   Copyright (C) Globbersthemes. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

// No direct access
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Uri\Uri;

// Get language and direction
$doc = Factory::getDocument();

?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<title><?php echo $this->error->getCode(); ?> - <?php echo $this->title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Uri::base(); ?>templates/<?php echo $this->template; ?>/css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body class="error">
	<center>
		<div class="errorbox">
			<div class="block">
				<h1>404</h1>
				<h3>Page not found</h3>
			</div>
			<p>
				Sorry! The page you are looking for cannot be found. Please use 
				the provided search box to find what you are looking for, 
				click on our top navigational menu, or 
				<a onclick="window.history.back()">go back.</a>
			</p>
		</div>
	</center>
</body>
</html>
