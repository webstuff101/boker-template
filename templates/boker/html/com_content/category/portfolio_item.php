<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.Boker
 *
 * @copyright   Copyright (C) 2005 - 2025 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Associations;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;
use Joomla\Component\Content\Administrator\Extension\ContentComponent;
use Joomla\Component\Content\Site\Helper\RouteHelper;

$params =& $this->item->params;
$images = json_decode($this->item->images);
$app = Factory::getApplication();
$canEdit = $this->item->params->get('access-edit');
$layout		= $params->get('image_layout', 'effect-layla');
$color		= $params->get('color_name','#ffffff');
$color_des		= $params->get('color_description','#ffffff');

// Check if associations are implemented. If they are, define the parameter.
$assocParam = (Associations::isEnabled() && $params->get('show_associations'));

$currentDate   = Factory::getDate()->format('Y-m-d H:i:s');
$isUnpublished = ($this->item->state == ContentComponent::CONDITION_UNPUBLISHED || $this->item->publish_up > $currentDate)
	|| ($this->item->publish_down < $currentDate && $this->item->publish_down !== null);

?>

<?php if ($this->item->state == 0 
			OR strtotime($this->item->publish_up) > strtotime($currentDate)
			OR (strtotime($this->item->publish_down) < strtotime($currentDate) 
			AND $this->item->publish_down !== null)) : ?>
	<div class="system-unpublished"></div>
<?php endif; ?>

<div class="photogrid">
   <div class="<?php echo $layout; ?>">
        <a data-rel="prettyPhoto" href="<?php echo htmlspecialchars($images->image_intro); ?>" class="portfolio-blog">		
		   <img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" />
		  
		 <figcaption>
		      <div>
		        <?php if ($params->get('show_title')) : ?>
                  <h2 class="name" style="color:<?php echo $color; ?> !important">
				      <?php echo $this->escape($this->item->title); ?>
				  </h2>
               <?php endif; ?>
			 <?php if ($params->get('show_intro')) : ?>
			 <p class="description" style="color:<?php echo $color_des; ?> !important">
	          <?php if (!$params->get('show_intro')) : ?>
		      <?php echo $this->item->event->afterDisplayTitle; ?>
		      <?php endif; ?>
		      <?php echo $this->item->event->beforeDisplayContent; ?>
			  <?php echo $this->item->introtext; ?>
			  </p>
			  <?php endif; ?>
	       </div>
	      </figcaption>
		 </a>
   </div>
</div>
	 
	 <div class="item-separator"></div>
     <div class="clr"></div>
