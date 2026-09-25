<?php 

/**
 *Carrousel Scroll Joomla Module 3.x 2.x
 * 
 */
 
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php
$modURL 	= JURI::base().'modules/mod_carrouselscroll_globbersthemes';

?>

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/prettyphoto/pretty.css" type="text/css" />

<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/css/jquery.mCustomScrollbar.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/css/responsive.css" type="text/css" />


            <div id="dt-scroll-content" <?php echo $carrouselscroll_GlobbersThemesOptionsParams['moduleclass_sfx'];?>> 
                <ul class="dt-sc-portfolio-container portfolio-horizontal">
				
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem1'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img1']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img1']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text1']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
				
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem2'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img2']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img2']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text2']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
				
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem3'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img3']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img3']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text3']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
				
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem4'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img4']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img4']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text4']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
				
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem5'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img5']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img5']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text5']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
				
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem6'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img6']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img6']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text6']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
				
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem7'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img7']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img7']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text7']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
					
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem8'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img8']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img8']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text8']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
				
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem9'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img9']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img9']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text9']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
				
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem10'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img10']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img10']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text10']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
				
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem11'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img11']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img11']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text11']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
				
				<?php if ($carrouselscroll_GlobbersThemesOptionsParams['enableitem12'] == "1" ) : ?>
                    <li class="portfolio-c">
                        <figure>
                            <img src="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img12']; ?>" alt="portfolio1">
                                <figcaption>
                                    <div class="fig-content">
                                        <a href="<?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_img12']; ?>" data-gal="prettyPhoto[gallery]"><span class="image-overlay-inside"></span></a>
                                        <h5 class="portfolio-text"><?php echo $carrouselscroll_GlobbersThemesOptionsParams['project_text12']; ?></h5>
                                    </div>
                                </figcaption>
                        </figure>
                    </li>
				<?php endif ?>
					
                </ul>
            </div> 
        
        

<?php if ($carrouselscroll_GlobbersThemesOptionsParams['loadjquery'] == "1" ) : ?>
	   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  
<?php endif ?>
	
 
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/prettyphoto/pretty.js"></script>
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/js/custom.js"></script>
