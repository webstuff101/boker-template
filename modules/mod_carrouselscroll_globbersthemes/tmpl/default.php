<?php 

/**
 *Carrousel Scroll Joomla Module for Joomla 6
 * 
 * @package     Joomla.Site
 * @subpackage  Modules.CarrouselScroll
 * @copyright   Copyright (C) Globbersthemes. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */
 
defined( '_JEXEC' ) or die( 'Restricted access' ); 

use Joomla\CMS\Uri\Uri;

$modURL = Uri::base() . 'modules/mod_carrouselscroll_globbersthemes';

?>

<link href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"> 
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
