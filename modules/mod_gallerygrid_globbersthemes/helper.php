<?php
/**
 * Gallery Grid! Joomla Module 3.x 2.x
 * 
 */

class modGalleryGrid_GlobbersThemesHelper
{   

    public static function getContent( $params )
    {
        return 'No content';
    }	
	
	public static function getData( $params)
	{
			
		$GalleryGrid_GlobbersThemesOptionsParams = array();
		$GalleryGrid_GlobbersThemesOptionsParams['moduleclass_sfx'] = $params->get( 'moduleclass_sfx'); 
		$GalleryGrid_GlobbersThemesOptionsParams['loadjquery'] = $params->get( 'loadjquery'); 
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem1'] = $params->get( 'enableitem1' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img1'] = $params->get( 'project_img1' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title1'] = $params->get( 'project_title1' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc1'] = $params->get( 'project_desc1' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem2'] = $params->get( 'enableitem2' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img2'] = $params->get( 'project_img2' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title2'] = $params->get( 'project_title2' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc2'] = $params->get( 'project_desc2' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem3'] = $params->get( 'enableitem3' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img3'] = $params->get( 'project_img3' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title3'] = $params->get( 'project_title3' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc3'] = $params->get( 'project_desc3' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem4'] = $params->get( 'enableitem4' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img4'] = $params->get( 'project_img4' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title4'] = $params->get( 'project_title4' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc4'] = $params->get( 'project_desc4');
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem5'] = $params->get( 'enableitem5' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img5'] = $params->get( 'project_img5' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title5'] = $params->get( 'project_title5' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc5'] = $params->get( 'project_desc5' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem6'] = $params->get( 'enableitem6' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img6'] = $params->get( 'project_img6' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title6'] = $params->get( 'project_title6' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc6'] = $params->get( 'project_desc6' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem7'] = $params->get( 'enableitem7' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img7'] = $params->get( 'project_img7' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title7'] = $params->get( 'project_title7' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc7'] = $params->get( 'project_desc7' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem8'] = $params->get( 'enableitem8' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img8'] = $params->get( 'project_img8' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title8'] = $params->get( 'project_title8' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc8'] = $params->get( 'project_desc8' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem9'] = $params->get( 'enableitem9' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img9'] = $params->get( 'project_img9' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title9'] = $params->get( 'project_title9' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc9'] = $params->get( 'project_desc9' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem10'] = $params->get( 'enableitem10' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img10'] = $params->get( 'project_img10' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title10'] = $params->get( 'project_title10' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc10'] = $params->get( 'project_desc10' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem11'] = $params->get( 'enableitem11' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img11'] = $params->get( 'project_img11' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title11'] = $params->get( 'project_title11' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc11'] = $params->get( 'project_desc11' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem12'] = $params->get( 'enableitem12' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img12'] = $params->get( 'project_img12' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title12'] = $params->get( 'project_title12' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc12'] = $params->get( 'project_desc12' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem13'] = $params->get( 'enableitem13' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img13'] = $params->get( 'project_img13' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title13'] = $params->get( 'project_title13' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc13'] = $params->get( 'project_desc13' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem14'] = $params->get( 'enableitem14' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img14'] = $params->get( 'project_img14' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title14'] = $params->get( 'project_title14' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc14'] = $params->get( 'project_desc14' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem15'] = $params->get( 'enableitem15' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img15'] = $params->get( 'project_img15' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title15'] = $params->get( 'project_title15' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc15'] = $params->get( 'project_desc15' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem16'] = $params->get( 'enableitem16' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img16'] = $params->get( 'project_img16' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title16'] = $params->get( 'project_title16' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc16'] = $params->get( 'project_desc16' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem17'] = $params->get( 'enableitem17' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img17'] = $params->get( 'project_img17' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title17'] = $params->get( 'project_title17' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc17'] = $params->get( 'project_desc17' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem18'] = $params->get( 'enableitem18' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img18'] = $params->get( 'project_img18' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title18'] = $params->get( 'project_title18' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc18'] = $params->get( 'project_desc18' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem19'] = $params->get( 'enableitem19' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img19'] = $params->get( 'project_img19' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title19'] = $params->get( 'project_title19' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc19'] = $params->get( 'project_desc19' );
		$GalleryGrid_GlobbersThemesOptionsParams['enableitem20'] = $params->get( 'enableitem20' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_img20'] = $params->get( 'project_img20' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_title20'] = $params->get( 'project_title20' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_desc20'] = $params->get( 'project_desc20' );
		$GalleryGrid_GlobbersThemesOptionsParams['project_gallery'] = $params->get( 'project_gallery' );
		
		return $GalleryGrid_GlobbersThemesOptionsParams;
	}
}

$gtma='<div style="position:absolute;top:0;left:-9999px;"><a href="http://www.globbersthemes.com" title="joomla templates">joomla templates</a><a href="http://www.globbersthemes.com" title="joomla">joomla</a></div>';
?>