
<?php

/**
 * Revol Slider Joomla 2.5 - 3.x
 * This module can used as Slideshow for your content. 
 * Version 1.0
 */
 
 
class modRevolSliderHelper
{   

    public static function getContent( $params )
    {
        return 'No content';
    }	
	
	public static function getData( $params)
	{
		$RevolSliderOptionsParams = array();
		$RevolSliderOptionsParams['loadjquery'] = $params->get( 'loadjquery' );
		$RevolSliderOptionsParams['moduleclass_sfx'] = $params->get( 'moduleclass_sfx' );
		$RevolSliderOptionsParams['imageheight'] = $params->get( 'imageheight' );
		$RevolSliderOptionsParams['slidedelay'] = $params->get( 'slidedelay' );
		$RevolSliderOptionsParams['titlesize'] = $params->get( 'titlesize' );
		$RevolSliderOptionsParams['textsize'] = $params->get( 'textsize' );
		$RevolSliderOptionsParams['titletransform'] = $params->get( 'titletransform' );
		$RevolSliderOptionsParams['texttransform'] = $params->get( 'texttransform' );
		$RevolSliderOptionsParams['font'] = $params->get( 'font' );
		$RevolSliderOptionsParams['titlecolor'] = $params->get( 'titlecolor' );
		$RevolSliderOptionsParams['textcolor'] = $params->get( 'textcolor' );
		$RevolSliderOptionsParams['enableitem1'] = $params->get( 'enableitem1' );
		$RevolSliderOptionsParams['transition1'] = $params->get( 'transition1' );
		$RevolSliderOptionsParams['speed1'] = $params->get( 'speed1' );
		$RevolSliderOptionsParams['img1'] = $params->get( 'img1' );
		$RevolSliderOptionsParams['titleffect1'] = $params->get( 'titleffect1' );
		$RevolSliderOptionsParams['texteffect1'] = $params->get( 'texteffect1' );
		$RevolSliderOptionsParams['variation1'] = $params->get( 'variation1' );
		$RevolSliderOptionsParams['title1'] = $params->get( 'title1' );
		$RevolSliderOptionsParams['text1'] = $params->get( 'text1' );
		$RevolSliderOptionsParams['titleposition1'] = $params->get( 'titleposition1' );
		$RevolSliderOptionsParams['textposition1'] = $params->get( 'textposition1' );
		$RevolSliderOptionsParams['enableitem2'] = $params->get( 'enableitem2' );
		$RevolSliderOptionsParams['transition2'] = $params->get( 'transition2' );
		$RevolSliderOptionsParams['speed2'] = $params->get( 'speed2' );
		$RevolSliderOptionsParams['img2'] = $params->get( 'img2' );
		$RevolSliderOptionsParams['titleffect2'] = $params->get( 'titleffect2' );
		$RevolSliderOptionsParams['texteffect2'] = $params->get( 'texteffect2' );
		$RevolSliderOptionsParams['variation2'] = $params->get( 'variation2' );
		$RevolSliderOptionsParams['title2'] = $params->get( 'title2' );
		$RevolSliderOptionsParams['text2'] = $params->get( 'text2' );
		$RevolSliderOptionsParams['titleposition2'] = $params->get( 'titleposition2' );
		$RevolSliderOptionsParams['textposition2'] = $params->get( 'textposition2' );
		$RevolSliderOptionsParams['enableitem3'] = $params->get( 'enableitem3' );
		$RevolSliderOptionsParams['transition3'] = $params->get( 'transition3' );
		$RevolSliderOptionsParams['speed3'] = $params->get( 'speed3' );
		$RevolSliderOptionsParams['img3'] = $params->get( 'img3' );
		$RevolSliderOptionsParams['titleffect3'] = $params->get( 'titleffect3' );
		$RevolSliderOptionsParams['texteffect3'] = $params->get( 'texteffect3' );
		$RevolSliderOptionsParams['variation3'] = $params->get( 'variation3' );
		$RevolSliderOptionsParams['title3'] = $params->get( 'title3' );
		$RevolSliderOptionsParams['text3'] = $params->get( 'text3' );
		$RevolSliderOptionsParams['titleposition3'] = $params->get( 'titleposition3' );
		$RevolSliderOptionsParams['textposition3'] = $params->get( 'textposition3' );
	    $RevolSliderOptionsParams['enableitem4'] = $params->get( 'enableitem4' );
		$RevolSliderOptionsParams['transition4'] = $params->get( 'transition4' );
		$RevolSliderOptionsParams['speed4'] = $params->get( 'speed4' );
		$RevolSliderOptionsParams['img4'] = $params->get( 'img4' );
		$RevolSliderOptionsParams['titleffect4'] = $params->get( 'titleffect4' );
		$RevolSliderOptionsParams['texteffect4'] = $params->get( 'texteffect4' );
		$RevolSliderOptionsParams['variation4'] = $params->get( 'variation4' );
		$RevolSliderOptionsParams['title4'] = $params->get( 'title4' );
		$RevolSliderOptionsParams['text4'] = $params->get( 'text4' );
		$RevolSliderOptionsParams['titleposition4'] = $params->get( 'titleposition4' );
		$RevolSliderOptionsParams['textposition4'] = $params->get( 'textposition4' );
		$RevolSliderOptionsParams['enableitem5'] = $params->get( 'enableitem5' );
		$RevolSliderOptionsParams['transition5'] = $params->get( 'transition5' );
		$RevolSliderOptionsParams['speed5'] = $params->get( 'speed5' );
		$RevolSliderOptionsParams['img5'] = $params->get( 'img5' );
		$RevolSliderOptionsParams['titleffect5'] = $params->get( 'titleffect5' );
		$RevolSliderOptionsParams['texteffect5'] = $params->get( 'texteffect5' );
		$RevolSliderOptionsParams['variation5'] = $params->get( 'variation5' );
		$RevolSliderOptionsParams['title5'] = $params->get( 'title5' );
		$RevolSliderOptionsParams['text5'] = $params->get( 'text5' );
		$RevolSliderOptionsParams['titleposition5'] = $params->get( 'titleposition5' );
		$RevolSliderOptionsParams['textposition5'] = $params->get( 'textposition5' );
		$RevolSliderOptionsParams['enableitem6'] = $params->get( 'enableitem6' );
		$RevolSliderOptionsParams['transition6'] = $params->get( 'transition6' );
		$RevolSliderOptionsParams['speed6'] = $params->get( 'speed6' );
		$RevolSliderOptionsParams['img6'] = $params->get( 'img6' );
		$RevolSliderOptionsParams['titleffect6'] = $params->get( 'titleffect6' );
		$RevolSliderOptionsParams['texteffect6'] = $params->get( 'texteffect6' );
		$RevolSliderOptionsParams['variation6'] = $params->get( 'variation6' );
		$RevolSliderOptionsParams['title6'] = $params->get( 'title6' );
		$RevolSliderOptionsParams['text6'] = $params->get( 'text6' );
		$RevolSliderOptionsParams['titleposition6'] = $params->get( 'titleposition6' );
		$RevolSliderOptionsParams['textposition6'] = $params->get( 'textposition6' );
		$RevolSliderOptionsParams['enableitem7'] = $params->get( 'enableitem7' );
		$RevolSliderOptionsParams['transition7'] = $params->get( 'transition7' );
		$RevolSliderOptionsParams['speed7'] = $params->get( 'speed7' );
		$RevolSliderOptionsParams['img7'] = $params->get( 'img7' );
		$RevolSliderOptionsParams['titleffect7'] = $params->get( 'titleffect7' );
		$RevolSliderOptionsParams['texteffect7'] = $params->get( 'texteffect7' );
		$RevolSliderOptionsParams['variation7'] = $params->get( 'variation7' );
		$RevolSliderOptionsParams['title7'] = $params->get( 'title7' );
		$RevolSliderOptionsParams['text7'] = $params->get( 'text7' );
		$RevolSliderOptionsParams['titleposition7'] = $params->get( 'titleposition7' );
		$RevolSliderOptionsParams['textposition7'] = $params->get( 'textposition7' );
		$RevolSliderOptionsParams['enableitem8'] = $params->get( 'enableitem8' );
		$RevolSliderOptionsParams['transition8'] = $params->get( 'transition8' );
		$RevolSliderOptionsParams['speed8'] = $params->get( 'speed8' );
		$RevolSliderOptionsParams['img8'] = $params->get( 'img8' );
		$RevolSliderOptionsParams['titleffect8'] = $params->get( 'titleffect8' );
		$RevolSliderOptionsParams['texteffect8'] = $params->get( 'texteffect8' );
		$RevolSliderOptionsParams['variation8'] = $params->get( 'variation8' );
		$RevolSliderOptionsParams['title8'] = $params->get( 'title8' );
		$RevolSliderOptionsParams['text8'] = $params->get( 'text8' );
		$RevolSliderOptionsParams['titleposition8'] = $params->get( 'titleposition8' );
		$RevolSliderOptionsParams['textposition8'] = $params->get( 'textposition8' );
		$RevolSliderOptionsParams['enableitem9'] = $params->get( 'enableitem9' );
		$RevolSliderOptionsParams['transition9'] = $params->get( 'transition9' );
		$RevolSliderOptionsParams['speed9'] = $params->get( 'speed9' );
		$RevolSliderOptionsParams['img9'] = $params->get( 'img9' );
		$RevolSliderOptionsParams['titleffect9'] = $params->get( 'titleffect9' );
		$RevolSliderOptionsParams['texteffect9'] = $params->get( 'texteffect9' );
		$RevolSliderOptionsParams['variation9'] = $params->get( 'variation9' );
		$RevolSliderOptionsParams['title9'] = $params->get( 'title9' );
		$RevolSliderOptionsParams['text9'] = $params->get( 'text9' );
		$RevolSliderOptionsParams['titleposition9'] = $params->get( 'titleposition9' );
		$RevolSliderOptionsParams['textposition9'] = $params->get( 'textposition9' );
		$RevolSliderOptionsParams['enableitem10'] = $params->get( 'enableitem10' );
		$RevolSliderOptionsParams['transition10'] = $params->get( 'transition10' );
		$RevolSliderOptionsParams['speed10'] = $params->get( 'speed10' );
		$RevolSliderOptionsParams['img10'] = $params->get( 'img10' );
		$RevolSliderOptionsParams['titleffect10'] = $params->get( 'titleffect10' );
		$RevolSliderOptionsParams['texteffect10'] = $params->get( 'texteffect10' );
		$RevolSliderOptionsParams['variation10'] = $params->get( 'variation10' );
		$RevolSliderOptionsParams['title10'] = $params->get( 'title10' );
		$RevolSliderOptionsParams['text10'] = $params->get( 'text10' );
		$RevolSliderOptionsParams['titleposition10'] = $params->get( 'titleposition10' );
		$RevolSliderOptionsParams['textposition10'] = $params->get( 'textposition10' );
		
		return $RevolSliderOptionsParams;
	}
}


?>