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
use Joomla\CMS\Language\Text;

// Get language and direction
$doc = Factory::getDocument();

?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<title><?php echo $this->error->getCode(); ?> - <?php echo $this->title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Uri::base(); ?>templates/<?php echo $this->template; ?>/css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--[if lt IE 9]>
		<script src="<?php echo Uri::base(); ?>media/jui/js/html5.js"></script>
	<![endif]-->
</head>
<body class="error">
	<center>
		<div class="errorbox">
			<div class="block">
				<h1><?php echo $this->error->getCode(); ?></h1>
				<h3><?php echo Text::_('JERROR_PAGE_NOT_FOUND'); ?></h3>
			</div>
			<p>
				<?php echo Text::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?>
				<a onclick="window.history.back()"><?php echo Text::_('JERROR_LAYOUT_GO_BACK'); ?></a>
			</p>
		</div>
	</center>
</body>
</html>
