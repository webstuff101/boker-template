<?php
/**
T4 Overide
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\FileLayout;
if(!class_exists('ContentHelperRoute')){
	if(version_compare(JVERSION, '4', 'ge')){
		abstract class ContentHelperRoute extends \Joomla\Component\content\Site\Helper\RouteHelper{};
	}else{
		JLoader::register('ContentHelperRoute', $com_path . '/helpers/route.php');
	}
}
//compatible params on joomla 4
$this->columns = !empty($this->columns) ? $this->columns : $this->params->get('num_columns');
$this->blog_class_leading = $this->params->get('blog_class_leading','');
$this->blog_class = $this->params->get('blog_class','');

$app = Factory::getApplication();

$this->category->text = $this->category->description;
$app->triggerEvent('onContentPrepare', array($this->category->extension . '.categories', &$this->category, &$this->params, 0));
$this->category->description = $this->category->text;

$results = $app->triggerEvent('onContentAfterTitle', array($this->category->extension . '.categories', &$this->category, &$this->params, 0));
$afterDisplayTitle = trim(implode("\n", $results));

$results = $app->triggerEvent('onContentBeforeDisplay', array($this->category->extension . '.categories', &$this->category, &$this->params, 0));
$beforeDisplayContent = trim(implode("\n", $results));

$results = $app->triggerEvent('onContentAfterDisplay', array($this->category->extension . '.categories', &$this->category, &$this->params, 0));
$afterDisplayContent = trim(implode("\n", $results));

$htag    = $this->params->get('show_page_heading') ? 'h2' : 'h1';


// Add css files for the galleryimagepro component and categories if they exist
$this->document->addStyleSheet(JUri::root().'templates/boker/galleryimagespro/css/site_galleryimagepro.css');
$this->document->addStyleSheet(JUri::root().'templates/boker/galleryimagespro/css/responsive-gallery.css');
$this->document->addStyleSheet(JUri::root().'templates/boker/galleryimagespro/css/prettyphoto/pretty.css');

$this->document->addScript(JUri::root() .'templates/boker/galleryimagespro/js/jquery.js');
$this->document->addScript(JUri::root() .'templates/boker/galleryimagespro/js/pretty.js');

// init columns value if not set
if (empty($this->columns)) $this->columns = 1;

?>

<div class="galleryimagepro images-blog<?php echo $this->pageclass_sfx; ?>" itemscope itemtype="https://schema.org/Blog">
<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">
			<h1> <?php echo $this->escape($this->params->get('page_heading')); ?> </h1>
		</div>
	<?php endif; ?>
	
	<?php if (empty($this->lead_items) && empty($this->link_items) && empty($this->intro_items)) : ?>
		<?php if ($this->params->get('show_no_articles', 1)) : ?>
			<p><?php echo Text::_('COM_CONTENT_NO_ARTICLES'); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	$introcount = count($this->intro_items);
	$counter = 0;
	?>

	<?php if (!empty($this->intro_items)) : ?>
	<?php foreach ($this->intro_items as $key => &$item) : ?>
		<?php $rowcount = ((int) $key % (int) $this->columns) + 1; ?>
		<?php if ($rowcount === 1) : ?>
			<?php $row = $counter / $this->columns; ?>
		<?php endif; ?>
		
		<div class="large_<?php echo round((12 / $this->columns));?>">
			<div class="items column-<?php echo $rowcount;?><?php echo $item->state == 1 ? ' system-unpublished' : null; ?>">
				<?php
					$this->item = &$item;
					echo $this->loadTemplate('item');
					?>
			</div>
					<?php $counter++; ?>
		</div>
						
		<?php if (($rowcount == $this->columns) or ($counter ==$introcount)): ?>
			<span class="row-separator"></span>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>
		
			
	 <div class="item-separator"></div>
     <div class="clr"></div>		
			
	<?php if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->pagesTotal > 1)) : ?>
		<div class="com-content-category-blog__navigation w-100">
			<?php if ($this->params->def('show_pagination_results', 1)) : ?>
				<p class="com-content-category-blog__counter counter float-right pt-3 pr-2">
					<?php echo $this->pagination->getPagesCounter(); ?>
				</p>
			<?php endif; ?>
			<div class="com-content-category-blog__pagination">
				<?php echo $this->pagination->getPagesLinks(); ?>
			</div>
		</div>
	<?php endif; ?>
</div>

<script>
 //prettyPhoto 
jQuery(document).ready(function(){
	jQuery('a[data-gal]').each(function() {
	    jQuery(this).attr('rel', jQuery(this).data('gal'));
	});  	
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});
}); 

</script>
