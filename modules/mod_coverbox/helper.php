<?php
class modCoverboxHelper
{   

    public static function getContent( $params )
    {
        return 'No content';
    }	
	
	public static function getData( $params)
	{
		$CoverboxOptionsParams = array();
		$CoverboxOptionsParams['moduleclass_sfx'] = $params->get( 'moduleclass_sfx' );
		$CoverboxOptionsParams['loadjquery'] = $params->get( 'loadjquery' );
		$CoverboxOptionsParams['fontsize'] = $params->get( 'fontsize' );
		$CoverboxOptionsParams['color'] = $params->get( 'color' );
		$CoverboxOptionsParams['fontsize-text'] = $params->get( 'fontsize-text' );
		$CoverboxOptionsParams['color-text'] = $params->get( 'color-text' );
		
		$CoverboxOptionsParams['enableitem1'] = $params->get( 'enableitem1' );
		$CoverboxOptionsParams['project_img1'] = $params->get( 'project_img1' );
		$CoverboxOptionsParams['project_title1'] = $params->get( 'project_title1' );
		$CoverboxOptionsParams['project_text1'] = $params->get( 'project_text1' );
		
		$CoverboxOptionsParams['enableitem2'] = $params->get( 'enableitem2' );
		$CoverboxOptionsParams['project_img2'] = $params->get( 'project_img2' );
		$CoverboxOptionsParams['project_title2'] = $params->get( 'project_title2' );
		$CoverboxOptionsParams['project_text2'] = $params->get( 'project_text2' );
		
		$CoverboxOptionsParams['enableitem3'] = $params->get( 'enableitem3' );
		$CoverboxOptionsParams['project_img3'] = $params->get( 'project_img3' );
		$CoverboxOptionsParams['project_title3'] = $params->get( 'project_title3' );
		$CoverboxOptionsParams['project_text3'] = $params->get( 'project_text3' );
		
		$CoverboxOptionsParams['enableitem4'] = $params->get( 'enableitem4' );
		$CoverboxOptionsParams['project_img4'] = $params->get( 'project_img4' );
		$CoverboxOptionsParams['project_title4'] = $params->get( 'project_title4' );
		$CoverboxOptionsParams['project_text4'] = $params->get( 'project_text4' );
		
		$CoverboxOptionsParams['enableitem5'] = $params->get( 'enableitem5' );
		$CoverboxOptionsParams['project_img5'] = $params->get( 'project_img5' );
		$CoverboxOptionsParams['project_title5'] = $params->get( 'project_title5' );
		$CoverboxOptionsParams['project_text5'] = $params->get( 'project_text5' );
		
		$CoverboxOptionsParams['enableitem6'] = $params->get( 'enableitem6' );
		$CoverboxOptionsParams['project_img6'] = $params->get( 'project_img6' );
		$CoverboxOptionsParams['project_title6'] = $params->get( 'project_title6' );
		$CoverboxOptionsParams['project_text6'] = $params->get( 'project_text6' );
		
		$CoverboxOptionsParams['enableitem7'] = $params->get( 'enableitem7' );
		$CoverboxOptionsParams['project_img7'] = $params->get( 'project_img7' );
		$CoverboxOptionsParams['project_title7'] = $params->get( 'project_title7' );
		$CoverboxOptionsParams['project_text7'] = $params->get( 'project_text7' );
		
		$CoverboxOptionsParams['enableitem8'] = $params->get( 'enableitem8' );
		$CoverboxOptionsParams['project_img8'] = $params->get( 'project_img8' );
		$CoverboxOptionsParams['project_title8'] = $params->get( 'project_title8' );
		$CoverboxOptionsParams['project_text8'] = $params->get( 'project_text8' );
		
		$CoverboxOptionsParams['enableitem9'] = $params->get( 'enableitem9' );
		$CoverboxOptionsParams['project_img9'] = $params->get( 'project_img9' );
		$CoverboxOptionsParams['project_title9'] = $params->get( 'project_title9' );
		$CoverboxOptionsParams['project_text9'] = $params->get( 'project_text9' );
		
		$CoverboxOptionsParams['enableitem10'] = $params->get( 'enableitem10' );
		$CoverboxOptionsParams['project_img10'] = $params->get( 'project_img10' );
		$CoverboxOptionsParams['project_title10'] = $params->get( 'project_title10' );
		$CoverboxOptionsParams['project_text10'] = $params->get( 'project_text10' );
		
		$CoverboxOptionsParams['enableitem11'] = $params->get( 'enableitem11' );
		$CoverboxOptionsParams['project_img11'] = $params->get( 'project_img11' );
		$CoverboxOptionsParams['project_title11'] = $params->get( 'project_title11' );
		$CoverboxOptionsParams['project_text11'] = $params->get( 'project_text11' );
		
		$CoverboxOptionsParams['enableitem12'] = $params->get( 'enableitem12' );
		$CoverboxOptionsParams['project_img12'] = $params->get( 'project_img12' );
		$CoverboxOptionsParams['project_title12'] = $params->get( 'project_title12' );
		$CoverboxOptionsParams['project_text12'] = $params->get( 'project_text12' );
		
		return $CoverboxOptionsParams;
	}
}


?>