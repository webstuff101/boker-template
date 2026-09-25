<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Factory;

$modURL = Uri::base().'modules/mod_coverbox';
$doc = Factory::getDocument();
$doc->getWebAssetManager()->useScript('jquery');

?>

<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/prettyphoto/pretty.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/style-coverbox.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/responsive-coverbox.css" type="text/css" />
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/prettyphoto/pretty.js"></script>

    <section class="section">
        <div class="container-module">
            <div class="row">
			    <div class="coverboxes">
				
				    <?php if ($CoverboxOptionsParams['enableitem1'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                           <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img1']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img1']; ?>" alt="img1"/>
								    <span class="overlay">
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title1']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text1']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
					
					<?php if ($CoverboxOptionsParams['enableitem2'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img2']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img2']; ?>" alt="img1"/>
								    <span class="overlay">
                                        
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title2']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text2']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
					
					<?php if ($CoverboxOptionsParams['enableitem3'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img3']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img3']; ?>" alt="img1"/>
								    <span class="overlay">
                                        
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title3']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text3']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
					
					<div class="clr"></div>
					
					<?php if ($CoverboxOptionsParams['enableitem4'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img4']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img4']; ?>" alt="img1"/>
								    <span class="overlay">
                                        
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title4']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text4']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
					
					<?php if ($CoverboxOptionsParams['enableitem5'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img5']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img5']; ?>" alt="img1"/>
								    <span class="overlay">
                                       
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title5']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text5']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
					
					<?php if ($CoverboxOptionsParams['enableitem6'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img6']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img6']; ?>" alt="img1"/>
								    <span class="overlay">
                                        
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title6']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text6']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
					
					<div class="clr"></div>
					
					<?php if ($CoverboxOptionsParams['enableitem7'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img7']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img7']; ?>" alt="img1"/>
								    <span class="overlay">
                                        
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title7']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text7']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
					
					<?php if ($CoverboxOptionsParams['enableitem8'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img8']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img8']; ?>" alt="img1"/>
								    <span class="overlay">
                                        
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title8']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text8']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
					
					<?php if ($CoverboxOptionsParams['enableitem9'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img9']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img9']; ?>" alt="img1"/>
								    <span class="overlay">
                                        
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title9']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text9']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
					
					<div class="clr"></div>
					
					<?php if ($CoverboxOptionsParams['enableitem10'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img10']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img10']; ?>" alt="img1"/>
								    <span class="overlay">
                                        
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title10']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text10']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
					
					<?php if ($CoverboxOptionsParams['enableitem11'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img11']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img11']; ?>" alt="img1"/>
								    <span class="overlay">
                                       
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title11']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text11']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
					
					<?php if ($CoverboxOptionsParams['enableitem12'] == "1" ) : ?>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <a data-rel="prettyPhoto" href="<?php echo $CoverboxOptionsParams['project_img12']; ?>" class="coverbox">
                                <img class="img-responsive" src="<?php echo $CoverboxOptionsParams['project_img12']; ?>" alt="img1"/>
								    <span class="overlay">
                                        
									</span>
                             </a>
                                <div class="coverboxinfo">
                                    <h4 class="title-coverbox"><?php echo $CoverboxOptionsParams['project_title12']; ?></h4>
                                    <p class="text-coverbox"><?php echo $CoverboxOptionsParams['project_text12']; ?></p>
                                </div>
                        </div>
					<?php endif ?>
						
						<div class="clr"></div>
							
							
                        
				
                        </div>
                    </div>
                </div>
            </section>
			
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/scripts-coverbox.js"></script>



<style>
h4.title-coverbox{
font-size:<?php echo $CoverboxOptionsParams['fontsize']; ?>;
color:<?php echo $CoverboxOptionsParams['color']; ?>;
}

p.text-coverbox {
font-size:<?php echo $CoverboxOptionsParams['fontsize-text']; ?>;
color:<?php echo $CoverboxOptionsParams['color-text']; ?>;
}
</style>


<script>
//prettyPhoto 
jQuery(document).ready(function(){
	jQuery('a[data-gal]').each(function() {
	    jQuery(this).attr('rel', jQuery(this).data('gal'));
	});  	
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'<?php echo $Mixitupfolio_GlobbersThemesOptionsParams['styleprettyphotto']; ?>',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});
}); 
</script>
       