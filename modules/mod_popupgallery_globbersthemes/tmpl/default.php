<?php 

/**
 * POPUP GALLERY! Joomla Module for Joomla 6
 * 
 * @package     Joomla.Site
 * @subpackage  Modules.PopupGallery
 * @copyright   Copyright (C) Globbersthemes. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */
 
use Joomla\CMS\Uri\Uri;

defined( '_JEXEC' ) or die( 'Restricted access' ); 

$modURL = Uri::base() . 'modules/mod_popupgallery_globbersthemes';

?>

<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/prettyphoto/pretty.css" type="text/css" />
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/prettyphoto/pretty.js"></script>

<div id="teammanager <?php echo $Popupgallery_GlobbersThemesOptionsParams['moduleclass_sfx'];?>">
<div id="team_manager"><?php echo  ?></div>


<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem1'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team1" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img1']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img1']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
			</div>
    <?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem2'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team2" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img2']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img2']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>			
    </div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem3'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team3" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img3']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img3']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>	
	</div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem4'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team4" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img4']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img4']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
	</div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem5'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team5" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img5']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img5']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
	</div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem6'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team6" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img6']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img6']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
					
    </div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem7'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team7" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img7']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img7']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
					
    </div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem8'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team8" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img8']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img8']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
					
    </div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem9'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team9" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img9']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img9']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
					
    </div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem10'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team10" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img10']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img10']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
					
    </div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem11'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team11" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img11']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img11']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
					
    </div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem12'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team12" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img12']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img12']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
					
    </div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem13'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team12" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img13']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img13']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
					
    </div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem14'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team12" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img14']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img14']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
					
    </div>
<?php endif ?>

<?php if ($Popupgallery_GlobbersThemesOptionsParams['enableitem15'] == "1" ) : ?>
	<div class="team-photo">
		    <img alt="team12" src="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img15']; ?>">
			    <div class="mask"></div>
					<h5><a data-rel="prettyPhoto" href="<?php echo $Popupgallery_GlobbersThemesOptionsParams['project_img15']; ?>" class="portfolio"><i class="fa fa-search"></i></a></h5>
					
    </div>
<?php endif ?>

<script>
//prettyPhoto 
jQuery(document).ready(function(){
	jQuery('a[data-gal]').each(function() {
	    jQuery(this).attr('rel', jQuery(this).data('gal'));
	});  	
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});
}); 
</script>

</div>
