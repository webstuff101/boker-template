<?php 

/**
 * Gallery Grid! Joomla Module 3.x 2.x
 * 
 */
 
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php
$modURL 	= JURI::base().'modules/mod_gallerygrid_globbersthemes';

?>


<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/responsive.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/prettyphoto/pretty.css" type="text/css" />


<div id="containers">
<div class="containers <?php echo $GalleryGrid_GlobbersThemesOptionsParams['moduleclass_sfx'];?>">
<div id="mod-grid"><?php echo $gtma;?></div>
<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem1'] == "1" ) : ?>
<div class="module-galleygrid"><?php echo $module_galleryGrid;?></div>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img1']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img1']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title1']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc1']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem2'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img2']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img2']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title2']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc2']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem3'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img3']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img3']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title3']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc3']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem4'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img4']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img4']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title4']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc4']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem5'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img5']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img5']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title5']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc5']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>


<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem6'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img6']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img6']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title6']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc6']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>


<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem7'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img7']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img7']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title7']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc7']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem8'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img8']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img8']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title8']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc8']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem9'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img9']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img9']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title9']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc9']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem10'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img10']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img10']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title10']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc10']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem11'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img11']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img11']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title11']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc11']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem12'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img12']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img12']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title12']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc12']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem13'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img13']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img13']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title13']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc13']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem14'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img14']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img14']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title14']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc14']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem15'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img15']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img15']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title15']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc15']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem16'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img16']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img16']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title16']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc16']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem17'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img17']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img17']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title17']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc17']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem18'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img18']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img18']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title18']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc18']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem19'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img19']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img19']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title19']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc19']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

<?php if ($GalleryGrid_GlobbersThemesOptionsParams['enableitem20'] == "1" ) : ?>
<div class="element clearfix col1-3">
    <a data-rel="prettyPhoto" href="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img20']; ?>">
	<div class="images"><img src="<?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_img20']; ?>" alt="<span class='title'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_title20']; ?></span>
	<span class='desc'><?php echo $GalleryGrid_GlobbersThemesOptionsParams['project_desc20']; ?></span>" class="slip" /></div></a>
	</div>
	   
<?php endif ?>

 </div>
 </div>
 
 
 <?php if ($GalleryGrid_GlobbersThemesOptionsParams['loadjquery'] == "1" ) : ?>
	  <script type="text/javascript" src="<?php echo $modURL; ?>/assets/js/jquery-1.9.1.min.js"></script>
 <?php endif ?>
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/js/jquery.sliphover.min.js"></script>
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/prettyphoto/pretty.js"></script>


 
  
  
   <script>
//prettyPhoto 
//jQuery(document).ready(function(){
	jQuery('a[data-gal]').each(function() {
	    jQuery(this).attr('rel', jQuery(this).data('gal'));
	});  	
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});
//}); 
</script>
  
</div>
