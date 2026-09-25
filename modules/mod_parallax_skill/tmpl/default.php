<?php 
// no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 

?>




<?php

$modURL 	= JURI::base().'modules/mod_parallax_skill';
?>
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/responsive-mod.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/font-awesome/css/font-awesome.css" type="text/css" />




 <section class="padding-top-big padding-bottom-middle text-center" data-parallax="<?php echo $ParallaxSkillOptionsParams['ImageParallax']; ?>">
 <div class="parallax-skill"><?php echo $gtme; ?></div>
            <div class="overlay overlay-moderate"></div>
            <div class="main-content">
                <div class="containers">
                    <h1 class="white uppercase"><?php echo $ParallaxSkillOptionsParams['TitleParallax']; ?></h1>
                    <div class="facts">
                        <div class="row">
                            <div class="cols-lg-10 cols-lg-offset-1 cols-md-10 cols-md-offset-1">
                                <div class="row">
                                    <div class="cols-lg-3 cols-md-3 cols-sm-6">
									<i class="<?php echo $ParallaxSkillOptionsParams['IconSkill1']; ?>"></i>
                                        <div class="count"><?php echo $ParallaxSkillOptionsParams['CountSkill1']; ?></div>
                                        <h5 class="white uppercase"><?php echo $ParallaxSkillOptionsParams['NameSkill1']; ?></h5>
                                    </div>
                                    
                                    <div class="cols-lg-3 cols-md-3 cols-sm-6">
                                       <i class="<?php echo $ParallaxSkillOptionsParams['IconSkill2']; ?>"></i>
                                        <div class="count"><?php echo $ParallaxSkillOptionsParams['CountSkill2']; ?></div>
                                        <h5 class="white uppercase"><?php echo $ParallaxSkillOptionsParams['NameSkill2']; ?></h5>
                                    </div>
									
									<div class="cols-lg-3 cols-md-3 cols-sm-6">
                                        <i class="<?php echo $ParallaxSkillOptionsParams['IconSkill3']; ?>"></i>
                                        <div class="count"><?php echo $ParallaxSkillOptionsParams['CountSkill3']; ?></div>
                                        <h5 class="white uppercase"><?php echo $ParallaxSkillOptionsParams['NameSkill3']; ?></h5>
                                    </div>
									
                                    <div class="cols-lg-3 cols-md-3 cols-sm-6">
                                       <i class="<?php echo $ParallaxSkillOptionsParams['IconSkill4']; ?>"></i>
                                        <div class="count"><?php echo $ParallaxSkillOptionsParams['CountSkill4']; ?></div>
                                        <h5 class="white uppercase"><?php echo $ParallaxSkillOptionsParams['NameSkill4']; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<script type="text/javascript" src="<?php echo $modURL; ?>/assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/js/scripts.js"></script>

<style>
.facts .count {
  color: <?php echo $ParallaxSkillOptionsParams['coloricon']; ?>;
}



</style> 


