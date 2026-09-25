<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<?php $modURL = JURI::base().'modules/mod_revol_slider'; ?>
<?php if ($RevolSliderOptionsParams['loadjquery'] == "1" ) : ?>
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/jquery-1.10.2.min.js"></script>
<?php endif ?>
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo $modURL; ?>/assets/jquery.themepunch.revolution.min.js"></script>
<link rel="stylesheet" href="<?php echo $modURL; ?>/assets/settings.css" type="text/css" />
<div class="bannercontainer<?php echo $RevolSliderOptionsParams['moduleclass_sfx'];?>">
    <div id="revol-main"><?php echo $module_revol;?></div>
    <div class="banner">
        <ul>
            <?php if ($RevolSliderOptionsParams['enableitem1'] == "1" ) : ?>

            <li data-transition="<?php echo $RevolSliderOptionsParams['transition1']; ?>" data-slotamount="7" data-masterspeed="<?php echo $RevolSliderOptionsParams['speed1']; ?>">
                <img src="<?php echo $RevolSliderOptionsParams['img1']; ?>" alt="img1" />
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['titleffect1']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['titleposition1']; ?>"
                    data-speed="700"
                    data-start="1700"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation1']; ?>"
                >
                    <h2><?php echo $RevolSliderOptionsParams['title1']; ?></h2>
                </div>
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['texteffect1']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['textposition1']; ?>"
                    data-speed="500"
                    data-start="1900"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation1']; ?>"
                >
                    <p><?php echo $RevolSliderOptionsParams['text1']; ?></p>
                </div>
            </li>

            <?php endif ?>

            <?php if ($RevolSliderOptionsParams['enableitem2'] == "1" ) : ?>
            <li data-transition="<?php echo $RevolSliderOptionsParams['transition2']; ?>" data-slotamount="7" data-masterspeed="<?php echo $RevolSliderOptionsParams['speed2']; ?>">
                <img src="<?php echo $RevolSliderOptionsParams['img2']; ?>" alt="img2" />
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['titleffect2']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['titleposition2']; ?>"
                    data-speed="700"
                    data-start="1700"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation2']; ?>"
                >
                    <h2><?php echo $RevolSliderOptionsParams['title2']; ?></h2>
                </div>
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['texteffect2']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['textposition2']; ?>"
                    data-speed="500"
                    data-start="1900"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation2']; ?>"
                >
                    <p><?php echo $RevolSliderOptionsParams['text2']; ?></p>
                </div>
            </li>
            <?php endif ?>

            <?php if ($RevolSliderOptionsParams['enableitem3'] == "1" ) : ?>
            <li data-transition="<?php echo $RevolSliderOptionsParams['transition3']; ?>" data-slotamount="7" data-masterspeed="<?php echo $RevolSliderOptionsParams['speed3']; ?>">
                <img src="<?php echo $RevolSliderOptionsParams['img3']; ?>" alt="img3" />
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['titleffect3']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['titleposition3']; ?>"
                    data-speed="700"
                    data-start="1700"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation3']; ?>"
                >
                    <h2><?php echo $RevolSliderOptionsParams['title3']; ?></h2>
                </div>
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['texteffect3']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['textposition3']; ?>"
                    data-speed="500"
                    data-start="1900"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation3']; ?>"
                >
                    <p><?php echo $RevolSliderOptionsParams['text3']; ?></p>
                </div>
            </li>
            <?php endif ?>

            <?php if ($RevolSliderOptionsParams['enableitem4'] == "1" ) : ?>
            <li data-transition="<?php echo $RevolSliderOptionsParams['transition4']; ?>" data-slotamount="7" data-masterspeed="<?php echo $RevolSliderOptionsParams['speed4']; ?>">
                <img src="<?php echo $RevolSliderOptionsParams['img4']; ?>" alt="img4" />
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['titleffect4']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['titleposition4']; ?>"
                    data-speed="700"
                    data-start="1700"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation4']; ?>"
                >
                    <h2><?php echo $RevolSliderOptionsParams['title4']; ?></h2>
                </div>
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['texteffect4']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['textposition4']; ?>"
                    data-speed="500"
                    data-start="1900"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation4']; ?>"
                >
                    <p><?php echo $RevolSliderOptionsParams['text4']; ?></p>
                </div>
            </li>
            <?php endif ?>

            <?php if ($RevolSliderOptionsParams['enableitem5'] == "1" ) : ?>
            <li data-transition="<?php echo $RevolSliderOptionsParams['transition5']; ?>" data-slotamount="7" data-masterspeed="<?php echo $RevolSliderOptionsParams['speed5']; ?>">
                <img src="<?php echo $RevolSliderOptionsParams['img5']; ?>" alt="img5" />
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['titleffect5']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['titleposition5']; ?>"
                    data-speed="700"
                    data-start="1700"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation5']; ?>"
                >
                    <h2><?php echo $RevolSliderOptionsParams['title5']; ?></h2>
                </div>
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['texteffect5']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['textposition5']; ?>"
                    data-speed="500"
                    data-start="1900"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation5']; ?>"
                >
                    <p><?php echo $RevolSliderOptionsParams['text5']; ?></p>
                </div>
            </li>
            <?php endif ?>

            <?php if ($RevolSliderOptionsParams['enableitem6'] == "1" ) : ?>
            <li data-transition="<?php echo $RevolSliderOptionsParams['transition6']; ?>" data-slotamount="7" data-masterspeed="<?php echo $RevolSliderOptionsParams['speed6']; ?>">
                <img src="<?php echo $RevolSliderOptionsParams['img6']; ?>" alt="img6" />
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['titleffect6']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['titleposition6']; ?>"
                    data-speed="700"
                    data-start="1700"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation6']; ?>"
                >
                    <h2><?php echo $RevolSliderOptionsParams['title6']; ?></h2>
                </div>
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['texteffect6']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['textposition6']; ?>"
                    data-speed="500"
                    data-start="1900"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation6']; ?>"
                >
                    <p><?php echo $RevolSliderOptionsParams['text6']; ?></p>
                </div>
            </li>
            <?php endif ?>

            <?php if ($RevolSliderOptionsParams['enableitem7'] == "1" ) : ?>
            <li data-transition="<?php echo $RevolSliderOptionsParams['transition7']; ?>" data-slotamount="7" data-masterspeed="<?php echo $RevolSliderOptionsParams['speed7']; ?>">
                <img src="<?php echo $RevolSliderOptionsParams['img7']; ?>" alt="img7" />
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['titleffect7']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['titleposition7']; ?>"
                    data-speed="700"
                    data-start="1700"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation7']; ?>"
                >
                    <h2><?php echo $RevolSliderOptionsParams['title7']; ?></h2>
                </div>
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['texteffect7']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['textposition7']; ?>"
                    data-speed="500"
                    data-start="1900"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation7']; ?>"
                >
                    <p><?php echo $RevolSliderOptionsParams['text7']; ?></p>
                </div>
            </li>
            <?php endif ?>

            <?php if ($RevolSliderOptionsParams['enableitem8'] == "1" ) : ?>
            <li data-transition="<?php echo $RevolSliderOptionsParams['transition8']; ?>" data-slotamount="7" data-masterspeed="<?php echo $RevolSliderOptionsParams['speed8']; ?>">
                <img src="<?php echo $RevolSliderOptionsParams['img8']; ?>" alt="img8" />
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['titleffect8']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['titleposition8']; ?>"
                    data-speed="700"
                    data-start="1700"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation8']; ?>"
                >
                    <h2><?php echo $RevolSliderOptionsParams['title8']; ?></h2>
                </div>
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['texteffect8']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['textposition8']; ?>"
                    data-speed="500"
                    data-start="1900"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation8']; ?>"
                >
                    <p><?php echo $RevolSliderOptionsParams['text8']; ?></p>
                </div>
            </li>
            <?php endif ?>

            <?php if ($RevolSliderOptionsParams['enableitem9'] == "1" ) : ?>
            <li data-transition="<?php echo $RevolSliderOptionsParams['transition9']; ?>" data-slotamount="7" data-masterspeed="<?php echo $RevolSliderOptionsParams['speed9']; ?>">
                <img src="<?php echo $RevolSliderOptionsParams['img9']; ?>" alt="img9" />
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['titleffect9']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['titleposition9']; ?>"
                    data-speed="700"
                    data-start="1700"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation9']; ?>"
                >
                    <h2><?php echo $RevolSliderOptionsParams['title9']; ?></h2>
                </div>
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['texteffect9']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['textposition9']; ?>"
                    data-speed="500"
                    data-start="1900"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation9']; ?>"
                >
                    <p><?php echo $RevolSliderOptionsParams['text9']; ?></p>
                </div>
            </li>
            <?php endif ?>

            <?php if ($RevolSliderOptionsParams['enableitem10'] == "1" ) : ?>
            <li data-transition="<?php echo $RevolSliderOptionsParams['transition10']; ?>" data-slotamount="7" data-masterspeed="<?php echo $RevolSliderOptionsParams['speed10']; ?>">
                <img src="<?php echo $RevolSliderOptionsParams['img10']; ?>" alt="img10" />
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['titleffect10']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['titleposition10']; ?>"
                    data-speed="700"
                    data-start="1700"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation10']; ?>"
                >
                    <h2><?php echo $RevolSliderOptionsParams['title10']; ?></h2>
                </div>
                <div
                    class="tp-caption <?php echo $RevolSliderOptionsParams['texteffect10']; ?>"
                    data-x="center"
                    data-y="<?php echo $RevolSliderOptionsParams['textposition10']; ?>"
                    data-speed="500"
                    data-start="1900"
                    data-easing="<?php echo $RevolSliderOptionsParams['variation10']; ?>"
                >
                    <p><?php echo $RevolSliderOptionsParams['text10']; ?></p>
                </div>
            </li>
            <?php endif ?>
        </ul>
    </div>
</div>
<style>
    .tp-caption h2 {
        font-size:<?php echo $RevolSliderOptionsParams['titlesize']; ?>;
        text-transform:<?php echo $RevolSliderOptionsParams['titletransform']; ?>;
        font-family:<?php echo $RevolSliderOptionsParams['font']; ?>;
        color:<?php echo $RevolSliderOptionsParams['titlecolor']; ?>;
    }
    .tp-caption p  {
        font-size:<?php echo $RevolSliderOptionsParams['textsize']; ?>;
        text-transform:<?php echo $RevolSliderOptionsParams['texttransform']; ?>;
        font-family:<?php echo $RevolSliderOptionsParams['font']; ?>;
        color:<?php echo $RevolSliderOptionsParams['textcolor']; ?>;
    }
</style>
<script type="text/javascript">
    //jQuery(document).ready(function() {
           revapi = jQuery('.banner').revolution(
            {
                delay:<?php echo $RevolSliderOptionsParams['slidedelay']; ?>,
                startwidth:1170,
                startheight:<?php echo $RevolSliderOptionsParams['imageheight']; ?>,
                onHoverStop: "off",
                hideThumbs:10,
                fullWidth:"off",
                forceFullWidth:"on"
            });
    //});
</script>