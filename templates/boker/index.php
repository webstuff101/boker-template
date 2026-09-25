<?php
/**
 * Boker Template for Joomla 6
 * 
 * @package     Joomla.Site
 * @subpackage  Templates.Boker
 * @copyright   Copyright (C) Globbersthemes. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Language\Text;

// Initialize
$app           = Factory::getApplication();
$doc           = Factory::getDocument();
$user          = Factory::getUser();
$template      = $app->getTemplate(true);
$params        = $template->params;
$config        = Factory::getConfig();
$tplName       = $template->template;
$framework     = 'templates/' . $tplName . '/framework/';
$csite_name    = $config->get('sitename');
$logo          = $params->get('logo');

// Add Stylesheets
HTMLHelper::_('bootstrap.framework');
HTMLHelper::_('jquery.framework');

$doc->addStyleSheet(Uri::base() . 'templates/' . $tplName . '/css/fontawesome/css/font-awesome.css');
$doc->addStyleSheet(Uri::base() . 'templates/' . $tplName . '/css/style.css');
$doc->addStyleSheet(Uri::base() . 'templates/' . $tplName . '/css/nav-top.css');
$doc->addStyleSheet(Uri::base() . 'templates/' . $tplName . '/css/responsive.css');
$doc->addStyleSheet(Uri::base() . 'templates/' . $tplName . '/css/animate.css');
$doc->addStyleSheet(Uri::base() . 'templates/' . $tplName . '/css/prettyphoto/pretty.css');
$doc->addStyleSheet(Uri::base() . 'templates/' . $tplName . '/css/grid-responsive.css');
$doc->addStyleSheet(Uri::base() . 'templates/' . $tplName . '/css/ionicons.css');

// Count modules
$left  = $this->countModules('left');
$right = $this->countModules('right');

?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	
	<!-- Make the web page appear 100% instead of scaling -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!-- Add to Home Screen for iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	
	<link rel="icon" type="image/gif" href="<?php echo Uri::base(); ?>templates/<?php echo $this->template; ?>/favicon.gif" />
	
	<style type="text/css">
		body {
			font-family:<?php echo $params->get('body_font') ?>;
			background-color:<?php echo $params->get('body_background_color')?>; 
			color:<?php echo $params->get('body_color')?>; 
		}

		a {
			color:<?php echo $params->get('body_link_color')?>;
			text-decoration:<?php echo $params->get('body_underline', 'underline')?>;
			font-family:<?php echo $params->get('links_font', 'Arial, sans-serif')?>;
		}

		a:hover {
			color:<?php echo $params->get('body_link_hover_color')?>;
			text-decoration:<?php echo $params->get('body_hover_underline')?>;
		}

		#sitename a {
			font-size:<?php echo $params->get('logo_font_size')?>;
			color:<?php echo $params->get('logo_color')?>;
			text-transform:<?php echo $params->get('logo_style')?>;
		}

		#sitename a:hover {
			color:<?php echo $params->get('logo_color_hover')?>;
		}

		h1 {
			color:<?php echo $params->get('h1_color')?>;
		}

		h2 {
			color:<?php echo $params->get('h2_color')?>;
		}

		h3 {
			color:<?php echo $params->get('h3_color')?>;
		}

		h4,h5,h6 {
			color:<?php echo $params->get('h_color')?>;
		}

		#navigation ul.menu li a {
			font-family:<?php echo $params->get('top_menu_font')?> !important;
		}
		
		#navigation ul.menu li a {
			color:<?php echo $params->get('topmenu_color_links')?> !important;
		}

		#navigation ul.menu li a:hover  {
			color:<?php echo $params->get('topmenu_color_links_hover')?> !important;
		}

		#navigation ul.menu ul li a {
			color:<?php echo $params->get('topmenu_color_sub_links')?> !important;
		}
		
		#navigation li.deeper.parent ul.navig li a:hover, #navigation ul li.current.active.deeper.parent ul li a:hover, #navigation ul li.active.deeper.parent ul li.current.active a:hover, #navigation ul li.active.deeper.parent ul li a:hover {
			color:<?php echo $params->get('topmenu_color_sub_links_hover')?> !important;
		}
		
		h1 {font-family:<?php echo $params->get('h1_font', 'Arial, sans-serif')?>;}
		h2 {font-family:<?php echo $params->get('h2_font', 'Arial, sans-serif')?>;}
		h3 {font-family:<?php echo $params->get('h3_font', 'Arial, sans-serif')?>;}
		h4 {font-family:<?php echo $params->get('h4_font', 'Arial, sans-serif')?>;}
		h5 {font-family:<?php echo $params->get('h5_font', 'Arial, sans-serif')?>;}
		h6 {font-family:<?php echo $params->get('h6_font', 'Arial, sans-serif')?>;}
		
		#sitename a:after {
			content: '<?php echo $params->get('slogan')?>';	
		}
	</style>

</head>
<body>

<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
<div id="menuModal">
			<div class="modal-content">
				<div class="container_12">
					<div class="grid_12">
						<div id="btn-close-modal" class="close-menuModal modCloseButton"><span></span></div>
					</div>
				</div>
				<div id="navigation-res">
					<div class="container_12">
						<div class="grid_12">
							<jdoc:include type="modules" name="position-1" style="none" />  
						</div>
					</div>
				</div>
			</div> 
		</div>

<header class="header" id="header">
			<div class="container_12">
				<div class="grid_3">
					<div id="sitename">
						<a href="/">
							<?php if ($logo) : ?>
								<img src="<?php echo Uri::base() . '/' . htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($params->get('sitetitle'));?>" />
							<?php endif;?>
							<?php if (!$logo && $params->get('sitetitle')) : ?>
								<?php echo htmlspecialchars($params->get('sitetitle'));?>
							<?php elseif (!$logo && $csite_name) : ?>
								<?php echo htmlspecialchars($csite_name);?>
							<?php endif; ?>
						</a>
					</div>
				</div>
				<div class="grid_8">
					<div id="nav-top">
						<div id="navigation"> 
							<jdoc:include type="modules" name="position-1" style="none"/>
						</div>
					</div>
				</div>
				<div class="grid_1">
					<div class="menuButon">
						<a id="openMenu" href="#menuModal"></a>
					</div>
				</div> 
			</div>
		</header>
<?php if ($this->countModules('slideshow')) : ?>
	<div id="slideshow">
		<jdoc:include type="modules" name="slideshow"/>
	</div>
	<div class="clr"></div>
<?php endif; ?>

<?php if ($this->countModules('breadcrumbs')) : ?>
	<div id="title-breadcrumb">
		<jdoc:include type="modules" name="breadcrumbs"/>
	</div>
	<div class="clr"></div>
<?php endif; ?>

<div class="page">
	<?php if ($this->countModules('top1', true) || $this->countModules('top2', true) || $this->countModules('top3', true) || $this->countModules('top4', true)) : ?>
		<div id="block-top">
			<?php require_once ($framework . 'top.php'); ?>
		</div>
		<div class="clr"></div>
	<?php endif; ?>
	
	<?php if ($this->countModules('feature1', true) || $this->countModules('feature2', true) || $this->countModules('feature3', true) || $this->countModules('feature4', true)) : ?>
		<div id="block-feature">
			<?php require_once ($framework . 'feature.php'); ?>
		</div>
	<?php endif; ?>
</div>

<?php if ($this->countModules('parallax')) : ?>
	<div id="parallax">
		<jdoc:include type="modules" name="parallax"/>
	</div>
	<div class="clr"></div>
<?php endif; ?>

<div class="page">
	<?php if ($this->countModules('beforecontent1', true) || $this->countModules('beforecontent2', true) || $this->countModules('beforecontent3', true) || $this->countModules('beforecontent4', true)) : ?>
		<div id="block-beforecontent">
			<?php require_once ($framework . 'beforecontent.php'); ?>
		</div>
	<?php endif; ?>
</div>

<div id="main">
	<div class="page">
		<div class="container_12">
			<?php if ($left) : ?>
				<div class="grid_3">
					<div id="left">
						<jdoc:include type="modules" name="left" style="xhtml" />
					</div>
				</div>
			<?php endif; ?>
			
			<div class="<?php if ($left && $right) { echo 'grid_6'; } elseif ($left || $right) { echo 'grid_9'; } else { echo 'grid_12'; } ?>">
				<div><jdoc:include type="message" /></div>
				<div><jdoc:include type="component" /></div>
			</div>
			
			<?php if ($right) : ?>
				<div class="grid_3">
					<div id="right">
						<jdoc:include type="modules" name="right" style="xhtml" />
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php if ($this->countModules('carrousel')) : ?>
	<div id="carrousel">
		<jdoc:include type="modules" name="carrousel"/>
	</div>
	<div class="clr"></div>
<?php endif; ?>

<div class="page">
	<?php if ($this->countModules('aftercontent1', true) || $this->countModules('aftercontent2', true) || $this->countModules('aftercontent3', true) || $this->countModules('aftercontent4', true)) : ?>
		<div id="block-aftercontent">
			<?php require_once ($framework . 'aftercontent.php'); ?>
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('bottomcontent1', true) || $this->countModules('bottomcontent2', true) || $this->countModules('bottomcontent3', true) || $this->countModules('bottomcontent4', true)) : ?>
		<div id="block-bottomcontent">
			<?php require_once ($framework . 'bottomcontent.php'); ?>
		</div>
	<?php endif; ?>
	
	<?php if ($this->countModules('footertop1', true) || $this->countModules('footertop2', true) || $this->countModules('footertop3', true) || $this->countModules('footertop4', true)) : ?>
		<div id="block-footertop">
			<?php require_once ($framework . 'footertop.php'); ?>
		</div>
	<?php endif; ?>
</div>

<?php if ($this->countModules('parallax-contact')) : ?>
	<div id="parallax-contact">
		<div class="page">
			<jdoc:include type="modules" name="parallax-contact"/>
		</div>
	</div>
	<div class="clr"></div>
<?php endif; ?>

<?php if ($this->countModules('parallax-2')) : ?>
	<div id="parallax-2">
		<jdoc:include type="modules" name="parallax-2"/>
	</div>
	<div class="clr"></div>
<?php endif; ?>

<?php if ($this->countModules('footerbottom1', true) || $this->countModules('footerbottom2', true) || $this->countModules('footerbottom3', true) || $this->countModules('footerbottom4', true)) : ?>
	<div id="block-footerbottom">
		<?php require_once ($framework . 'footerbottom.php'); ?>
	</div>
<?php endif; ?>

<div id="block-footer">
	<div class="container_12">
		<div class="copyright" data-scrollReveal="enter top over 0.8s">
			<?php echo date('Y'); ?>&nbsp; <?php echo $csite_name; ?> |&nbsp;<span style="color: #ff9900;"><a href="/impressum-und-datenschutz.html" style="color: #ff9900;">Impressum &amp; Datenschutz</a></span>
		</div>
	</div>
</div>

<a href="#" class="back-to-top">Back to Top</a>

<script type="text/javascript" src="<?php echo Uri::base(); ?>templates/<?php echo $this->template; ?>/javascript/scrollReveal.js"></script>
<script type="text/javascript" src="<?php echo Uri::base(); ?>templates/<?php echo $this->template; ?>/javascript/pretty.js"></script>
<script type="text/javascript" src="<?php echo Uri::base(); ?>templates/<?php echo $this->template; ?>/javascript/animatedModal.min.js"></script>
<script type="text/javascript" src="<?php echo Uri::base(); ?>templates/<?php echo $this->template; ?>/javascript/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?php echo Uri::base(); ?>templates/<?php echo $this->template; ?>/javascript/main.js"></script>

<script>
	window.scrollReveal = new scrollReveal();
</script>

</body>
</html>
