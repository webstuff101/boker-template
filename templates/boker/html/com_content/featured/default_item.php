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
use Joomla\CMS\Language\Text;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Date\Date;
use Joomla\Component\Content\Site\Helper\RouteHelper;

$params =& $this->item->params;
$images = json_decode($this->item->images);
$app = Factory::getApplication();
$canEdit = $this->item->params->get('access-edit');

// Get current date for comparison
$nowDate = Factory::getDate()->toSql();

?>




<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime($nowDate)
	|| ((strtotime($this->item->publish_down) < strtotime($nowDate)) && $this->item->publish_down != Factory::getDbo()->getNullDate())) : ?>
<div class="system-unpublished">
<?php endif; ?>




<div class="article-blog" data-scrollReveal="enter from the top after 0.3s ease-out">
<?php if ($params->get('show_publish_date')) : ?>	
	<aside>
		<time datetime="<?php echo HTMLHelper::_('date', $this->item->publish_up, 'Y-m-d'); ?>">
			<div class="day"><?php echo HTMLHelper::_('date', $this->item->publish_up, Text::_('d M Y')); ?></div>
		</time>
	</aside>
	
<?php endif; ?>

    <h2 class="article-header-blog">
		<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
			<a href="<?php echo Route::_(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid)); ?>"> <?php echo $this->escape($this->item->title); ?></a>
				<?php else : ?>
				<?php echo $this->escape($this->item->title); ?>
				<?php endif; ?>
	</h2>
	
		
<?php if (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_create_date')) or ($params->get('show_modify_date'))  or ($params->get('show_parent_category')) or ($params->get('show_hits'))) : ?>
<div class="block-info">
	
	<span class="article-info">
	
        <dt class="article-info-term"><?php echo Text::_('COM_CONTENT_ARTICLE_INFO'); ?></dt>
<?php endif; ?>


               <?php if ($params->get('show_parent_category') && $this->item->catid != '1:root') : ?>
					<?php $title = $this->escape($this->item->parent_title);
					$url = '<a href="'.Route::_(RouteHelper::getCategoryRoute($this->item->parent_id)).'">'.$title.'</a>';?>
					<?php if ($params->get('link_parent_category') and $this->item->parent_id) : ?>
						<dt class="parent-category-name"><?php echo Text::sprintf('COM_CONTENT_PARENT', '</dt><dd class="parent-category-name" >' . $url . '</dd>'); ?>
					<?php else : ?>
						<dt class="parent-category-name"><?php echo Text::sprintf('COM_CONTENT_PARENT', '</dt><dd class="parent-category-name">' . $title . '</dd>'); ?>
					<?php endif; ?>
				<?php endif; ?>

               
                <?php if ($params->get('show_category')) : ?>
					<?php $title = $this->escape($this->item->category_title);
					$url = '<a href="'.Route::_(RouteHelper::getCategoryRoute($this->item->catid)).'">'.$title.'</a>';?>
					<?php if ($params->get('link_category') and $this->item->catid) : ?>
					
					<dt class="category-name"><?php echo Text::sprintf('COM_CONTENT_CATEGORY', '</dt><dd class="category-name">' . $url . '</dd>'); ?>
					<?php else : ?>
					<dt class="category-name"><?php echo Text::sprintf('COM_CONTENT_CATEGORY', '</dt><dd class="category-name">' . $title . '</dd>'); ?>
					<?php endif; ?>
				<?php endif; ?>
				
				
				<?php if ($params->get('show_create_date')) : ?>
				     <dt class="create"><?php echo Text::sprintf('COM_CONTENT_CREATED_DATE_ON', '</dt><dd class="create">' . HTMLHelper::_('date', $this->item->created, Text::_('DATE_FORMAT_LC3')) . '</dd>'); ?>
				<?php endif; ?>


                <?php if ($params->get('show_modify_date')) : ?>
				    <dt class="modified"><?php echo Text::sprintf('COM_CONTENT_LAST_UPDATED', '</dt><dd class="modified">' . HTMLHelper::_('date', $this->item->modified, Text::sprintf('DATE_FORMAT_LC3')) . '</dd>'); ?>
				<?php endif; ?>

    
	        
	            <?php if ($params->get('show_author') && !empty($this->item->author )) : ?>
				<?php $author = $this->item->created_by_alias ? $this->item->created_by_alias : $this->item->author; ?>
				<?php if (!empty($this->item->contactid) && $params->get('link_author') == true): ?>
					<?php
						$needle = 'index.php?option=com_contact&view=contact&id=' . $this->item->contactid;
						$menu = $app->getMenu();
						$item = $menu->getItems('link', $needle, true);
						$cntlink = !empty($item) ? $needle . '&Itemid=' . $item->id : $needle;
					?>
					<dt class="createdby"><?php echo Text::sprintf('COM_CONTENT_WRITTEN_BY', '</dt><dd class="createdby">' . HTMLHelper::_('link', Route::_($cntlink), $author) . '</dd>'); ?>
				<?php else: ?>
					<dt class="createdby"><?php echo Text::sprintf('COM_CONTENT_WRITTEN_BY', '</dt><dd class="createdby">' . $author . '</dd>'); ?>
				<?php endif; ?>
				
			
				<?php endif; ?>
	
	
	
	
	<?php if ($params->get('show_hits')) : ?>
				<dt class="hits"><?php echo Text::sprintf('COM_CONTENT_ARTICLE_HITS', '</dt><dd class="hits">' . $this->item->hits . '</dd>'); ?>
				<?php endif; ?>
	

    <?php if (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_parent_category')) or ($params->get('show_hits')))
	:?>
	

		</span>
	</div>	
	
		
	
<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime($nowDate)
	|| ((strtotime($this->item->publish_down) < strtotime($nowDate)) && $this->item->publish_down != Factory::getDbo()->getNullDate())) : ?>

<?php endif; ?>
<?php endif; ?>
	
	
	
	
   
 
   
   
   <?php if ($params->get('show_title')) : ?>
			<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
			<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
			
			<div class="pull-item-image">
              <a data-rel="prettyPhoto" href="<?php echo htmlspecialchars($images->image_intro); ?>" class="portfolio-blog-featured">		
				<img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" />
				
			
                               <span class="overlays">
                            <span class="content">
                                <i class="fa fa-search"></i>
								<div class="image-caption">
								<?php 
								if ($images->image_intro_caption): echo htmlspecialchars($images->image_intro_caption) ;
                                   
								endif; ?>
								</div>
                            </span>
                        </span>
                                       
				</a>  
			</div>
		<div class="item-separator"></div>	
	<?php endif; ?>
		<?php endif; ?>
   
		
 

	

<div class="separator"></div>	
	<div class="content-text">
	    <?php if (!$params->get('show_intro')) : ?>
		<?php echo $this->item->event->afterDisplayTitle; ?>
		<?php endif; ?>
		<?php echo $this->item->event->beforeDisplayContent; ?>
		<?php echo $this->item->introtext; ?>
	</div>
	
<div class="separator"></div>

<?php echo $this->item->event->afterDisplayContent; ?>




		
		
		
		
		
		<?php if ($params->get('show_readmore') && $this->item->readmore) :
	if ($params->get('access-view')) :
		$link = Route::_(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid));
	else :
		$menu = $app->getMenu();
		$active = $menu->getActive();
		$itemId = $active->id;
		$link1 = Route::_('index.php?option=com_users&view=login&Itemid=' . $itemId);
		$returnURL = Route::_(RouteHelper::getArticleRoute($this->item->slug));
		$link = $link1 . '&return=' . base64_encode($returnURL);
	endif;
?>


<p class="readmore">
				<a href="<?php echo $link; ?>">
					<?php if (!$params->get('access-view')) :
						echo Text::_('COM_CONTENT_REGISTER_TO_READ_MORE');
					elseif ($readmore = $this->item->alternative_readmore) :
						echo $readmore;
						if ($params->get('show_readmore_title', 0) != 0) :
							echo HTMLHelper::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
						endif;
					elseif ($params->get('show_readmore_title', 0) == 0) :
						echo Text::sprintf('COM_CONTENT_READ_MORE_TITLE');
					else :
						echo Text::_('COM_CONTENT_READ_MORE');
						echo HTMLHelper::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
					endif; ?></a>
	</p>	
<?php endif; ?>




	
	<?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
	<div class="tag-article"><span>tags:</span>
		<?php echo LayoutHelper::render('joomla.content.tags', $this->item->tags->itemTags); ?>
	</div>
	<?php endif; ?>

		

	

		
		
		<div class="clr"></div>

	

</div>


