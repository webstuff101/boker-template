<?php
/**
 * Boker Template Article Default Layout for Joomla 6
 * 
 * @package     Joomla.Site
 * @subpackage  Templates.Boker
 * @copyright   Copyright (C) 2005 - 2025 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Associations;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\FileLayout;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;
use Joomla\Component\Content\Site\Helper\RouteHelper;

// Create shortcuts to some parameters.
$params  = $this->item->params;
$images  = json_decode($this->item->images);
$urls    = json_decode($this->item->urls);
$user    = Factory::getUser();
$info    = $params->get('info_block_position', 0);

if ($this->item->created_by == $user->id) {
	$params->set('access-edit', true);
}

$canEdit = $params->get('access-edit');

// Check if associations are implemented. If they are, define the parameter.
$assocParam = (Associations::isEnabled() && $params->get('show_associations'));

$doc = Factory::getDocument();
$base_url = Uri::base();
$pageTitle = $doc->getTitle();

?>

<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1> <?php echo $this->escape($this->params->get('page_heading')); ?> </h1>
	</div>
<?php endif; ?>

	<?php if (!empty($this->item->pagination) && $this->item->pagination && !$this->item->paginationposition && $this->item->paginationrelative) {
		echo $this->item->pagination;
	}	
?>

<div class="article-blog single" data-scrollReveal="enter from the top after 0.3s ease-out">
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
						$menu = Factory::getApplication()->getMenu();
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
	
		
	
<?php
$nowDate = Factory::getDate()->toSql();
if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime($nowDate)
	|| ((strtotime($this->item->publish_down) < strtotime($nowDate)) && $this->item->publish_down != Factory::getDbo()->getNullDate())) : ?>

<?php endif; ?>
<?php endif; ?>
	
	
	<?php if ($params->get('show_title')) : ?>
			<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
			<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
			
			<div class="pull-item-image">
              <a data-rel="prettyPhoto" href="<?php echo htmlspecialchars($images->image_intro); ?>" class="portfolio-blog-featured">		
				<img 
				
				
				src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" />
				
			
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
		
		<?php 
		if (isset ($this->item->toc)) :
			echo $this->item->toc;
		endif; 
	?>

	<?php  if (!$params->get('show_intro')) : echo $this->item->event->afterDisplayTitle; endif; ?>
	<?php echo $this->item->event->beforeDisplayContent; ?>
	
	<?php if ($params->get('access-view')):?>
	
	<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND !$this->item->paginationposition AND !$this->item->paginationrelative):
	echo $this->item->pagination;
 endif;
?>


<div class="separator"></div>	
 

	

	
	<div class="content-text">

	<?php echo $this->item->text; ?>
	</div>
	
	<?php 
	//ToDo: move it to the proper place when config save will be available.
	if (isset($urls) AND ((!empty($urls->urls_position) AND ($urls->urls_position=='0')) OR  ($params->get('urls_position')=='0' AND empty($urls->urls_position) ))
		OR (empty($urls->urls_position) AND (!$params->get('urls_position')))): ?>
	<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
	
	<?php if (isset($urls) AND ((!empty($urls->urls_position)  AND ($urls->urls_position=='1')) OR ( $params->get('urls_position')=='1') )): ?>
	<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
	
	
	
	<?php //optional teaser intro text for guests ?>
	<?php elseif ($params->get('show_noauth') == true and  $user->get('guest') ) : ?>
	<?php echo $this->item->introtext; ?>
	<?php //Optional link to let them register to see the whole article. ?>
	<?php if ($params->get('show_readmore') && $this->item->fulltext != null) :
		$link1 = Route::_('index.php?option=com_users&view=login');
		$link = $link1 . '&return=' . base64_encode(RouteHelper::getArticleRoute($this->item->slug, $this->item->catid));
	?>
	<p class="readmore"> <a href="<?php echo $link; ?>">
		<?php $attribs = json_decode($this->item->attribs);  ?>
		<?php
		if ($attribs->alternative_readmore == null) :
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
		endif; ?>
		</a> </p>
	<?php endif; ?>
	<?php endif; ?>
	
	<?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
	<div class="tag-article"><span>tags:</span>
		<?php echo LayoutHelper::render('joomla.content.tags', $this->item->tags->itemTags); ?>
	</div>
	<?php endif; ?>
	
	
	
	<div class="separateur"></div>
	<?php if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND !$this->item->paginationrelative): ?>
		<?php echo $this->item->pagination; ?>
	<?php endif; ?>
	
	
	
	
	<?php
if (!empty($this->item->pagination) AND $this->item->pagination AND $this->item->paginationposition AND $this->item->paginationrelative):
	echo $this->item->pagination;
?>
	<?php endif; ?>
	</div>
	
	
	
	<?php echo $this->item->event->afterDisplayContent; ?> 
<div class="separateur-single"></div>

	
	
	
	
	
